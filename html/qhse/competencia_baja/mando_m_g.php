<?php
$min = min($com2,$eft2,$etc2,$hbd2,$ldg2,$prf2,$m_md2,$grc2);
if($min == $com2)
{
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	$min1 =min($eft2,$etc2,$hbd2,$ldg2,$prf2,$m_md2,$grc2);
	if ($min1 == $eft2) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p>	<br>';
	}elseif($min1 == $etc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $eft2){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	$min1 =min($com2,$etc2,$hbd2,$ldg2,$prf2,$m_md2,$grc2);
	if ($min1 == $com2) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p>	<br>';
	}elseif($min1 == $etc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $hbd2){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	$min1 =min($com2,$etc2,$eft2,$ldg2,$prf2,$m_md2,$grc2);
	if ($min1 == $com2) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p>	<br>';
	}elseif($min1 == $etc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $ldg2){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	$min1 =min($com2,$etc2,$eft2,$hbd2,$prf2,$m_md2,$grc2);
	if ($min1 == $com2) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p>	<br>';
	}elseif($min1 == $etc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $prf2){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p><br>';
	$min1 =min($com2,$etc2,$eft2,$hbd2,$ldg2,$m_md2,$grc2);
	if ($min1 == $com2) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $etc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $etc2){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	$min1 =min($com2,$prf2,$eft2,$hbd2,$ldg2,$m_md2,$grc2);
	if ($min1 == $com2) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $m_md2){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	$min1 =min($com2,$prf2,$eft2,$hbd2,$ldg2,$grc2);
	if ($min1 == $com2) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $etc2){
		$MEJORA .= '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $grc2){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	$min1 =min($com2,$prf2,$eft2,$hbd2,$ldg2,$m_md2);
	if ($min1 == $com2) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $etc2){
		$MEJORA .= '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md2){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}
}
?>
