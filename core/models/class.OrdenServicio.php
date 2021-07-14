<?php
class OrdenServicio {
  private $id;
  private $db;
  private $codigo;
  private $cliente;
  private $nombre_archivo;
  private $destination;
  private $ruta;
  private $filename;
  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url,$add_mode = false) {
    global $_clientes, $_recepcion;
    try {
      if(empty($_POST['codigo'])) {
        throw new Exception(1);
      } else {
        $this->codigo = $this->db->real_escape_string($_POST['codigo']);
        $this->nombre_archivo = mysql_real_escape_string($_FILES['archivo']['name']);
        $this->cliente = intval($_POST['cliente']);
        $this->ruta = 'views/app/images/archivos/orden_de_servicio/';
        $this->destination = $this->ruta.basename(utf8_decode($_FILES['archivo']['name']));
        $this->filename = $_FILES['archivo']['tmp_name'];
        move_uploaded_file($this->filename, $this->destination);
      }
      
      
    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit;
    }
  }
  public function Add() {
    $this->Errors('?view=resultados_clientes&mode=add&error=',true);
    $this->db->query("INSERT INTO orden_servicio (id,id_cliente,nombre_archivo)
    VALUES ('$this->codigo','$this->cliente','$this->nombre_archivo');");
    header('location: ?view=resultados_clientes&mode=add&success=true');
  }
  
  public function Edit() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=resultados_clientes&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE recepcion SET codigo='$this->codigo', proyecto='$this->proyecto',
    id_cliente='$this->cliente', nombre_archivo='$this->nombre_archivo' WHERE id='$this->id';");
    header('location: ?view=resultados_clientes&mode=edit&id='.$this->id.'&success=true');
  }
  
  public function Delete() {
    $this->codigo = $_GET['id'];
    $query = "DELETE FROM recepcion WHERE id='$this->codigo♥';";
    $this->db->multi_query($query);
    header('location: ?view=resultados_clientes&success=true');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?> 