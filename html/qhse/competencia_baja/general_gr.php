<?php
$min = min($com3,$eft3,$etc3,$hbd3,$ldg3,$prf3,$t_op3,$grc3,$m_md3);
if($min == $com3)
{
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	$min3 =min($eft3,$etc3,$hbd3,$ldg3,$prf3,$t_op3,$grc3,$m_md3);
	if ($min3 == $eft3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min3 == $hbd3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $ldg3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min3 == $prf3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p>	<br>';
	}elseif($min3 == $etc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min3 == $t_op3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min3 == $grc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min3 == $m_md3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $eft3){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	$min3 =min($com3,$etc3,$hbd3,$ldg3,$prf3,$t_op3,$grc3,$m_md3);
	if ($min3 == $com3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $hbd3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $ldg3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min3 == $prf3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p>	<br>';
	}elseif($min3 == $etc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min3 == $t_op3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min3 == $grc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min3 == $m_md3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $hbd3){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	$min3 =min($com3,$etc3,$eft3,$ldg3,$prf3,$t_op3,$grc3,$m_md3);
	if ($min3 == $com3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $eft3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min3 == $ldg3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min3 == $prf3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p>	<br>';
	}elseif($min3 == $etc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min3 == $t_op3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min3 == $grc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min3 == $m_md3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $ldg3){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	$min3 =min($com3,$etc3,$eft3,$hbd3,$prf3,$t_op3,$grc3,$m_md3);
	if ($min3 == $com3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $eft3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min3 == $hbd3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $prf3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p>	<br>';
	}elseif($min3 == $etc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min3 == $t_op3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min3 == $grc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min3 == $m_md3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $prf3){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p><br>';
	$min3 =min($com3,$etc3,$eft3,$hbd3,$ldg3,$t_op3,$grc3,$m_md3);
	if ($min3 == $com3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $eft3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min3 == $hbd3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $ldg3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min3 == $etc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	}elseif($min3 == $t_op3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min3 == $grc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min3 == $m_md3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $etc3){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['general'].'" title=\"'.$_planaccionhseq[6]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['general'].'</a></p><br>';
	$min3 =min($com3,$prf3,$eft3,$hbd3,$ldg3,$t_op3,$grc3,$m_md3);
	if ($min3 == $com3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $eft3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['general'].'" title=\"'.$_planaccionhseq[2]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['general'].'</a></p><br>';
	}elseif($min3 == $hbd3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['general'].'" title=\"'.$_planaccionhseq[3]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['general'].'</a></p><br>';
	}elseif($min3 == $ldg3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['general'].'" title=\"'.$_planaccionhseq[4]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['general'].'</a></p><br>';
	}elseif($min3 == $prf3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';// Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['general'].'" title=\"'.$_planaccionhseq[5]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['general'].'</a></p><br>';
	}elseif($min3 == $t_op3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min3 == $grc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min3 == $m_md3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $t_op3){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	$min3 =min($com3,$prf3,$eft3,$hbd3,$ldg3,$etc3,$grc3,$m_md3);
	if ($min3 == $com3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';
	}elseif($min3 == $eft3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';
	}elseif($min3 == $hbd3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';
	}elseif($min3 == $ldg3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';
	}elseif($min3 == $prf3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';
	}elseif($min3 == $etc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';
	}elseif($min3 == $grc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}elseif($min3 == $m_md3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $grc3){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	$min3 =min($com3,$prf3,$eft3,$hbd3,$ldg3,$t_op3,$etc3,$m_md3);
	if ($min3 == $com3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';
	}elseif($min3 == $eft3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';
	}elseif($min3 == $hbd3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';
	}elseif($min3 == $ldg3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';
	}elseif($min3 == $prf3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';
	}elseif($min3 == $etc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';
	}elseif($min3 == $t_op3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min3 == $m_md3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	}
}elseif($min == $m_md3){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> MANDO MEDIO. </b></big>';
	$min3 =min($com3,$prf3,$eft3,$hbd3,$ldg3,$t_op3,$grc3,$etc3);
	if ($min3 == $com3) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';
	}elseif($min3 == $eft3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';
	}elseif($min3 == $hbd3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';
	}elseif($min3 == $ldg3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';
	}elseif($min3 == $prf3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';
	}elseif($min3 == $etc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';
	}elseif($min3 == $t_op3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> TRABAJADOR OPERATIVO. </b></big>';
	}elseif($min3 == $grc3){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> GERENCIA. </b></big>';
	}
}
?>
