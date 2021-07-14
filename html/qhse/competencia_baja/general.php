<?php
$min = min($com1,$eft1,$etc1,$hbd1,$ldg1,$prf1,$t_op1,$grc1,$m_md1);
if($min == $com1)
{
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['general'].'" title=\"'.$_planaccionhseq[1]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['general'].'</a></p><br>';
	$min1 =min($eft1,$etc1,$hbd1,$ldg1,$prf1,$t_op1,$grc1,$m_md1);
	if ($min1 == $eft1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p>	<br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $eft1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	$min1 =min($com1,$etc1,$hbd1,$ldg1,$prf1,$t_op1,$grc1,$m_md1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['general'].'" title=\"'.$_planaccionhseq[1]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['general'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p>	<br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $hbd1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	$min1 =min($com1,$etc1,$eft1,$ldg1,$prf1,$t_op1,$grc1,$m_md1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['general'].'" title=\"'.$_planaccionhseq[1]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['general'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p>	<br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $ldg1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	$min1 =min($com1,$etc1,$eft1,$hbd1,$prf1,$t_op1,$grc1,$m_md1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['general'].'" title=\"'.$_planaccionhseq[1]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['general'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p>	<br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $prf1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p><br>';
	$min1 =min($com1,$etc1,$eft1,$hbd1,$ldg1,$t_op1,$grc1,$m_md1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['general'].'" title=\"'.$_planaccionhseq[1]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['general'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $etc1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1,$t_op1,$grc1,$m_md1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['general'].'" title=\"'.$_planaccionhseq[1]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['general'].'</a></p><br>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p><br>';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $t_op1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1,$etc1,$grc1,$m_md1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $grc1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1,$t_op1,$etc1,$m_md1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min1 == $m_md1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $m_md1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1,$t_op1,$grc1,$etc1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min1 == $grc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}
}
?>
