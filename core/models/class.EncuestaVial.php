<?php
class EncuestaVial {
  private $db; private $id; private $user; private $licencia; private $categoria_v; private $fecha_v; private $edad; private $genero; private $cargo; private $vinculado_e;
  private $area; private $conduce_v; private $salir_t; private $desplazamientos; private $programa_s; private $frecuencia_s; private $accidentes_t; private $accidentes_t_c; private $accidentes_t_r; private $desplazamiento_cs;
  private $tiempo_desp; private $distancia_cs; private $accidentes_cs; private $accidentes_cs_c; private $accidentes_cs_r; private $causa_accidente1; private $causa_accidente2; private $causa_accidente3; private $causa_accidente4; private $causa_accidente5; private $causa_accidente6; private $causa_accidente7; private $causa_accidente8; private $causa_accidente9; private $causa_accidente10; private $causa_accidente11; private $causa_accidente12;

  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url) {
    try {
      if(empty($_POST['user'])) {
        throw new Exception(1);
      } else {
        $this->user = intval($_POST['user']);
        $this->licencia = $this->db->real_escape_string($_POST['licencia']);
        $this->categoria_v = $this->db->real_escape_string($_POST['categoria_v']);
        $this->fecha_v = str_replace('/', '-', date('y-n-j', strtotime($_POST['fecha_v'])));
        $this->edad = intval($_POST['edad']);
        $this->genero = $this->db->real_escape_string($_POST['genero']);
        $this->cargo = $this->db->real_escape_string($_POST['cargo']);
        $this->vinculado_e = $this->db->real_escape_string($_POST['vinculado_e']);
        $this->area = $this->db->real_escape_string($_POST['area']);
        $this->conduce_v = $this->db->real_escape_string($_POST['conduce_v']);
        $this->salir_t = $this->db->real_escape_string($_POST['salir_t']);
        $this->desplazamientos = $this->db->real_escape_string($_POST['desplazamientos']);
        $this->programa_s = $this->db->real_escape_string($_POST['programa_s']);
        $this->frecuencia_s = $this->db->real_escape_string($_POST['frecuencia_s']);
        $this->accidentes_t = $this->db->real_escape_string($_POST['accidentes_t']);
        $this->accidentes_t_c = intval($_POST['accidentes_t_c']);
        $this->accidentes_t_r = $this->db->real_escape_string($_POST['accidentes_t_r']);
        $this->desplazamiento_cs = $this->db->real_escape_string($_POST['desplazamiento_cs']);
        $this->tiempo_desp = $this->db->real_escape_string($_POST['tiempo_desp']);
        $this->distancia_cs = $this->db->real_escape_string($_POST['distancia_cs']);
        $this->accidentes_cs = $this->db->real_escape_string($_POST['accidentes_cs']);
        $this->accidentes_cs_c = intval($_POST['accidentes_cs_c']);
        $this->accidentes_cs_r = $this->db->real_escape_string($_POST['accidentes_cs_r']);
        $this->causa_accidente1 = $this->db->real_escape_string($_POST['causa_accidente1']);
        $this->causa_accidente2 = $this->db->real_escape_string($_POST['causa_accidente2']);
        $this->causa_accidente3 = $this->db->real_escape_string($_POST['causa_accidente3']);
        $this->causa_accidente4 = $this->db->real_escape_string($_POST['causa_accidente4']);
        $this->causa_accidente5 = $this->db->real_escape_string($_POST['causa_accidente5']);
        $this->causa_accidente6 = $this->db->real_escape_string($_POST['causa_accidente6']);
        $this->causa_accidente7 = $this->db->real_escape_string($_POST['causa_accidente7']);
        $this->causa_accidente8 = $this->db->real_escape_string($_POST['causa_accidente8']);
        $this->causa_accidente9 = $this->db->real_escape_string($_POST['causa_accidente9']);
        $this->causa_accidente10 = $this->db->real_escape_string($_POST['causa_accidente10']);
        $this->causa_accidente11 = $this->db->real_escape_string($_POST['causa_accidente11']);
        $this->causa_accidente12 = $this->db->real_escape_string($_POST['causa_accidente12']);
      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }
  public function Add() {
    $this->Errors('?view=usuario_evalua&mode=add&error=');
    $this->db->query("INSERT INTO encuesta (user,licencia,categoria_v,fecha_v,edad,genero,cargo,vinculado_e,area,conduce_v,salir_t,desplazamientos,programa_s,frecuencia_s,accidentes_t,accidentes_t_c,accidentes_t_r,desplazamiento_cs,tiempo_desp,distancia_cs,accidentes_cs,accidentes_cs_c,accidentes_cs_r,causa_accidente1,causa_accidente2,causa_accidente3,causa_accidente4,causa_accidente5,causa_accidente6,causa_accidente7,causa_accidente8,causa_accidente9,causa_accidente10,causa_accidente11,causa_accidente12) VALUES ('$this->user','$this->licencia','$this->categoria_v','$this->fecha_v','$this->edad','$this->genero','$this->cargo','$this->vinculado_e','$this->area','$this->conduce_v','$this->salir_t','$this->desplazamientos','$this->programa_s','$this->frecuencia_s','$this->accidentes_t','$this->accidentes_t_c','$this->accidentes_t_r','$this->desplazamiento_cs','$this->tiempo_desp','$this->distancia_cs','$this->accidentes_cs','$this->accidentes_cs_c','$this->accidentes_cs_r','$this->causa_accidente1','$this->causa_accidente2','$this->causa_accidente3','$this->causa_accidente4','$this->causa_accidente5','$this->causa_accidente6','$this->causa_accidente7','$this->causa_accidente8','$this->causa_accidente9','$this->causa_accidente10','$this->causa_accidente11','$this->causa_accidente12');");
    header('location: ?view=usuario_evalua&mode=add&success=true');
  }

  public function __destruct() {
    $this->db->close();
  }
}
?>
