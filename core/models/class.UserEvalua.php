<?php
class UserEvalua {
  private $id;
  private $db;
  private $usuario;
  private $evaluador;
  private $history;
  private $categoria;
  private $mg1; private $mg2; private $mg3; private $mg4; private $mg5; private $mg6; private $mg7; private $mdgerenci;
  private $mm1; private $mm2; private $mm3; private $mm4; private $mm5; private $mm6; private $mm7; private $mdmedio;
  private $mhse1; private $mhse2; private $mhse3; private $mhse4; private $mhse5; private $mhse6; private $mdhse;
  private $to1; private $to2; private $to3; private $to4; private $to5; private $to6; private $to7; private $trboperativo;
  private $cmn1; private $cmn2; private $cmn3; private $cmn4; private $comunicacion;
  private $etd1; private $etd2; private $etd3; private $etd4; private $efectividad;
  private $hbd1; private $hbd2; private $hbd3; private $hbd4; private $habilidad;
  private $ldr1; private $ldr2; private $ldr3; private $ldr4; private $liderasgo;
  private $pfl1; private $pfl2; private $pfl3; private $pfl4; private $pfl5; private $profesional;
  private $etc1; private $etc2; private $etc3; private $etica;
  private $gerenci1; private $gerenci2; private $gerenci3; private $gerencia;
  private $preabi1; private $preabi2; private $preabi3;
  private $area;


  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url,$add_mode = false) {

    try {
      //empty -> determina si una variable esta vacia
      if(empty($_POST['profesional1']) or empty($_POST['profesional2']) or empty($_POST['profesional3']) or empty($_POST['profesional4']) or empty($_POST['profesional5']) or empty($_POST['comunicacion1']) or empty($_POST['comunicacion2']) or empty($_POST['comunicacion3']) or empty($_POST['comunicacion4']) or empty($_POST['efectividad1']) or empty($_POST['efectividad2']) or empty($_POST['efectividad3']) or empty($_POST['efectividad4']) or empty($_POST['habilidad1']) or empty($_POST['habilidad2']) or empty($_POST['habilidad3']) or empty($_POST['habilidad4']) or empty($_POST['liderasgo1']) or empty($_POST['liderasgo2']) or empty($_POST['liderasgo3']) or empty($_POST['liderasgo4']) or  empty($_POST['eticas1']) or empty($_POST['eticas2']) or empty($_POST['eticas3']) or empty($_POST['usuario']) or empty($_POST['evaluador']) or empty($_POST['area'])) {
        throw new Exception(1);
      } else {
        $this->mg1 = intval($_POST['mdgerenci1']);
        $this->mg2 = intval($_POST['mdgerenci2']);
        $this->mg3 = intval($_POST['mdgerenci3']);
        $this->mg4 = intval($_POST['mdgerenci4']);
        $this->mg5 = intval($_POST['mdgerenci5']);
        $this->mg6 = intval($_POST['mdgerenci6']);
        $this->mg7 = intval($_POST['mdgerenci7']);
        $this->mdgerenci = ($this->mg1+$this->mg2+$this->mg3+$this->mg4+$this->mg5+$this->mg6+$this->mg7)/7;
        $this->mhse1 = intval($_POST['mdmedio1']);
        $this->mm2 = intval($_POST['mdmedio2']);
        $this->mm3 = intval($_POST['mdmedio3']);
        $this->mm4 = intval($_POST['mdmedio4']);
        $this->mm5 = intval($_POST['mdmedio5']);
        $this->mm6 = intval($_POST['mdmedio6']);
        $this->mm7 = intval($_POST['mdmedio7']);
        $this->mdmedio = ($this->mm1+$this->mm2+$this->mm3+$this->mm4+$this->mm5+$this->mm6+$this->mm7)/7;
        $this->mhse1 = intval($_POST['mdhse1']);
        $this->mhse2 = intval($_POST['mdhse2']);
        $this->mhse3 = intval($_POST['mdhse3']);
        $this->mhse4 = intval($_POST['mdhse4']);
        $this->mhse5 = intval($_POST['mdhse5']);
        $this->mhse6 = intval($_POST['mdhse6']);
        $this->mdhse = ($this->mhse1+$this->mhse2+$this->mhse3+$this->mhse4+$this->mhse5+$this->mhse6)/6;
        $this->to1 = intval($_POST['trboperativo1']);
        $this->to2 = intval($_POST['trboperativo2']);
        $this->to3 = intval($_POST['trboperativo3']);
        $this->to4 = intval($_POST['trboperativo4']);
        $this->to5 = intval($_POST['trboperativo5']);
        $this->to6 = intval($_POST['trboperativo6']);
        $this->to7 = intval($_POST['trboperativo7']);
        $this->trboperativo = ($this->to1+$this->to2+$this->to3+$this->to4+$this->to5+$this->to6+$this->to7)/7;
        $this->pfl1 = intval($_POST['profesional1']);
        $this->pfl2 = intval($_POST['profesional2']);
        $this->pfl3 = intval($_POST['profesional3']);
        $this->pfl4 = intval($_POST['profesional4']);
        $this->pfl5 = intval($_POST['profesional5']);
        $this->profesional = ($this->pfl1+$this->pfl2+$this->pfl3+$this->pfl4+$this->pfl5)/5;
        $this->cmn1 = intval($_POST['comunicacion1']);
        $this->cmn2 = intval($_POST['comunicacion2']);
        $this->cmn3 = intval($_POST['comunicacion3']);
        $this->cmn4 = intval($_POST['comunicacion4']);
        $this->comunicacion = ($this->cmn1+$this->cmn2+$this->cmn3+$this->cmn4)/4;
        $this->etd1 = intval($_POST['efectividad1']);
        $this->etd2 = intval($_POST['efectividad2']);
        $this->etd3 = intval($_POST['efectividad3']);
        $this->etd4 = intval($_POST['efectividad4']);
        $this->efectividad = ($this->etd1+$this->etd2+$this->etd3+$this->etd4)/4;
        $this->hbd1 = intval($_POST['habilidad1']);
        $this->hbd2 = intval($_POST['habilidad2']);
        $this->hbd3 = intval($_POST['habilidad3']);
        $this->hbd4 = intval($_POST['habilidad4']);
        $this->habilidad = ($this->hbd1+$this->hbd2+$this->hbd3+$this->hbd4)/4;
        $this->ldr1 = intval($_POST['liderasgo1']);
        $this->ldr2 = intval($_POST['liderasgo2']);
        $this->ldr3 = intval($_POST['liderasgo3']);
        $this->ldr4 = intval($_POST['liderasgo4']);
        $this->liderasgo = ($this->ldr1+$this->ldr2+$this->ldr3+$this->ldr4)/4;
        $this->etc1 = intval($_POST['eticas1']);
        $this->etc2 = intval($_POST['eticas2']);
        $this->etc3 = intval($_POST['eticas3']);
        $this->etica = ($this->etc1+$this->etc2+$this->etc3)/3;
        $this->gerenci1 = intval($_POST['gerencia1']);
        $this->gerenci2 = intval($_POST['gerencia2']);
        $this->gerenci3 = intval($_POST['gerencia3']);
        $this->gerencia = ($this->gerenci1+$this->gerenci2+$this->gerenci3)/3;
        if (isset($_POST['preabi1'])) {
          $this->preabi1 = implode(', ', $_POST['preabi1']);
        }
        //$this->preabi1 = $this->db->real_escape_string($_POST['preabi1']);
        if (isset($_POST['preabi2'])) {
          $this->preabi2 = implode(', ', $_POST['preabi2']);
        }
        //$this->preabi2 = $this->db->real_escape_string($_POST['preabi2']);
        $this->preabi3 = $this->db->real_escape_string($_POST['preabi3']);
        $this->usuario = intval($_POST['usuario']);
        $this->evaluador = intval($_POST['evaluador']);
        $this->area = intval($_POST['area']);
        $this->categoria = intval($_POST['categoria']);
        $this->history = intval($_POST['history']);

      }
    } catch(Exception $error) {
      header('location: ' . $url . $error->getMessage());
      exit;
    }
  }
  public function Gerencia() {
    $this->Errors('?view=evaluador&mode=1&error=',true);
    $this->db->query("UPDATE resultadosevaluacion SET profesional='$this->profesional', efectividad='$this->efectividad', comunicacion='$this->comunicacion', habilidad='$this->habilidad', etica='$this->etica', liderasgo='$this->liderasgo', p_abierta1='$this->preabi1', p_abierta2='$this->preabi2', p_abierta3='$this->preabi3', m_gerencial='$this->mdgerenci', gerencia='$this->gerencia', area='$this->area', categoria='$this->categoria' WHERE id_usuario='$this->usuario' AND evaluador='$this->evaluador' AND historial_evaluacion = '$this->history';");

    header('location: ?view=evaluador&mode=1&success=true');
  }
  public function Manmedios() {
    $this->Errors('?view=evaluador&mode=2&error=',true);
    $this->db->query("UPDATE resultadosevaluacion SET profesional='$this->profesional', efectividad='$this->efectividad', comunicacion='$this->comunicacion', habilidad='$this->habilidad', etica='$this->etica', liderasgo='$this->liderasgo', p_abierta1='$this->preabi1', p_abierta2='$this->preabi2', p_abierta3='$this->preabi3', m_medio='$this->mdmedio', gerencia='$this->gerencia', area='$this->area', categoria='$this->categoria' WHERE id_usuario='$this->usuario' AND evaluador='$this->evaluador' AND historial_evaluacion='$this->history';");

    header('location: ?view=evaluador&mode=2&success=true');
  }
  public function Manhse() {
    $this->Errors('?view=evaluador&mode=4&error=',true);
    $this->db->query("UPDATE resultadosevaluacion SET profesional='$this->profesional', efectividad='$this->efectividad', comunicacion='$this->comunicacion', habilidad='$this->habilidad', etica='$this->etica', liderasgo='$this->liderasgo', p_abierta1='$this->preabi1', p_abierta2='$this->preabi2', p_abierta3='$this->preabi3', m_hse='$this->mdhse', gerencia='$this->gerencia', area='$this->area', categoria='$this->categoria' WHERE id_usuario='$this->usuario' AND evaluador='$this->evaluador' AND historial_evaluacion = '$this->history';");

    header('location: ?view=evaluador&mode=4&success=true');
  }
  public function Operativos() {
    $this->Errors('?view=evaluador&mode=3&error=',true);
    $this->db->query("UPDATE resultadosevaluacion SET profesional='$this->profesional', efectividad='$this->efectividad', comunicacion='$this->comunicacion', habilidad='$this->habilidad', etica='$this->etica', liderasgo='$this->liderasgo', p_abierta1='$this->preabi1', p_abierta2='$this->preabi2', p_abierta3='$this->preabi3', t_operativo='$this->trboperativo', area='$this->area', categoria='$this->categoria' WHERE id_usuario='$this->usuario' AND evaluador='$this->evaluador' AND historial_evaluacion='$this->history';");

    header('location: ?view=evaluador&mode=3&success=true');
  }
  public function __destruct() {
    $this->db->close();
  }
}
?>
