<?php
class ConfigRecepcion {
  private $id;
  private $db;
  private $codigo;
  private $proyecto;
  private $plan_muestreo;
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
    global $_clientes, $_recepcion;
    try {
      if(empty($_POST['codigo'])) {
        throw new Exception(1);
      } else {
        $this->codigo = $this->db->real_escape_string($_POST['codigo']);
        $this->proyecto = $this->db->real_escape_string($_POST['proyecto']);
        $this->plan_muestreo = $this->db->real_escape_string($_POST['plan_muestreo']);
        $this->nombre_archivo = $_FILES['archivo']['name'];
        $this->fecha = str_replace('/', '-', date('y-n-j', strtotime($_POST['fecha'])));
        $this->ruta = 'views/app/images/archivos/recepcion/';
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
    $this->Errors('?view=recepcion&mode=add&error=',true);
    $this->db->query("INSERT INTO recepcion (codigo,proyecto,plan_muestreo,id_cliente,nombre_archivo,f_recepcion)
    VALUES ('$this->codigo','$this->proyecto','$this->plan_muestreo','$this->cliente','$this->nombre_archivo','$this->fecha');");
    header('location: ?view=recepcion&mode=add&success=true');
  }
 
  public function Edit() {
   // $this->id = intval($_GET['id']);
    $this->id = ($_GET['id']);
    $this->Errors('?view=recepcion&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE recepcion SET codigo='$this->codigo', proyecto='$this->proyecto', plan_muestreo='$this->plan_muestreo',
    id_cliente='$this->cliente', nombre_archivo='$this->nombre_archivo', f_recepcion='$this->fecha' WHERE codigo='$this->id';");
    header('location: ?view=recepcion&mode=edit&id='.$this->id.'&success=true');
  }
  
  public function Delete() {
    $this->id = $_GET['id'];
    $query = "DELETE FROM recepcion WHERE codigo='$this->id';";
    $this->db->multi_query($query);
    header('location: ?view=recepcion&success=true');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?> 