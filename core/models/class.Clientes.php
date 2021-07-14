<?php
class Clientes {
  private $db;
  private $id;
  private $cliente;
  private $contacto;
  private $direccion;
  private $telefono;
  private $ciudad;
  private $departamento;
  private $email;
  private $nit;
  private $pass;
  

  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url) {
    try {
      if(empty($_POST['user']) or empty($_POST['contacto']) or empty($_POST['direccion']) or empty($_POST['telefono']) or empty($_POST['ciudad']) or empty($_POST['departamento']) or empty($_POST['email']) or empty($_POST['nit'])) {
        throw new Exception(1);
      } else {
        $this->cliente = $this->db->real_escape_string($_POST['user']);
        $this->contacto = $this->db->real_escape_string($_POST['contacto']);
        $this->direccion = $this->db->real_escape_string($_POST['direccion']);
        $this->telefono = $this->db->real_escape_string($_POST['telefono']);
        $this->ciudad = $this->db->real_escape_string($_POST['ciudad']);
        $this->departamento = $this->db->real_escape_string($_POST['departamento']);
        $this->email = $this->db->real_escape_string($_POST['email']);
        $this->nit = $this->db->real_escape_string($_POST['nit']);
        $this->pass = Encrypt($_POST['pass']);
 
      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }
  public function Add() {
    $this->Errors('?view=clientes&mode=add&error=');
    $this->db->query("INSERT INTO clientes (user,contacto,direccion,telefono,ciudad,departamento,email,nit) VALUES ('$this->cliente','$this->contacto','$this->direccion','$this->telefono','$this->ciudad','$this->departamento','$this->email','$this->nit');");
    header('location: ?view=clientes&mode=add&success=true');
  }
  public function Edit() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=clientes&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE clientes SET user='$this->cliente', contacto='$this->contacto', direccion='$this->direccion', telefono='$this->telefono', ciudad='$this->ciudad', departamento='$this->departamento', email='$this->email', nit='$this->nit', pass='$this->pass' WHERE id_cliente='$this->id';");
    header('location: ?view=clientes&mode=edit&id='.$this->id.'&success=true');
  }
  public function Delete() { 
    $this->id = intval($_GET['id_cliente']);
    $q = "DELETE FROM clientes WHERE id_cliente='$this->id';";
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
    header('location: ?view=clientes');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?>