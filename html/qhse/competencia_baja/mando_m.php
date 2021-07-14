<?php
$min = min($com1,$eft1,$etc1,$hbd1,$ldg1,$prf1,$m_md1,$grc1);
if($min == $com1)
{
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	$min1 =min($eft1,$etc1,$hbd1,$ldg1,$prf1,$m_md1,$grc1);
	if ($min1 == $eft1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p>	<br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $eft1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	$min1 =min($com1,$etc1,$hbd1,$ldg1,$prf1,$m_md1,$grc1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p>	<br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $hbd1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	$min1 =min($com1,$etc1,$eft1,$ldg1,$prf1,$m_md1,$grc1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p>	<br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $ldg1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	$min1 =min($com1,$etc1,$eft1,$hbd1,$prf1,$m_md1,$grc1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p>	<br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $prf1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p><br>';
	$min1 =min($com1,$etc1,$eft1,$hbd1,$ldg1,$m_md1,$grc1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $etc1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1,$m_md1,$grc1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $m_md1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[9]['mandos_m'].'" title=\"'.$_planaccionhseq[9]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[9]['mandos_m'].'</a></p><br>';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1,$grc1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}elseif($min == $grc1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> GERENCIA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1,$m_md1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['mandos_m'].'" title=\"'.$_planaccionhseq[1]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['mandos_m'].'" title=\"'.$_planaccionhseq[2]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['mandos_m'].'" title=\"'.$_planaccionhseq[3]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['mandos_m'].'" title=\"'.$_planaccionhseq[4]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['mandos_m'].'" title=\"'.$_planaccionhseq[5]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['mandos_m'].'" title=\"'.$_planaccionhseq[6]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['mandos_m'].'</a></p><br>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ MANDO MEDIO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[8]['mandos_m'].'" title=\"'.$_planaccionhseq[8]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[8]['mandos_m'].'</a></p><br>';
	}
}
?>
