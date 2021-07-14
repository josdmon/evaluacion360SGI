<?php
class Cierre {
  private $id;
  private $db;
  private $codigo;
  private $proyecto;
  private $nombre_archivo;
  private $destination;
  private $ruta;
  private $filename;
  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url,$add_mode = false) {
    global $_allordenservicio;
    try {
      if(!array_key_exists($_POST['codigo'],$_allordenservicio)) {
        throw new Exception(1);
      } else {
        $this->codigo = $_POST['codigo']; 
        
        $this->nombre_archivo = $_FILES['archivo']['name'];
        $this->ruta = 'views/app/images/archivos/acta_de_cierre/';
        $this->destination = $this->ruta.basename($_FILES['archivo']['name']);
        $this->filename = $_FILES['archivo']['tmp_name'];
        move_uploaded_file($this->filename, $this->destination);
      }
      
      
    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit; 
    }
  }
  public function Add() {
    $this->Errors('?view=cierre&mode=add&error=',true);
    $this->db->query("UPDATE orden_servicio SET acta_cierre='$this->nombre_archivo' WHERE id='$this->codigo';");
    header('location: ?view=cierre&mode=add&success=true');
  }
  
  public function Edit() {
    $this->id = intval($_GET['id_muestra']);
    $this->Errors('?view=cierre&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE resultados SET id_muestra='$this->codigo', resultado='$this->proyecto'WHERE id_muestra='$this->id';");
    header('location: ?view=cierre&mode=edit&id_muestra='.$this->id.'&success=true');
  }
  public function Delete() {
    $this->id = intval($_GET['id_muestra']);
    $query = "DELETE FROM resultados WHERE id_muestra='$this->id';";
    $this->db->multi_query($query);
    header('location: ?view=cierre&success=true');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?> 