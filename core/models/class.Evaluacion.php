<?php
class Evaluacion {
  private $id;
  private $db;
  private $usuario;
  private $evaluador;
  private $historial;
  private $query;

  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url,$add_mode = false) {
    global $_users, $_evaluacion;
    try {
      if(empty($_POST['evalua'])) {
        throw new Exception(1);
      } else {
        $this->evaluador = intval($_POST['evalua']);
        $this->usuario = intval($_POST['usuario']);
        $this->historial = intval($_POST['historial']);
      }

    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit;
    }
  }
  public function Add() {
      $this->Errors('?view=evaluacion&mode=add&error='.$cont.'&contador='.$cont);

    if ($this->evaluador==$this->usuario) {
      $this->query = $this->db->query("INSERT INTO resultadosevaluacion (id_usuario,evaluador,historial_evaluacion)
      VALUES ('$this->usuario','$this->evaluador','$this->historial');");
    }else{
      $this->query = $this->db->query("INSERT INTO resultadosevaluacion (id_usuario,evaluador,historial_evaluacion)
      VALUES ('$this->usuario','$this->evaluador','$this->historial');");
      $this->query = $this->db->query("INSERT INTO resultadosevaluacion (id_usuario,evaluador,historial_evaluacion)
      VALUES ('$this->evaluador','$this->usuario','$this->historial');");
    }
    header('location: ?view=evaluacion&mode=add&success=true&contador='.$cont);
  }
  public function Delete() {
    $this->user = $_GET['id_user'];
    $this->eval = $_GET['evaluador'];
    $contador = count($_GET["nombre"]);
    $id = $_GET['history'];

    $query = "DELETE FROM resultadosevaluacion WHERE id_usuario='$this->user' AND evaluador='$this->eval' AND historial_evaluacion='$id';";
    $this->db->multi_query($query);
    header('location: ?view=evaluacion&mode=allList&success=true&id='.$id);
  }

  public function __destruct() {
    $this->db->close();
  }
}
?>
