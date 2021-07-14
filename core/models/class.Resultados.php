<?php
class Resultados {
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
    global $_recepcion;
    try {
      if(!array_key_exists($_POST['codigo'],$_recepcion)) {
        throw new Exception(1);
      } else {
        $this->codigo = $_POST['codigo']; 
        
        $this->nombre_archivo = $_FILES['result']['name'];
        $this->ruta = 'views/app/images/archivos/resultados/';
        $this->destination = $this->ruta.basename($_FILES['result']['name']);
        $this->filename = $_FILES['result']['tmp_name'];
        move_uploaded_file($this->filename, $this->destination);
      }
      
      
    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit; 
    }
  }
  public function Add() {
    $this->Errors('?view=resultados&mode=add&error=',true);
    $this->db->query("UPDATE recepcion SET resultados='$this->nombre_archivo' WHERE codigo='$this->codigo';");
    header('location: ?view=resultados&mode=add&success=true');
  }
  public function Anexo() {
    $this->Errors('?view=resultados&mode=anexo&error=',true);
    $this->db->query("UPDATE recepcion SET anexo='$this->nombre_archivo' WHERE codigo='$this->codigo';");
    header('location: ?view=resultados&mode=anexo&success=true');
  }
  public function Edit() {
    $this->id = intval($_GET['id_muestra']);
    $this->Errors('?view=resultados&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE resultados SET id_muestra='$this->codigo', resultado='$this->proyecto'WHERE id_muestra='$this->id';");
    header('location: ?view=resultados&mode=edit&id_muestra='.$this->id.'&success=true');
  }
  public function Delete() {
    $this->id = intval($_GET['id_muestra']);
    $query = "DELETE FROM resultados WHERE id_muestra='$this->id';";
    $this->db->multi_query($query);
    header('location: ?view=resultados&success=true');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?> 