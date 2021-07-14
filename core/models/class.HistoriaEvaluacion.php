<?php
class HistoriaEvaluacion {
  private $id;
  private $db;
  private $history;
  private $historial;
  private $evaluador;
  private $usuario;
  private $area;
  private $categoria;
  private $query;
  private $c;

  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url,$add_mode = false) {
    global $_users, $_evaluacion;
    try {
      if(empty($_POST['historial'])) {
        throw new Exception(1);
      } else {
        $this->historial = $this->db->real_escape_string($_POST['historial']);
      }

    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit;
    }
  }

  public function Add() {

    $this->Errors('?view=historial_evaluacion&mode=add&error=');

    $c = intval($_POST['contador']);
    for ($i=1; $i <= $c; $i++) {
      $this->evaluador = intval($_POST['evalua'.$i]);
      $this->usuario = intval($_POST['usuario'.$i]);
      $this->area = intval($_POST['area'.$i]);
      $this->categoria = intval($_POST['categoria'.$i]);
      $this->history = intval($_POST['history']);

      $this->query = $this->db->query("INSERT INTO resultadosevaluacion (id_usuario,evaluador,area,categoria,historial_evaluacion)
      VALUES ('$this->usuario','$this->evaluador','$this->area','$this->categoria','$this->history');");
    }
    $this->db->query("INSERT INTO historial_evaluacion (aprobado) VALUES ('$this->historial');");
    header('location: ?view=historial_evaluacion&mode=add&success=true');
  }
  public function Delete() {
    $this->id = $_GET['id'];
    $query = "DELETE FROM resultadosevaluacion WHERE id_usuario='$this->user' AND evaluador='$this->eval';";
    $this->db->multi_query($query);
    header('location: ?view=evaluacion&mode=add&success=true');
  }

  public function __destruct() {
    $this->db->close();
  }
}
?>
