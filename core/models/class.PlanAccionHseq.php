<?php
class PlanAccionHseq {
  private $id;
  private $db;
  private $nombre;
  private $apro_jefe_area;
  private $historia_evaluacion;
  private $area;
  private $nombre_archivo;
  private $destination;
  private $ruta;
  private $filename;
  private $lin;
  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url,$add_mode = false) {
    global $_planaccionhseq;
    try {
      if(!array_key_exists($_POST['id'],$_planaccionhseq)) {
        throw new Exception(1);
      } else {
        $this->id = $_POST['id'];
        $this->nombre = $_POST['nombre'];
        $this->lin = $_POST['lin'];
        $this->historia_evaluacion = $_POST['historia_evaluacion'];
        $this->area = $_POST['area'];
        $this->nombre_archivo = $_FILES['gerencia']['name'];
        $this->ruta = 'views/app/images/archivos/plan_accion_hseq/';
        $this->destination = $this->ruta.basename($_FILES['gerencia']['name']);
        $this->filename = $_FILES['gerencia']['tmp_name'];
        move_uploaded_file($this->filename, $this->destination);
      }


    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit;
    }
  }
  public function AddLinPlanAccion() {

    $this->Errors('?view=plan_accion_hseq&mode=all_plan_accion&error=',true);
    $this->db->query("INSERT INTO lin_plan_accion  (nombre,plan_accion,lin)
    VALUES ('$this->nombre','$this->id','$this->lin');");
    header('location: ?view=plan_accion_hseq&mode=all_plan_accion&success=true');
  }
  public function AddOperativo() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=plan_accion_hseq&mode=add_operativo&error=',true);
    $this->db->query("UPDATE plan_accion_hseq SET operativos='$this->nombre_archivo' WHERE id='$this->id';");
    header('location: ?view=plan_accion_hseq&mode=add_operativo&success=true');
  }
  public function AddPlanAccion() {

    $this->Errors('?view=plan_accion_hseq&mode=add_plan_accion&error=',true);
    $this->db->query("INSERT INTO plan_accion_evaluado  (user,area,historia_evaluacion,nombre_archivo)
    VALUES ('$this->id','$this->area','$this->historia_evaluacion','$this->nombre_archivo');");
    header('location: ?view=plan_accion_hseq&mode=add_plan_accion&success=true&id='.$this->historia_evaluacion);
  }
  public function AddGerencial() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=plan_accion_hseq&mode=add_gerencial&error=',true);
    $this->db->query("UPDATE plan_accion_hseq SET mandos_m='$this->nombre_archivo' WHERE id='$this->id';");
    header('location: ?view=plan_accion_hseq&mode=add_gerencial&success=true');
  }
  public function Aprobar() {
    $this->apro_jefe_area = intval($_POST['apro_jefe_area']);
    $this->Errors('?view=plan_accion_hseq&mode=aprobar&id='.$this->historia_evaluacion.'&error=',true);
    $this->db->query("UPDATE plan_accion_evaluado SET apro_jefe_area='$this->apro_jefe_area' WHERE id='$this->id';");
    header('location: ?view=plan_accion_hseq&mode=aprobar&success=true&id='.$this->historia_evaluacion);
  }

  public function AddGeneral() {
    $this->id = intval($_GET['id']);
    $this->Errors('?view=plan_accion_hseq&mode=add_general&error=',true);
    $this->db->query("UPDATE plan_accion_hseq SET general='$this->nombre_archivo' WHERE id='$this->id';");
    header('location: ?view=plan_accion_hseq&mode=add_general&success=true');
  }
  public function Delete() {
    $this->id = intval($_GET['id']);
    $query = "DELETE FROM lin_plan_accion WHERE id='$this->id';";
    $this->db->multi_query($query);
    header('location: ?view=plan_accion_hseq&mode=all_plan_accion&success=true');
  }

  public function __destruct() {
    $this->db->close();
  }
}
?>
