<?php
class EncuestaVial20 {
  private $db; private $id; private $user; private $licencia; private $categoria_v; private $fecha_v; private $edad; private $ciudad; private $genero; private $cargo; private $vinculado_e;
  private $area; private $conduce_v; private $salir_t; private $desplazamiento_v_p; private $programa_s; private $frecuencia_s; private $accidentes_t; private $accidentes_t_peaton; private $accidentes_t_pasajero; private $accidentes_t_m; private $desplazamiento_cs; private $experiencia_conduce;
  private $circustancia_a_t; private $circustancia_a_pet; private $circustancia_a_pasj; private $circustancia_a_dmat;
  private $tiempo_desp_ida; private $tiempo_desp_vuelta; private $programa_tiempo; private $distancia_cs; private $accidentes_cs; private $factores_riesgo; private $accidentes_cs_r; private $causa_accidente1; private $causa_accidente2; private $causa_accidente3; private $causa_accidente4; private $causa_accidente5; private $causa_accidente6; private $causa_accidente7; private $causa_accidente8; private $causa_accidente9; private $causa_accidente10; private $causa_accidente11;
  private $causa_accidente12; private $otro;

  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url) {
    try {
      if(empty($_POST['user'])) {
        throw new Exception(1);
      } else {
        $this->user = intval($_POST['user']);
        $this->licencia = intval($_POST['licencia']);
        $this->categoria_v = intval($_POST['categoria_v']);
        $this->fecha_v = str_replace('/', '-', date('y-n-j', strtotime($_POST['fecha_v'])));
        $this->edad = intval($_POST['edad']);
        $this->genero = intval($_POST['genero']);
        $this->cargo = $this->db->real_escape_string($_POST['cargo']);
        $this->ciudad= $this->db->real_escape_string($_POST['ciudad']);
        $this->vinculado_e = intval($_POST['vinculado_e']);
        $this->area = intval($_POST['area']);
        $this->conduce_v = intval($_POST['conduce_v']);
        $this->experiencia_conduce = intval($_POST['experiencia_conduce']);
        $this->salir_t = intval($_POST['salir_t']);
        $this->desplazamiento_v_p = intval($_POST['desplazamiento_v_p']);
        $this->programa_s = intval($_POST['programa_s']);
        $this->frecuencia_s = intval($_POST['frecuencia_s']);
        $this->accidentes_t = intval($_POST['accidentes_t']);
        $this->accidentes_t_peaton = intval($_POST['accidentes_t_peaton']);
        $this->accidentes_t_pasajero = intval($_POST['accidentes_t_pasajero']);
        $this->accidentes_t_m = intval($_POST['accidentes_t_d_material']);
        $this->circustancia_a_t = $this->db->real_escape_string($_POST['circustancia_a_t']);
        $this->circustancia_a_pet = $this->db->real_escape_string($_POST['circustancia_a_pet']);
        $this->circustancia_a_pasj = $this->db->real_escape_string($_POST['circustancia_a_pasj']);
        $this->circustancia_a_dmat = $this->db->real_escape_string($_POST['circustancia_a_dmat']);
        $this->desplazamiento_cs = intval($_POST['desplazamiento_cs']);
        $this->tiempo_desp_ida = $this->db->real_escape_string($_POST['tiempo_desp_ida']);
        $this->tiempo_desp_vuelta = $this->db->real_escape_string($_POST['tiempo_desp_vuelta']);
        $this->programa_tiempo = intval($_POST['programa_tiempo']);
        $this->distancia_cs = $this->db->real_escape_string($_POST['distancia_cs']);
        $this->accidentes_cs = intval($_POST['accidentes_cs']);
        $this->factores_riesgo = intval($_POST['factores_riesgo']);
        $this->causa_accidente1 = intval($_POST['causa_accidente1']);
        $this->causa_accidente2 = intval($_POST['causa_accidente2']);
        $this->causa_accidente3 = intval($_POST['causa_accidente3']);
        $this->causa_accidente4 = intval($_POST['causa_accidente4']);
        $this->causa_accidente5 = intval($_POST['causa_accidente5']);
        $this->causa_accidente6 = intval($_POST['causa_accidente6']);
        $this->causa_accidente7 = intval($_POST['causa_accidente7']);
        $this->causa_accidente8 = intval($_POST['causa_accidente8']);
        $this->causa_accidente9 = intval($_POST['causa_accidente9']);
        $this->causa_accidente10 = intval($_POST['causa_accidente10']);
        $this->causa_accidente11 = intval($_POST['causa_accidente11']);
        $this->causa_accidente12 = intval($_POST['causa_accidente12']);
        $this->otro = intval($_POST['otro']);
      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }
  public function Add() {
    $this->Errors('?view=usuario_evalua&mode=add&error=');
    $this->db->query("INSERT INTO encuesta20 (user,licencia,categoria_v,fecha_v,edad,genero,ciudad,cargo,vinculado_e,area,conduce_v,experiencia_conduce,desplazamiento_v_p,programa_s,frecuencia_s,accidentes_t,accidentes_t_peaton,accidentes_t_pasajero,accidentes_t_d_material,circustancia_a_t,circustancia_a_pet,circustancia_a_dmat,circustancia_a_pasj,desplazamiento_cs,tiempo_desp_ida,tiempo_desp_vuelta,programa_tiempo,distancia_cs,factores_riesgo,causa_accidente1,causa_accidente2,causa_accidente3,causa_accidente4,causa_accidente5,causa_accidente6,causa_accidente7,causa_accidente8,causa_accidente9,causa_accidente10,causa_accidente11,causa_accidente12,otro) VALUES ('$this->user','$this->licencia','$this->categoria_v','$this->fecha_v','$this->edad','$this->genero','$this->ciudad','$this->cargo','$this->vinculado_e','$this->area','$this->conduce_v','$this->experiencia_conduce','$this->desplazamiento_v_p','$this->programa_s','$this->frecuencia_s','$this->accidentes_t','$this->accidentes_t_peaton','$this->accidentes_t_pasajero','$this->accidentes_t_m','$this->circustancia_a_t','$this->circustancia_a_pet','$this->circustancia_a_dmat','$this->circustancia_a_pasj','$this->desplazamiento_cs','$this->tiempo_desp_ida','$this->tiempo_desp_vuelta','$this->programa_tiempo','$this->distancia_cs','$this->factores_riesgo','$this->causa_accidente1','$this->causa_accidente2','$this->causa_accidente3','$this->causa_accidente4','$this->causa_accidente5','$this->causa_accidente6','$this->causa_accidente7','$this->causa_accidente8','$this->causa_accidente9','$this->causa_accidente10','$this->causa_accidente11','$this->causa_accidente12','$this->otro');");
    header('location: ?view=usuario_evalua&mode=add&success=true');
  }

  public function __destruct() {
    $this->db->close();
  }
}
?>
