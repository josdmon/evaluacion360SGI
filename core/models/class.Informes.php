<?php
class Informes {
  private $id;
  private $db;
  private $codigo;
  
  private $cliente;
  private $nombre_archivo;
  private $fecha;
  private $result;
  private $destination;
  private $ruta;
  private $filename;
  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url,$add_mode = false) {
    global $_clientes, $_informe;
    try {
      if(empty($_POST['codigo'])) {
        throw new Exception(1);
      } else {
        $this->codigo = $this->db->real_escape_string($_POST['codigo']);
        $this->nombre_archivo = $_FILES['archivo']['name'];
        $this->ruta = 'views/app/images/archivos/informe/';
        $this->destination = $this->ruta.basename($_FILES['archivo']['name']);
        $this->filename = $_FILES['archivo']['tmp_name'];
        move_uploaded_file($this->filename, $this->destination);
      }
      
      if(!array_key_exists($_POST['cliente'],$_clientes)) {
        throw new Exception(2);
      } else {
        $this->cliente = intval($_POST['cliente']);
      }
    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit;
    }
  }
  public function Add() {
    $this->Errors('?view=informes&mode=add&error=',true);
    $this->db->query("INSERT INTO informes (nombre_informe,nombre_archivo,id_cliente)
    VALUES ('$this->codigo','$this->nombre_archivo','$this->cliente');");
    header('location: ?view=informes&mode=add&success=true');
  }
  
  public function Edit() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=informes&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE informes SET codigo='$this->codigo', proyecto='$this->proyecto',
    id_cliente='$this->cliente', nombre_archivo='$this->nombre_archivo' WHERE id='$this->id';");
    header('location: ?view=informes&mode=edit&id='.$this->id.'&success=true');
  }
  
  public function Delete() {
    $this->id = $_GET['id'];
    $query = "DELETE FROM informes WHERE id='$this->id';";
    $this->db->multi_query($query);
    header('location: ?view=informes&success=true');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?> 