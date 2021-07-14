<?php
class Users {
  private $db;
  private $id;
  private $user;
  private $nombre;
  private $apellido;
  private $email;
  private $cedula;
  private $area;
  private $categorias;
  private $mando;
  private $pass;


  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url) {
    try {
      if(empty($_POST['id'])) {
        throw new Exception(1);
      } else {
        $this->user = $this->db->real_escape_string($_POST['user']);
        $this->nombre = $this->db->real_escape_string($_POST['nombre']);
        $this->apellido = $this->db->real_escape_string($_POST['apellido']);
        $this->email = $this->db->real_escape_string($_POST['email']);
        $this->cedula = $this->db->real_escape_string($_POST['cedula']);
        $this->area = $this->db->real_escape_string($_POST['area']);
        $this->categorias = $this->db->real_escape_string($_POST['categorias']);
        $this->mando = $this->db->real_escape_string($_POST['mando']);
        $this->pass = Encrypt($_POST['pass']);


      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }
  public function Add() {
    $this->Errors('?view=user&mode=add&error=');
    $this->db->query("INSERT INTO users (user,nombres,apellidos,email,cedula,area,categorias,pass) VALUES ('$this->user','$this->nombre','$this->apellido','$this->email','$this->cedula','$this->area','$this->mando','$this->pass');");
    header('location: ?view=user&mode=add&success=true');
  }
  public function Edit() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=user&mode=add&id='.$this->id.'&error=');
    $this->db->query("UPDATE users SET user='$this->user', nombres='$this->nombre', apellidos='$this->apellido', email='$this->email', cedula='$this->cedula', area='$this->area', categorias='$this->categorias' WHERE id='$this->id';");
    header('location: ?view=user&mode=edit&id='.$this->id.'&success=true');
  }
  public function EditPass() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=user&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE users SET pass='$this->pass' WHERE id='$this->id';");
    header('location: ?view=user&mode=edit&id='.$this->id.'&success=true');
  }
  public function Delete() {
    $this->id = intval($_GET['id']);
    $q = "DELETE FROM users WHERE id='$this->id';";
    /*$q .= "DELETE FROM foros WHERE id_categoria='$this->id';";
    $sql = $this->db->query("SELECT id FROM foros WHERE id_categoria='$this->id';");
    if($this->db->rows($sql) > 0) {
      while($data = $this->db->recorrer($sql)) {
        $id_foro = $data[0];
        $q .= "DELETE FROM temas WHERE id_foro='$id_foro';";
      }
    }*/
    $this->db->liberar($sql);
    $this->db->multi_query($q);
    header('location: ?view=user&success=true');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?>
