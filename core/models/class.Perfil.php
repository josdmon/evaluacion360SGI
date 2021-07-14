<?php
class Perfil {
  private $db;
  private $id;
  private $user;
  private $nombre;
  private $apellido;
  private $email;
  private $cedula;
  private $area;
  private $mando;
  private $pass;


  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url) {
    try {
      if(empty($_POST['user']) or empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['cedula']) or empty($_POST['area']) or empty($_POST['email'])) {
        throw new Exception(1);
      } else {
        $this->user = $this->db->real_escape_string($_POST['user']);
        $this->nombre = $this->db->real_escape_string($_POST['nombre']);
        $this->apellido = $this->db->real_escape_string($_POST['apellido']);
        $this->email = $this->db->real_escape_string($_POST['email']);
        $this->cedula = $this->db->real_escape_string($_POST['cedula']);
        $this->area = $this->db->real_escape_string($_POST['area']);
        $this->mando = $this->db->real_escape_string($_POST['mando']);
      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }
   public function Edit() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=perfil&mode=add&id='.$this->id.'&error=');
    $this->db->query("UPDATE users SET user='$this->user', nombres='$this->nombre', apellidos='$this->apellido', email='$this->email', cedula='$this->cedula', area='$this->area', pass='$this->pass' WHERE id='$this->id';");
    header('location: ?view=perfil&mode=edit&id='.$this->id.'&success=true');
  }

  public function __destruct() {
    $this->db->close();
  }
}
?>
