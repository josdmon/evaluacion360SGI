<?php
$e = 0;
$min = min($com1,$eft1,$etc1,$hbd1,$ldg1,$prf1,$t_op1);
if($min == $com1)
{
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['operativos'].'" title=\"'.$_planaccionhseq[1]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['operativos'].'</a></p><br>':'';
	$min1 =min($eft1,$etc1,$hbd1,$ldg1,$prf1,$t_op1);
	if ($min1 == $eft1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['operativos'].'" title=\"'.$_planaccionhseq[2]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['operativos'].'" title=\"'.$_planaccionhseq[3]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['operativos'].'" title=\"'.$_planaccionhseq[4]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['operativos'].'" title=\"'.$_planaccionhseq[5]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['operativos'].'</a></p>	<br>':'';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['operativos'].'" title=\"'.$_planaccionhseq[6]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ TRABAJADOR OPERATIVO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[7]['operativos'].'" title=\"'.$_planaccionhseq[7]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[7]['operativos'].'</a></p><br>':'';
	}
}elseif($min == $eft1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['operativos'].'" title=\"'.$_planaccionhseq[2]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['operativos'].'</a></p><br>':'';
	$min1 =min($com1,$etc1,$hbd1,$ldg1,$prf1,$t_op1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['operativos'].'" title=\"'.$_planaccionhseq[1]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['operativos'].'" title=\"'.$_planaccionhseq[3]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['operativos'].'" title=\"'.$_planaccionhseq[4]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['operativos'].'" title=\"'.$_planaccionhseq[5]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['operativos'].'</a></p>	<br>':'';;
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['operativos'].'" title=\"'.$_planaccionhseq[6]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ TRABAJADOR OPERATIVO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[7]['operativos'].'" title=\"'.$_planaccionhseq[7]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[7]['operativos'].'</a></p><br>':'';
	}
}elseif($min == $hbd1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['operativos'].'" title=\"'.$_planaccionhseq[3]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['operativos'].'</a></p><br>':'';
	$min1 =min($com1,$etc1,$eft1,$ldg1,$prf1,$t_op1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['operativos'].'" title=\"'.$_planaccionhseq[1]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['operativos'].'" title=\"'.$_planaccionhseq[2]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['operativos'].'" title=\"'.$_planaccionhseq[4]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['operativos'].'" title=\"'.$_planaccionhseq[5]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['operativos'].'</a></p>	<br>':'';;
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['operativos'].'" title=\"'.$_planaccionhseq[6]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ TRABAJADOR OPERATIVO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[7]['operativos'].'" title=\"'.$_planaccionhseq[7]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[7]['operativos'].'</a></p><br>':'';
	}
}elseif($min == $ldg1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['operativos'].'" title=\"'.$_planaccionhseq[4]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['operativos'].'</a></p><br>':'';
	$min1 =min($com1,$etc1,$eft1,$hbd1,$prf1,$t_op1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['operativos'].'" title=\"'.$_planaccionhseq[1]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['operativos'].'" title=\"'.$_planaccionhseq[2]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['operativos'].'" title=\"'.$_planaccionhseq[3]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['operativos'].'" title=\"'.$_planaccionhseq[5]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['operativos'].'</a></p>	<br>':'';;
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['operativos'].'" title=\"'.$_planaccionhseq[6]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ TRABAJADOR OPERATIVO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[7]['operativos'].'" title=\"'.$_planaccionhseq[7]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[7]['operativos'].'</a></p><br>':'';
	}
}elseif($min == $prf1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['operativos'].'" title=\"'.$_planaccionhseq[5]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['operativos'].'</a></p><br>':'';
	$min1 =min($com1,$etc1,$eft1,$hbd1,$ldg1,$t_op1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['operativos'].'" title=\"'.$_planaccionhseq[1]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['operativos'].'" title=\"'.$_planaccionhseq[2]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['operativos'].'" title=\"'.$_planaccionhseq[3]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['operativos'].'" title=\"'.$_planaccionhseq[4]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> ETICA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['operativos'].'" title=\"'.$_planaccionhseq[6]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ TRABAJADOR OPERATIVO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[7]['operativos'].'" title=\"'.$_planaccionhseq[7]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[7]['operativos'].'</a></p><br>':'';
	}
}elseif($min == $etc1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['operativos'].'" title=\"'.$_planaccionhseq[6]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['operativos'].'</a></p><br>':'';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1,$t_op1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['operativos'].'" title=\"'.$_planaccionhseq[1]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['operativos'].'" title=\"'.$_planaccionhseq[2]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['operativos'].'" title=\"'.$_planaccionhseq[3]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['operativos'].'" title=\"'.$_planaccionhseq[4]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['operativos'].'" title=\"'.$_planaccionhseq[5]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $t_op1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HSQ TRABAJADOR OPERATIVO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[7]['operativos'].'" title=\"'.$_planaccionhseq[7]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[7]['operativos'].'</a></p><br>':'';
	}
}elseif($min == $t_op1){
	$MEJORA = '<p>La competencia más baja que tienes es <big><b> HSQ TRABAJADOR OPERATIVO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[7]['operativos'].'" title=\"'.$_planaccionhseq[7]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[7]['operativos'].'</a></p><br>':'';
	$min1 =min($com1,$prf1,$eft1,$hbd1,$ldg1);
	if ($min1 == $com1) {
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> COMUNICACIÓN. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[1]['operativos'].'" title=\"'.$_planaccionhseq[1]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[1]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $eft1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> EFECTIVIDAD. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[2]['operativos'].'" title=\"'.$_planaccionhseq[2]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[2]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $hbd1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> HABILIDAD COGNITIVA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[3]['operativos'].'" title=\"'.$_planaccionhseq[3]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[3]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $ldg1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> LIDERAZGO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[4]['operativos'].'" title=\"'.$_planaccionhseq[4]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[4]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $prf1){
		$MEJORA .= '<p>La segunda competencia más baja que tienes es <big><b> PROFESIONALISMO. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[5]['operativos'].'" title=\"'.$_planaccionhseq[5]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[5]['operativos'].'</a></p><br>':'';
	}elseif($min1 == $etc1){
		$MEJORA .= '<p>La competencia más baja que tienes es <big><b> ETICA. </b></big>';//'; $MEJORA .= ($e>1) ? 'Por eso te recomendamos trabajar en lo siguiente.</p><br><p><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[6]['operativos'].'" title=\"'.$_planaccionhseq[6]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[6]['operativos'].'</a></p><br>':'';
	}
}
?>
