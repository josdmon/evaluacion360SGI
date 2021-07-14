<?php
class EncuestaSistemaHse {
  private $db; private $id; private $user;
  private $cargo;
  private $rutina;
  private $esporaica;
  private $fisico2;
  private $fisico3;
  private $fisico4;
  private $fisico5;
  private $fisico6;
  private $fisico7;
  private $fisico8;
  private $fisicontrol2;
  private $fisicontrol3;
  private $fisicontrol4;
  private $fisicontrol5;
  private $fisicontrol6;
  private $fisicontrol7;
  private $fisicontrol8;
  private $fisico_control2;
  private $fisico_control3;
  private $fisico_control4;
  private $fisico_control5;
  private $fisico_control6;
  private $fisico_control7;
  private $fisico_control8;
  private $quimico1;
  private $quimico2;
  private $quimico3;
  private $quimicontrol1;
  private $quimicontrol2;
  private $quimicontrol3;
  private $quimico_control1;
  private $quimico_control2;
  private $quimico_control3;
  private $biologico1;
  private $biologico2;
  private $biologicontrol1;
  private $biologicontrol2;
  private $biologico_control1;
  private $biologico_control2;
  private $vial_control1;
  private $publico_control1;
  private $locativo_control1;
  private $vial1;
  private $publico1;
  private $locativo1;
  private $vialcontrol1;
  private $publicontrol1;
  private $locativocontrol1;
  private $ergonomia1;
  private $ergonomia2;
  private $ergonomia3;
  private $ergonomia4;
  private $ergonomiacontrol1;
  private $ergonomiacontrol2;
  private $ergonomiacontrol3;
  private $ergonomiacontrol4;
  private $ergonomia_control1;
  private $ergonomia_control2;
  private $ergonomia_control3;
  private $ergonomia_control4;
  private $mecanico1;
  private $mecanico2;
  private $mecanico3;
  private $mecanicontrol1;
  private $mecanicontrol2;
  private $mecanicontrol3;
  private $mecanico_control1;
  private $mecanico_control2;
  private $mecanico_control3;
  private $psicosocial1;
  private $psicosocial2;
  private $psicosocial3;
  private $psicosocialcontrol1;
  private $psicosocialcontrol2;
  private $psicosocialcontrol3;
  private $psicosocial_control1;
  private $psicosocial_control2;
  private $psicosocial_control3;
  private $otro1;
  private $otro2;
  private $otro3;
  private $otro4;
  private $otrocontrol1;
  private $otrocontrol2;
  private $otrocontrol3;
  private $otrocontrol4;
  private $otro_control1;
  private $otro_control2;
  private $otro_control3;
  private $otro_control4;
  private $aspectos_ambientales1;
  private $aspectos_ambientales2;
  private $aspectos_ambientales3;
  private $aspectos_ambientales4;
  private $aspectos_ambientales5;
  private $capaci_hse;
  private $capaci_tecn;
  private $activi_hse;
  private $activ_destaca;


  public function __construct() {
    $this->db = new Conexion();
  }
  private function Errors($url) {
    try {
      if(empty($_POST['user'])) {
        throw new Exception(1);
      } else {
  $this->cargo = $this->db->real_escape_string($_POST['cargo']);
  $this->rutina = $this->db->real_escape_string($_POST['rutina']);
  $this->esporaica = $this->db->real_escape_string($_POST['esporaica']);
  $this->fisico2 = intval($_POST['fisico2']);
  $this->fisico3 = intval($_POST['fisico3']);
  $this->fisico4 = intval($_POST['fisico4']);
  $this->fisico5 = intval($_POST['fisico5']);
  $this->fisico6 = intval($_POST['fisico6']);
  $this->fisico7 = intval($_POST['fisico7']);
  $this->fisico8 = intval($_POST['fisico8']);
  $this->fisicontrol2 = intval($_POST['fisicontrol2']);
  $this->fisicontrol3 = intval($_POST['fisicontrol3']);
  $this->fisicontrol4 = intval($_POST['fisicontrol4']);
  $this->fisicontrol5 = intval($_POST['fisicontrol5']);
  $this->fisicontrol6 = intval($_POST['fisicontrol6']);
  $this->fisicontrol7 = intval($_POST['fisicontrol7']);
  $this->fisicontrol8 = intval($_POST['fisicontrol8']);
  $this->fisico_control2 = $this->db->real_escape_string($_POST['fisico_control2']);
  $this->fisico_control3 = $this->db->real_escape_string($_POST['fisico_control3']);
  $this->fisico_control4 = $this->db->real_escape_string($_POST['fisico_control4']);
  $this->fisico_control5 = $this->db->real_escape_string($_POST['fisico_control5']);
  $this->fisico_control6 = $this->db->real_escape_string($_POST['fisico_control6']);
  $this->fisico_control7 = $this->db->real_escape_string($_POST['fisico_control7']);
  $this->fisico_control8 = $this->db->real_escape_string($_POST['fisico_control8']);
  $this->quimico1 = intval($_POST['quimico1']);
  $this->quimico2 = intval($_POST['quimico2']);
  $this->quimico3 = intval($_POST['quimico3']);
  $this->quimicontrol1 = intval($_POST['quimicontrol1']);
  $this->quimicontrol2 = intval($_POST['quimicontrol2']);
  $this->quimicontrol3 = intval($_POST['quimicontrol3']);
  $this->quimico_control1 = $this->db->real_escape_string($_POST['quimico_control1']);
  $this->quimico_control2 = $this->db->real_escape_string($_POST['quimico_control2']);
  $this->quimico_control3 = $this->db->real_escape_string($_POST['quimico_control3']);
  $this->biologico1 = intval($_POST['biologico1']);
  $this->biologico2 = intval($_POST['biologico2']);
  $this->biologicontrol1 = intval($_POST['biologicontrol1']);
  $this->biologicontrol2 = intval($_POST['biologicontrol2']);
  $this->biologico_control1 = $this->db->real_escape_string($_POST['biologico_control1']);
  $this->biologico_control2 = $this->db->real_escape_string($_POST['biologico_control2']);
  $this->vial_control1 = $this->db->real_escape_string($_POST['vial_control1']);
  $this->publico_control1 = $this->db->real_escape_string($_POST['publico_control1']);
  $this->locativo_control1 = $this->db->real_escape_string($_POST['locativo_control1']);
  $this->vial1 = intval($_POST['vial1']);
  $this->publico1 = intval($_POST['publico1']);
  $this->locativo1 = intval($_POST['locativo1']);
  $this->vialcontrol1 = intval($_POST['vialcontrol1']);
  $this->publicontrol1 = intval($_POST['publicontrol1']);
  $this->locativocontrol1 = intval($_POST['locativocontrol1']);
  $this->ergonomia1 = intval($_POST['ergonomia1']);
  $this->ergonomia2 = intval($_POST['ergonomia2']);
  $this->ergonomia3 = intval($_POST['ergonomia3']);
  $this->ergonomia4 = intval($_POST['ergonomia4']);
  $this->ergonomiacontrol1 = intval($_POST['ergonomiacontrol1']);
  $this->ergonomiacontrol2 = intval($_POST['ergonomiacontrol2']);
  $this->ergonomiacontrol3 = intval($_POST['ergonomiacontrol3']);
  $this->ergonomiacontrol4 = intval($_POST['ergonomiacontrol4']);
  $this->ergonomia_control1 = $this->db->real_escape_string($_POST['ergonomia_control1']);
  $this->ergonomia_control2 = $this->db->real_escape_string($_POST['ergonomia_control2']);
  $this->ergonomia_control3 = $this->db->real_escape_string($_POST['ergonomia_control3']);
  $this->ergonomia_control4 = $this->db->real_escape_string($_POST['ergonomia_control4']);
  $this->mecanico1 = intval($_POST['mecanico1']);
  $this->mecanico2 = intval($_POST['mecanico2']);
  $this->mecanico3 = intval($_POST['mecanico3']);
  $this->mecanicontrol1 = intval($_POST['mecanicontrol1']);
  $this->mecanicontrol2 = intval($_POST['mecanicontrol2']);
  $this->mecanicontrol3 = intval($_POST['mecanicontrol3']);
  $this->mecanico_control1 = $this->db->real_escape_string($_POST['mecanico_control1']);
  $this->mecanico_control2 = $this->db->real_escape_string($_POST['mecanico_control2']);
  $this->mecanico_control3 = $this->db->real_escape_string($_POST['mecanico_control3']);
  $this->psicosocial1 = intval($_POST['psicosocial1']);
  $this->psicosocial2 = intval($_POST['psicosocial2']);
  $this->psicosocial3 = intval($_POST['psicosocial3']);
  $this->psicosocialcontrol1 = intval($_POST['psicosocialcontrol1']);
  $this->psicosocialcontrol2 = intval($_POST['psicosocialcontrol2']);
  $this->psicosocialcontrol3 = intval($_POST['psicosocialcontrol3']);
  $this->psicosocial_control1 = $this->db->real_escape_string($_POST['psicosocial_control1']);
  $this->psicosocial_control2 = $this->db->real_escape_string($_POST['psicosocial_control2']);
  $this->psicosocial_control3 = $this->db->real_escape_string($_POST['psicosocial_control3']);
  $this->otro1 = intval($_POST['otro1']);
  $this->otro2 = intval($_POST['otro2']);
  $this->otro3 = intval($_POST['otro3']);
  $this->otro4 = intval($_POST['otro4']);
  $this->otrocontrol1 = intval($_POST['otrocontrol1']);
  $this->otrocontrol2 = intval($_POST['otrocontrol2']);
  $this->otrocontrol3 = intval($_POST['otrocontrol3']);
  $this->otrocontrol4 = intval($_POST['otrocontrol4']);
  $this->otro_control1 = $this->db->real_escape_string($_POST['otro_control1']);
  $this->otro_control2 = $this->db->real_escape_string($_POST['otro_control2']);
  $this->otro_control3 = $this->db->real_escape_string($_POST['otro_control3']);
  $this->otro_control4 = $this->db->real_escape_string($_POST['otro_control4']);
  $this->aspectos_ambientales1 = intval($_POST['aspectos_ambientales1']);
  $this->aspectos_ambientales2 = intval($_POST['aspectos_ambientales2']);
  $this->aspectos_ambientales3 = intval($_POST['aspectos_ambientales3']);
  $this->aspectos_ambientales4 = intval($_POST['aspectos_ambientales4']);
  $this->aspectos_ambientales5 = intval($_POST['aspectos_ambientales5']);
  $this->capaci_hse = $this->db->real_escape_string($_POST['capaci_hse']);
  $this->capaci_tecn = $this->db->real_escape_string($_POST['capaci_tecn']);
  $this->activi_hse = $this->db->real_escape_string($_POST['activi_hse']);
  $this->activ_destaca = $this->db->real_escape_string($_POST['activ_destaca']);
  $this->user = intval($_POST['user']);


      }
    } catch(Exception $error) {
      header('location: '.$url .$error->getMessage());
      exit;
    }
  }
  public function Add() {
    $this->Errors('?view=usuario_evalua&mode=addencuestasistemahse&error=',true);
    $this->db->query("INSERT INTO encuesta_sistem_hse (id_usuario,cargo,rutina,esporaica,fisico2,fisico3,fisico4,fisico5,fisico6,fisico7,fisico8,fisicontrol2,fisicontrol3,fisicontrol4,fisicontrol5,fisicontrol6,fisicontrol7,fisicontrol8,fisico_control2,fisico_control3,fisico_control4,fisico_control5,fisico_control6,fisico_control7,fisico_control8,quimico1,quimico2,quimico3,quimicontrol1,quimicontrol2,quimicontrol3,quimico_control1,quimico_control2,quimico_control3,biologico1,biologico2,biologicontrol1,biologicontrol2,biologico_control1,biologico_control2,vial_control1,publico_control1,locativo_control1,vial1,publico1,locativo1,vialcontrol1,publicontrol1,locativocontrol1,ergonomia1,ergonomia2,ergonomia3,ergonomia4,ergonomiacontrol1,ergonomiacontrol2,ergonomiacontrol3,ergonomiacontrol4,ergonomia_control1,ergonomia_control2,ergonomia_control3,ergonomia_control4,mecanico1,mecanico2,mecanico3,mecanicontrol1,mecanicontrol2,mecanicontrol3,mecanico_control1,mecanico_control2,mecanico_control3,psicosocial1,psicosocial2,psicosocial3,psicosocialcontrol1,psicosocialcontrol2,psicosocialcontrol3,psicosocial_control1,psicosocial_control2,psicosocial_control3,otro1,otro2,otro3,otro4,otrocontrol1,otrocontrol2,otrocontrol3,otrocontrol4,otro_control1,otro_control2,otro_control3,otro_control4,aspectos_ambientales1,aspectos_ambientales2,aspectos_ambientales3,aspectos_ambientales4,aspectos_ambientales5,capaci_hse,capaci_tecn,activi_hse,activ_destaca) VALUES ('$this->user','$this->cargo','$this->rutina','$this->esporaica','$this->fisico2','$this->fisico3','$this->fisico4','$this->fisico5','$this->fisico6','$this->fisico7','$this->fisico8','$this->fisicontrol2','$this->fisicontrol3','$this->fisicontrol4','$this->fisicontrol5','$this->fisicontrol6','$this->fisicontrol7','$this->fisicontrol8','$this->fisico_control2','$this->fisico_control3','$this->fisico_control4','$this->fisico_control5','$this->fisico_control6','$this->fisico_control7','$this->fisico_control8','$this->quimico1','$this->quimico2','$this->quimico3','$this->quimicontrol1','$this->quimicontrol2','$this->quimicontrol3','$this->quimico_control1','$this->quimico_control2','$this->quimico_control3','$this->biologico1','$this->biologico2','$this->biologicontrol1','$this->biologicontrol2','$this->biologico_control1','$this->biologico_control2','$this->vial_control1','$this->publico_control1','$this->locativo_control1','$this->vial1','$this->publico1','$this->locativo1','$this->vialcontrol1','$this->publicontrol1','$this->locativocontrol1','$this->ergonomia1','$this->ergonomia2','$this->ergonomia3','$this->ergonomia4','$this->ergonomiacontrol1','$this->ergonomiacontrol2','$this->ergonomiacontrol3','$this->ergonomiacontrol4','$this->ergonomia_control1','$this->ergonomia_control2','$this->ergonomia_control3','$this->ergonomia_control4','$this->mecanico1','$this->mecanico2','$this->mecanico3','$this->mecanicontrol1','$this->mecanicontrol2','$this->mecanicontrol3','$this->mecanico_control1','$this->mecanico_control2','$this->mecanico_control3','$this->psicosocial1','$this->psicosocial2','$this->psicosocial3','$this->psicosocialcontrol1','$this->psicosocialcontrol2','$this->psicosocialcontrol3','$this->psicosocial_control1','$this->psicosocial_control2','$this->psicosocial_control3','$this->otro1','$this->otro2','$this->otro3','$this->otro4','$this->otrocontrol1','$this->otrocontrol2','$this->otrocontrol3','$this->otrocontrol4','$this->otro_control1','$this->otro_control2','$this->otro_control3','$this->otro_control4','$this->aspectos_ambientales1','$this->aspectos_ambientales2','$this->aspectos_ambientales3','$this->aspectos_ambientales4','$this->aspectos_ambientales5','$this->capaci_hse','$this->capaci_tecn','$this->activi_hse','$this->activ_destaca');");
header('location: ?view=usuario_evalua&mode=addencuestasistemahse&success=true');
  }

  public function __destruct() {
    $this->db->close();
  }
}
?>
