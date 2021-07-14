<?php
class SubcontratadosLab {
  private $id;
  private $db;
  private $p;
  private $f;
  private $recibido;
  private $entrega;
  private $proveedor;
  private $fecha_sub;
  private $fecha_mue;
  private $codigo_m;
  private $matriz;
  private $tipo_mue;
  private $analisis;
  private $estado_mue;
  private $query;
  private $query_final;
  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url,$add_mode = false) {
    global $_prosub;
    try {
      if(empty($_POST['contador'])) {
        throw new Exception(1);
      } else {
        $c = intval($_POST['contador']);

      }

    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit;
    }
  }
  public function Add() {
    $c = intval($_POST['contador']);

    for ($i=1; $i <= $c; $i++) {
      $this->codigo_m = $this->db->real_escape_string($_POST['codigo'.$i]);
      $this->matriz = $this->db->real_escape_string($_POST['matriz'.$i]);
      $this->proveedor = intval($_POST['proveedor']);
      $this->tipo_mue = $this->db->real_escape_string($_POST['tipo_m'.$i]);
      $this->analisis = $this->db->real_escape_string($_POST['analisis'.$i]);
      $this->estado_mue = $this->db->real_escape_string($_POST['estado_m'.$i]);
      $this->fecha_sub = str_replace('/', '-', date('y-n-j', strtotime($_POST['fecha_s'])));
      $this->fecha_mue = str_replace('/', '-', date('y-n-j', strtotime($_POST['fecha_m'.$i])));
      $this->Errors('?view=subcontratados&mode=add&error=',true);
      $this->query = $this->db->query("INSERT INTO subcontratados (codigo,proveedor,matriz,fecha_m,fecha_s,tipo_m,analisis_m,estado_m)
      VALUES ('$this->codigo_m','$this->proveedor','$this->matriz','$this->fecha_mue','$this->fecha_sub','$this->tipo_mue','$this->analisis','$this->estado_mue');");
    }

    header('location: ?view=subcontratados&mode=add&success=true');
  }

  public function Edit() {
   // $this->id = intval($_GET['id']);
    $this->id = ($_GET['id']);
    $this->f = str_replace('/', '-', date('y-n-j', strtotime($_POST['fecha_s'])));
    $this->recibido = str_replace('/', '-', date('y-n-j', strtotime($_POST['fecha_r'])));
    $this->entrega = str_replace('/', '-', date('y-n-j', strtotime($_POST['fecha_e'])));
    $this->p = intval($_POST['proveedor']);
    $this->Errors('?view=subcontratados&mode=edit&id='.$this->id.'&error=');
    $this->db->query("UPDATE subcontratados SET fecha_r='$this->recibido', fecha_e='$this->entrega' WHERE proveedor='$this->p' AND fecha_s='$this->f';");
    header('location: ?view=subcontratados&success=true');
  }
  public function Entregado() {
    $this->p = $_GET['p'];
    $this->f = $_GET['f'];
    $this->id = $_GET['id'];
    $this->db->query("UPDATE subcontratados SET entregado='$this->id' WHERE proveedor='$this->p' AND fecha_s='$this->f';");
    header('location: ?view=subcontratados&success=true');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?>
