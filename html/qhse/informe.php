<?php
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->SetXY(5,5);
$pdf->Image('views/images/logoc.png', 7, 13, 50);
$pdf->Cell(50, 30, '', 1, 0, 'C');
$pdf->SetXY(55,5);
$pdf->Cell(120, 15, 'SERVICIOS GEOLOGICOS INTEGRADOS S.A.S.', 1, 0, 'C');
$pdf->SetXY(55,20);
$pdf->SetFont('');
$pdf->Cell(120, 15, utf8_decode('RESULTADOS EVALUACIÓN DE DESEMPEÑO'), 1, 0, 'C');
$pdf->SetXY(175,5);
$pdf->SetFont('Arial','B',7);
$s = $_GET['usr'];
$pdf->Cell(30, 30, $_evaluacion[$s]['fecha'], 1, 0, 'C');


$pdf->SetXY(5,40);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(30, 10, 'NOMBRE', 1, 0, 'C');
$pdf->SetXY(35,40);
$pdf->SetFont('');
$pdf->Cell(90, 10, utf8_decode(strtoupper($_users[$s]['nombres'])) . ' ' . utf8_decode(strtoupper($_users[$s]['apellidos'])), 1, 0, 'C');
$pdf->SetXY(125,40);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(30, 10, 'C.C.', 1, 0, 'C');
$pdf->SetXY(155,40);
$pdf->SetFont('');
$pdf->Cell(50, 10, $_users[$s]['cedula'], 1, 0, 'C');
$pdf->SetXY(5,50);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(30, 10, utf8_decode('ÁREA'), 1, 0, 'C');
$pdf->SetXY(35,50);
$pdf->SetFont('');
$pdf->Cell(60, 10, utf8_decode($_area[$_users[$s]['area']]['area']), 1, 0, 'C');
$pdf->SetXY(95,50);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(30, 10, 'EMAIL', 1, 0, 'C');
$pdf->SetXY(125,50);
$pdf->SetFont('');
$pdf->Cell(80, 10, $_users[$s]['email'], 1, 0, 'C');
$pdf->SetFont('Arial','B',15);
$pdf->SetY(70);
$pdf->Cell(200, 12, utf8_decode('RESULTADOS EVALUACIÓN 360 VS AUTOEVALUACIÓN'), 0, 0, 'C');



$db = new Conexion();

$e = $_users[$s]['id'];
$sql = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND comunicacion >=1;");
$sql2 = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND evaluador = '$e';");
if ($row = $db->recorrer($sql)){
  $i=0; $com=0; $eft=0; $etc=0; $hbd=0; $ldg=0; $prf=0;
  $grc=0; $m_grc=0; $m_md=0; $m_hse=0; $t_op=0;
  do {
    $i++;
    $com+=$row["comunicacion"];
    $eft+=$row["efectividad"];
    $etc+=$row["etica"];
    $hbd+=$row["habilidad"];
    $ldg+=$row["liderasgo"];
    $prf+=$row["profesional"];

    if ($_users[$s]['categorias'] == 1) {
      $grc+=$row["gerencia"];
      $m_grc+=$row["m_gerencial"];
    }elseif ($_users[$s]['categorias'] == 2) {
      $grc+=$row["gerencia"];
      $m_md+=$row["m_medio"];
    }elseif ($_users[$s]['categorias'] == 3) {
      $t_op+=$row["t_operativo"];
    }elseif ($_users[$s]['categorias'] == 4) {
      $grc+=$row["gerencia"];
      $m_hse+=$row["m_hse"];
    }
  } while ($row = $db->recorrer($sql));

  if ($aut = $db->recorrer($sql2)) {

    $com2=number_format($aut["comunicacion"],2);
    $eft2=number_format($aut["efectividad"],2);
    $etc2=number_format($aut["etica"],2);
    $hbd2=number_format($aut["habilidad"],2);
    $ldg2=number_format($aut["liderasgo"],2);
    $prf2=number_format($aut["profesional"],2);
    if ($_users[$s]['categorias'] == 1) {
      $grc2=number_format($aut["gerencia"],2);
      $m_grc2=number_format($aut["m_gerencial"],2);
    }elseif ($_users[$s]['categorias'] == 2) {
      $grc2=number_format($aut["gerencia"],2);
      $m_md2=number_format($aut["m_medio"],2);
    }elseif ($_users[$s]['categorias'] == 4) {
      $grc2=number_format($aut["gerencia"],2);
      $m_hse2=number_format($aut["m_hse"],2);
    }elseif ($_users[$s]['categorias'] == 3) {
      $t_op2=number_format($aut["t_operativo"],2);
    }
  }else{
    $com2=0; $eft2=0; $etc2=0; $hbd2=0; $ldg2=0; $prf2=0; $grc2=0; $m_grc2=0; $grc2=0; $m_md2=0; $m_hse2=0; $t_op2=0;
  }
$com1=number_format($com/$i,2); $eft1=number_format($eft/$i,2); $etc1=number_format($etc/$i,2); $hbd1=number_format($hbd/$i,2); $ldg1=number_format($ldg/$i,2); $prf1=number_format($prf/$i,2);
$grc1=number_format($grc/$i,2); $m_grc1=number_format($m_grc/$i,2); $m_md1=number_format($m_md/$i,2); $m_hse1=number_format($m_hse/$i,2); $t_op1=number_format($t_op/$i,2);
$min = min($com1,$eft1,$etc1,$hbd1,$ldg1,$prf1,$t_op1);
$min1 = min($grc1,$m_grc1);
$min2 = min($grc1,$m_md1);
$min3 = min($grc1,$m_hse1);

$pdf->SetFillColor(206,218,228);
$pdf->SetXY(5,88);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(60, 10, utf8_decode('COMPETENCIA EVALUAD'), 1, 0, 'C',1);
$pdf->Cell(30, 10, utf8_decode('CALIFICACIÓN'), 1, 0, 'C',1);
$pdf->Cell(30, 10, utf8_decode('AUTOEVALUACIÓN'), 1, 1, 'C',1);
$pdf->SetXY(5,98);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(60, 8, utf8_decode('COMUNICACIÓN'), 1, 0, 'C',1);
$pdf->Cell(30, 8, $com1, 1, 0, 'C');
$pdf->Cell(30, 8, $com2, 1, 1, 'C');
$pdf->SetXY(5,106);
$pdf->Cell(60, 8, utf8_decode('EFECTIVIDAD'), 1, 0, 'C',1);
$pdf->Cell(30, 8, $eft1, 1, 0, 'C');
$pdf->Cell(30, 8, $eft2, 1, 1, 'C');
$pdf->SetXY(5,114);
$pdf->Cell(60, 8, utf8_decode('HABILIDAD COGNITIVA'), 1, 0, 'C',1);
$pdf->Cell(30, 8, $hbd1, 1, 0, 'C');
$pdf->Cell(30, 8, $hbd2, 1, 1, 'C');
$pdf->SetXY(5,122);
$pdf->Cell(60, 8, utf8_decode('LIDERAZGO'), 1, 0, 'C',1);
$pdf->Cell(30, 8, $ldg1, 1, 0, 'C');
$pdf->Cell(30, 8, $ldg2, 1, 1, 'C');
$pdf->SetXY(5,130);
$pdf->Cell(60, 8, utf8_decode('PROFESIONALISMO'), 1, 0, 'C',1);
$pdf->Cell(30, 8, $prf1, 1, 0, 'C');
$pdf->Cell(30, 8, $prf2, 1, 1, 'C');
$pdf->SetXY(5,138);
$pdf->Cell(60, 8, utf8_decode('ETICA'), 1, 0, 'C',1);
$pdf->Cell(30, 8, $etc1, 1, 0, 'C');
$pdf->Cell(30, 8, $etc2, 1, 1, 'C');

 if ($_users[$s]['categorias'] == 1) {
   $pdf->SetXY(5,146);
   $pdf->Cell(60, 8, utf8_decode('GERENCIA'), 1, 0, 'C',1);
   $pdf->Cell(30, 8, $grc1, 1, 0, 'C');
   $pdf->Cell(30, 8, $grc2, 1, 1, 'C');
   $pdf->SetXY(5,154);
   $pdf->Cell(60, 8, utf8_decode('HSQ MANDO GERENCIAL'), 1, 0, 'C',1);
   $pdf->Cell(30, 8, $m_grc1, 1, 0, 'C');
   $pdf->Cell(30, 8, $m_grc2, 1, 1, 'C');

  }elseif ($_users[$s]['categorias'] == 2) {
    $pdf->SetXY(5,146);
    $pdf->Cell(60, 8, utf8_decode('GERENCIA'), 1, 0, 'C',1);
    $pdf->Cell(30, 8, $grc1, 1, 0, 'C');
    $pdf->Cell(30, 8, $grc2, 1, 1, 'C');
    $pdf->SetXY(5,154);
    $pdf->Cell(60, 8, utf8_decode('HSE MANDO MEDIO'), 1, 0, 'C',1);
    $pdf->Cell(30, 8, $m_md1, 1, 0, 'C');
    $pdf->Cell(30, 8, $m_md2, 1, 1, 'C');

  }elseif ($_users[$s]['categorias'] == 4) {
    $pdf->SetXY(5,146);
    $pdf->Cell(60, 8, utf8_decode('GERENCIA'), 1, 0, 'C',1);
    $pdf->Cell(30, 8, $grc1, 1, 0, 'C');
    $pdf->Cell(30, 8, $grc2, 1, 1, 'C');
    $pdf->SetXY(5,154);
    $pdf->Cell(60, 8, utf8_decode('MANDO HSE'), 1, 0, 'C',1);
    $pdf->Cell(30, 8, $m_hse1, 1, 0, 'C');
    $pdf->Cell(30, 8, $m_hse2, 1, 1, 'C');


  }elseif ($_users[$s]['categorias'] == 3) {
    $pdf->SetXY(5,146);
    $pdf->Cell(60, 8, utf8_decode('HSE TRABAJADOR OPERATIVO'), 1, 0, 'C',1);
    $pdf->Cell(30, 8, $t_op1, 1, 0, 'C');
    $pdf->Cell(30, 8, $t_op2, 1, 1, 'C');

  }


} else {
  $pdf->Cell(60, 10, utf8_decode('Todavía no existe ningún resultado.'), 1, 0, 'C');

}
$pdf->SetXY(130,98);
$pdf->Cell(37, 10, utf8_decode('CALIFICACIÓN'), 1, 0, 'C',1);
$pdf->Cell(37, 10, utf8_decode('DESEMPEÑO'), 1, 0, 'C',1);
$pdf->SetXY(130,108);
$pdf->SetFillColor(230,230,230);
$pdf->Cell(37, 8, utf8_decode('0.0 a 2.99'), 1, 0, 'C',1);
$pdf->Cell(37, 8, utf8_decode('Deficiente'), 1, 0, 'C',1);
$pdf->SetXY(130,116);
$pdf->SetFillColor(235,235,235);
$pdf->Cell(37, 8, utf8_decode('3.0 a 3.49'), 1, 0, 'C',1);
$pdf->Cell(37, 8, utf8_decode('Regular'), 1, 0, 'C',1);
$pdf->SetXY(130,124);
$pdf->SetFillColor(245,245,245);
$pdf->Cell(37, 8, utf8_decode('3.5 a 3.99'), 1, 0, 'C',1);
$pdf->Cell(37, 8, utf8_decode('Aceptable'), 1, 0, 'C',1);
$pdf->SetXY(130,132);
$pdf->SetFillColor(250,250,250);
$pdf->Cell(37, 8, utf8_decode('4.0 a 4.49'), 1, 0, 'C',1);
$pdf->Cell(37, 8, utf8_decode('Bueno'), 1, 0, 'C',1);
$pdf->SetXY(130,140);
$pdf->Cell(37, 8, utf8_decode('4.5 a 5.0'), 1, 0, 'C');
$pdf->Cell(37, 8, utf8_decode('Excelente'), 1, 0, 'C');

if ($com1 < 3.5 or $eft1 < 3.5 or $hbd1 < 3.5 or $ldg1 < 3.5 or $prf1 < 3.5 or $etc1 < 3.5) {
  $pdf->SetXY(10,165);
  $pdf->SetFont('Arial','B',10);
  $pdf->MultiCell(195, 5, utf8_decode('Debes mejorar tu desempeño en las competencias por debajo de 3.5, se recomienda ver en la plataforma el plan de acción para la competencia afectada.'), 0,'C', 0 );
  $pdf->SetXY(15,180);
  $pdf->SetFont('Arial','B',8);
  $pdf->MultiCell(180, 5, utf8_decode('1.	Debes leer la sección de AMBIENTES DE APRENDIZAJE de tu evaluación de desempeño, allí encontraras las diferentes acciones que puede implementar de manera individual  o en conjunto para mejorar tus competencias más débiles. Luego deberás imprimir este formato para diligenciarlo con tu jefe.'), 0,'J', 0 );
  $pdf->SetXY(15,197);
  $pdf->SetFont('Arial','B',8);
  $pdf->MultiCell(180, 5, utf8_decode('2.	Deberás revisar estos resultados con tu jefe de área, acordar dos acciones específicas para cada una de las dos competencias débiles, establecer una fecha para revisión y otra para el cumplimiento de tus acciones de mejora. Ambos deben firmar el compromiso en este formato.'), 0,'J', 0 );

  $pdf->SetXY(5,214);$pdf->SetFont('Arial','B',10);
  $pdf->SetFillColor(245,245,245);
  $pdf->MultiCell(200, 5, utf8_decode('COMPROMISOS Y ACCIONES DE MEJORA DEL DESEMPEÑO'), 1,'C', 1 );
  $pdf->SetXY(5,219);$pdf->SetFont('Arial','B',10);$pdf->SetFillColor(250,250,250);
  $pdf->Cell(85, 10, utf8_decode('ACCIONES DE MEJORA ACORDADAS'), 1, 0 ,'C',1);
  $pdf->SetXY(90,219);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode('Fecha a cumplir'), 1, 0 ,'C',1);
  $pdf->SetXY(115,219);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode('Fecha de revisión'), 1, 0 ,'C',1);
  $pdf->SetXY(140,219);$pdf->SetFont('Arial','B',7);
  $pdf->MultiCell(25, 5, utf8_decode('Fecha real de cumplimiento'), 1,'C', 1);
  $pdf->SetXY(165,219);$pdf->SetFont('Arial','B',7);
  $pdf->MultiCell(20, 5, utf8_decode('Firma en a revisión'), 1,'C',1);
  $pdf->SetXY(185,219);$pdf->SetFont('Arial','B',7);
  $pdf->MultiCell(20, 5, utf8_decode('Firma en e cumplimiento'), 1,'C', 1);
  $pdf->SetXY(5,229);$pdf->SetFont('Arial','B',7);

  $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
  $pdf->SetXY(5,234);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(90,229);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(115,229);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(140,229);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(165,229);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
  $pdf->SetXY(185,229);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
  $pdf->SetXY(165,234);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
  $pdf->SetXY(185,234);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

  $pdf->SetXY(5,239);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
  $pdf->SetXY(5,244);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(90,239);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(115,239);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(140,239);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(165,239);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
  $pdf->SetXY(185,239);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
  $pdf->SetXY(165,244);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
  $pdf->SetXY(185,244);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

  $pdf->SetXY(5,249);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
  $pdf->SetXY(5,254);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(90,249);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(115,249);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(140,249);$pdf->SetFont('Arial','B',7);
  $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
  $pdf->SetXY(165,249);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
  $pdf->SetXY(185,249);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
  $pdf->SetXY(165,254);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
  $pdf->SetXY(185,254);$pdf->SetFont('Arial','B',5);
  $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

  $pdf->SetXY(5,259);$pdf->SetFont('Arial','B',7);
  $pdf->MultiCell(200, 5, utf8_decode('Observaciones en la Revisión'), 1,'L', 0 );
  $pdf->SetXY(5,264);$pdf->SetFont('Arial','B',7);
  $pdf->MultiCell(200, 5, utf8_decode('Observaciones Finales del Proceso de Mejora'), 1,'L', 0 );
  if($min == $com1)  {
      $pdf->SetXY(15,188);
      $pdf->SetFont('Arial','B',25);
      $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: COMUNICACIÓN. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );
  }elseif ($min == $eft1) {
    $pdf->SetXY(15,188);
    $pdf->SetFont('Arial','B',25);
    $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: EFECTIVIDAD. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );

  }elseif ($min == $hbd1) {
    $pdf->SetXY(15,188);
    $pdf->SetFont('Arial','B',25);
    $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: HABILIDAD COGNITIVA. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );

  }elseif ($min == $ldg1) {
    $pdf->SetXY(15,188);
    $pdf->SetFont('Arial','B',25);
    $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: LIDERAZGO. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );

  }elseif ($min == $prf1) {
    $pdf->SetXY(15,188);
    $pdf->SetFont('Arial','B',25);
    $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: PROFESIONALISMO. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );

  }elseif ($min == $etc1) {
    $pdf->SetXY(15,188);
    $pdf->SetFont('Arial','B',25);
    $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: COMUNICACIÓN. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );

  }

}elseif ($_users[$s]['categorias'] == 1) {


   if ($grc1 < 3.5 or $m_grc1 < 3.5) {
     $pdf->SetXY(10,165);
     $pdf->SetFont('Arial','B',10);
     $pdf->MultiCell(195, 5, utf8_decode('Debes mejorar tu desempeño en las competencias por debajo de 3.5, se recomienda ver en la plataforma el plan de acción para la competencia afectada.'), 0,'C', 0 );
     $pdf->SetXY(15,180);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('1.	Debes leer la sección de AMBIENTES DE APRENDIZAJE de tu evaluación de desempeño, allí encontraras las diferentes acciones que puede implementar de manera individual  o en conjunto para mejorar tus competencias más débiles. Luego deberás imprimir este formato para diligenciarlo con tu jefe.'), 0,'J', 0 );
     $pdf->SetXY(15,197);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('2.	Deberás revisar estos resultados con tu jefe de área, acordar dos acciones específicas para cada una de las dos competencias débiles, establecer una fecha para revisión y otra para el cumplimiento de tus acciones de mejora. Ambos deben firmar el compromiso en este formato.'), 0,'J', 0 );

     $pdf->SetXY(5,214);$pdf->SetFont('Arial','B',10);
     $pdf->SetFillColor(245,245,245);
     $pdf->MultiCell(200, 5, utf8_decode('COMPROMISOS Y ACCIONES DE MEJORA DEL DESEMPEÑO'), 1,'C', 1 );
     $pdf->SetXY(5,219);$pdf->SetFont('Arial','B',10);$pdf->SetFillColor(250,250,250);
     $pdf->Cell(85, 10, utf8_decode('ACCIONES DE MEJORA ACORDADAS'), 1, 0 ,'C',1);
     $pdf->SetXY(90,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha a cumplir'), 1, 0 ,'C',1);
     $pdf->SetXY(115,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha de revisión'), 1, 0 ,'C',1);
     $pdf->SetXY(140,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(25, 5, utf8_decode('Fecha real de cumplimiento'), 1,'C', 1);
     $pdf->SetXY(165,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en a revisión'), 1,'C',1);
     $pdf->SetXY(185,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en e cumplimiento'), 1,'C', 1);
     $pdf->SetXY(5,229);$pdf->SetFont('Arial','B',7);

     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,234);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,244);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,254);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,259);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones en la Revisión'), 1,'L', 0 );
     $pdf->SetXY(5,264);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones Finales del Proceso de Mejora'), 1,'L', 0 );
     if($min == $grc1)  {
         $pdf->SetXY(15,188);
         $pdf->SetFont('Arial','B',20);
         $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: GERENCIA. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );
     }elseif ($min == $m_grc1) {
       $pdf->SetXY(15,188);
       $pdf->SetFont('Arial','B',20);
       $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: HSQ MANDO GERENCIAL. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );

     }

   }else {
     $pdf->SetXY(15,188);
     $pdf->SetFont('Arial','B',20);
     $pdf->MultiCell(180, 9, utf8_decode('¡Felicitaciones! Tu desempeño esta entre Aceptable a Excelente. Le recomendamos ver en la plataforma el plan de acción, para un desempeño Excelente.'),0,'C',0);

   }
 }elseif ($_users[$s]['categorias'] == 2) {
   if ($grc1 < 3.5 or $m_md1 < 3.5) {
     $pdf->SetXY(10,164);
     $pdf->SetFont('Arial','B',10);
     $pdf->MultiCell(195, 5, utf8_decode('Debes mejorar tu desempeño en las competencias por debajo de 3.5, se recomienda ver en la plataforma el plan de acción para la competencia afectada.'), 0,'C', 0 );
     $pdf->SetXY(15,180);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('1.	Debes leer la sección de AMBIENTES DE APRENDIZAJE de tu evaluación de desempeño, allí encontraras las diferentes acciones que puede implementar de manera individual  o en conjunto para mejorar tus competencias más débiles. Luego deberás imprimir este formato para diligenciarlo con tu jefe.'), 0,'J', 0 );
     $pdf->SetXY(15,197);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('2.	Deberás revisar estos resultados con tu jefe de área, acordar dos acciones específicas para cada una de las dos competencias débiles, establecer una fecha para revisión y otra para el cumplimiento de tus acciones de mejora. Ambos deben firmar el compromiso en este formato.'), 0,'J', 0 );

     $pdf->SetXY(5,214);$pdf->SetFont('Arial','B',10);
     $pdf->SetFillColor(245,245,245);
     $pdf->MultiCell(200, 5, utf8_decode('COMPROMISOS Y ACCIONES DE MEJORA DEL DESEMPEÑO'), 1,'C', 1 );
     $pdf->SetXY(5,219);$pdf->SetFont('Arial','B',10);$pdf->SetFillColor(250,250,250);
     $pdf->Cell(85, 10, utf8_decode('ACCIONES DE MEJORA ACORDADAS'), 1, 0 ,'C',1);
     $pdf->SetXY(90,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha a cumplir'), 1, 0 ,'C',1);
     $pdf->SetXY(115,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha de revisión'), 1, 0 ,'C',1);
     $pdf->SetXY(140,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(25, 5, utf8_decode('Fecha real de cumplimiento'), 1,'C', 1);
     $pdf->SetXY(165,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en a revisión'), 1,'C',1);
     $pdf->SetXY(185,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en e cumplimiento'), 1,'C', 1);
     $pdf->SetXY(5,229);$pdf->SetFont('Arial','B',7);

     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,234);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,244);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,254);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,259);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones en la Revisión'), 1,'L', 0 );
     $pdf->SetXY(5,264);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones Finales del Proceso de Mejora'), 1,'L', 0 );
     if($min2 == $grc1)  {
         $pdf->SetXY(15,171);
         $pdf->SetFont('Arial','B',8);
         $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: GERENCIA.'), 0,'J', 0 );
     }elseif ($min2 == $m_md1) {
       $pdf->SetXY(15,171);
       $pdf->SetFont('Arial','B',8);
       $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: HSQ MANDO MEDIO.'), 0,'J', 0 );

     }


     /*
     $pdf->SetXY(10,165);
     $pdf->SetFont('Arial','B',10);
     $pdf->MultiCell(195, 5, utf8_decode('Debes mejorar tu desempeño en las competencias por debajo de 3.5, se recomienda ver en la plataforma el plan de acción para la competencia afectada.'), 0,'C', 0 );
     $pdf->SetXY(15,180);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('1.	Debes leer la sección de AMBIENTES DE APRENDIZAJE de tu evaluación de desempeño, allí encontraras las diferentes acciones que puede implementar de manera individual  o en conjunto para mejorar tus competencias más débiles. Luego deberás imprimir este formato para diligenciarlo con tu jefe.'), 0,'J', 0 );
     $pdf->SetXY(15,197);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('2.	Deberás revisar estos resultados con tu jefe de área, acordar dos acciones específicas para cada una de las dos competencias débiles, establecer una fecha para revisión y otra para el cumplimiento de tus acciones de mejora. Ambos deben firmar el compromiso en este formato.'), 0,'J', 0 );

     $pdf->SetXY(5,214);$pdf->SetFont('Arial','B',10);
     $pdf->SetFillColor(245,245,245);
     $pdf->MultiCell(200, 5, utf8_decode('COMPROMISOS Y ACCIONES DE MEJORA DEL DESEMPEÑO'), 1,'C', 1 );
     $pdf->SetXY(5,219);$pdf->SetFont('Arial','B',10);$pdf->SetFillColor(250,250,250);
     $pdf->Cell(85, 10, utf8_decode('ACCIONES DE MEJORA ACORDADAS'), 1, 0 ,'C',1);
     $pdf->SetXY(90,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha a cumplir'), 1, 0 ,'C',1);
     $pdf->SetXY(115,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha de revisión'), 1, 0 ,'C',1);
     $pdf->SetXY(140,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(25, 5, utf8_decode('Fecha real de cumplimiento'), 1,'C', 1);
     $pdf->SetXY(165,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en a revisión'), 1,'C',1);
     $pdf->SetXY(185,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en e cumplimiento'), 1,'C', 1);
     $pdf->SetXY(5,229);$pdf->SetFont('Arial','B',7);

     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,234);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,244);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,254);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,259);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones en la Revisión'), 1,'L', 0 );
     $pdf->SetXY(5,264);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones Finales del Proceso de Mejora'), 1,'L', 0 );*/
   }else {
     $pdf->SetXY(15,188);
     $pdf->SetFont('Arial','B',20);
     $pdf->MultiCell(180, 9, utf8_decode('¡Felicitaciones! Tu desempeño esta entre Aceptable a Excelente. Le recomendamos ver en la plataforma el plan de acción, para un desempeño Excelente.'),0,'C',0);

   }

 }elseif ($_users[$s]['categorias'] == 4) {
   if ($grc1 < 3.5 or $m_hse1 < 3.5) {
     $pdf->SetXY(10,165);
     $pdf->SetFont('Arial','B',10);
     $pdf->MultiCell(195, 5, utf8_decode('Debes mejorar tu desempeño en las competencias por debajo de 3.5, se recomienda ver en la plataforma el plan de acción para la competencia afectada.'), 0,'C', 0 );
     $pdf->SetXY(15,180);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('1.	Debes leer la sección de AMBIENTES DE APRENDIZAJE de tu evaluación de desempeño, allí encontraras las diferentes acciones que puede implementar de manera individual  o en conjunto para mejorar tus competencias más débiles. Luego deberás imprimir este formato para diligenciarlo con tu jefe.'), 0,'J', 0 );
     $pdf->SetXY(15,197);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('2.	Deberás revisar estos resultados con tu jefe de área, acordar dos acciones específicas para cada una de las dos competencias débiles, establecer una fecha para revisión y otra para el cumplimiento de tus acciones de mejora. Ambos deben firmar el compromiso en este formato.'), 0,'J', 0 );

     $pdf->SetXY(5,214);$pdf->SetFont('Arial','B',10);
     $pdf->SetFillColor(245,245,245);
     $pdf->MultiCell(200, 5, utf8_decode('COMPROMISOS Y ACCIONES DE MEJORA DEL DESEMPEÑO'), 1,'C', 1 );
     $pdf->SetXY(5,219);$pdf->SetFont('Arial','B',10);$pdf->SetFillColor(250,250,250);
     $pdf->Cell(85, 10, utf8_decode('ACCIONES DE MEJORA ACORDADAS'), 1, 0 ,'C',1);
     $pdf->SetXY(90,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha a cumplir'), 1, 0 ,'C',1);
     $pdf->SetXY(115,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha de revisión'), 1, 0 ,'C',1);
     $pdf->SetXY(140,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(25, 5, utf8_decode('Fecha real de cumplimiento'), 1,'C', 1);
     $pdf->SetXY(165,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en a revisión'), 1,'C',1);
     $pdf->SetXY(185,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en e cumplimiento'), 1,'C', 1);
     $pdf->SetXY(5,229);$pdf->SetFont('Arial','B',7);

     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,234);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,244);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,254);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,259);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones en la Revisión'), 1,'L', 0 );
     $pdf->SetXY(5,264);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones Finales del Proceso de Mejora'), 1,'L', 0 );
     if($min == $grc1)  {
         $pdf->SetXY(15,188);
         $pdf->SetFont('Arial','B',20);
         $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: GERENCIA. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );
     }elseif ($min == $m_hse1) {
       $pdf->SetXY(15,188);
       $pdf->SetFont('Arial','B',20);
       $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: MANDO HSQ. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );

     }

   }else {
     $pdf->SetXY(15,188);
     $pdf->SetFont('Arial','B',20);
     $pdf->MultiCell(180, 9, utf8_decode('¡Felicitaciones! Tu desempeño esta entre Aceptable a Excelente. Le recomendamos ver en la plataforma el plan de acción, para un desempeño Excelente.'),0,'C',0);

   }


 }elseif ($_users[$s]['categorias'] == 3) {
   if ($t_op1 < 3.5) {
     $pdf->SetXY(10,165);
     $pdf->SetFont('Arial','B',10);
     $pdf->MultiCell(195, 5, utf8_decode('Debes mejorar tu desempeño en las competencias por debajo de 3.5, se recomienda ver en la plataforma el plan de acción para la competencia afectada.'), 0,'C', 0 );
     $pdf->SetXY(15,180);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('1.	Debes leer la sección de AMBIENTES DE APRENDIZAJE de tu evaluación de desempeño, allí encontraras las diferentes acciones que puede implementar de manera individual  o en conjunto para mejorar tus competencias más débiles. Luego deberás imprimir este formato para diligenciarlo con tu jefe.'), 0,'J', 0 );
     $pdf->SetXY(15,197);
     $pdf->SetFont('Arial','B',8);
     $pdf->MultiCell(180, 5, utf8_decode('2.	Deberás revisar estos resultados con tu jefe de área, acordar dos acciones específicas para cada una de las dos competencias débiles, establecer una fecha para revisión y otra para el cumplimiento de tus acciones de mejora. Ambos deben firmar el compromiso en este formato.'), 0,'J', 0 );

     $pdf->SetXY(5,214);$pdf->SetFont('Arial','B',10);
     $pdf->SetFillColor(245,245,245);
     $pdf->MultiCell(200, 5, utf8_decode('COMPROMISOS Y ACCIONES DE MEJORA DEL DESEMPEÑO'), 1,'C', 1 );
     $pdf->SetXY(5,219);$pdf->SetFont('Arial','B',10);$pdf->SetFillColor(250,250,250);
     $pdf->Cell(85, 10, utf8_decode('ACCIONES DE MEJORA ACORDADAS'), 1, 0 ,'C',1);
     $pdf->SetXY(90,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha a cumplir'), 1, 0 ,'C',1);
     $pdf->SetXY(115,219);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode('Fecha de revisión'), 1, 0 ,'C',1);
     $pdf->SetXY(140,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(25, 5, utf8_decode('Fecha real de cumplimiento'), 1,'C', 1);
     $pdf->SetXY(165,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en a revisión'), 1,'C',1);
     $pdf->SetXY(185,219);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(20, 5, utf8_decode('Firma en e cumplimiento'), 1,'C', 1);
     $pdf->SetXY(5,229);$pdf->SetFont('Arial','B',7);

     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,234);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,229);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,229);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,234);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,244);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,239);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,239);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,244);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode('Competencia y Acción:'), 1, 0 ,'L');
     $pdf->SetXY(5,254);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(85, 5, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(90,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(115,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(140,249);$pdf->SetFont('Arial','B',7);
     $pdf->Cell(25, 10, utf8_decode(''), 1, 0 ,'L');
     $pdf->SetXY(165,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(185,249);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Jefe'), 1, 0 ,'L');
     $pdf->SetXY(165,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');
     $pdf->SetXY(185,254);$pdf->SetFont('Arial','B',5);
     $pdf->Cell(20, 5, utf8_decode('Colaborador'), 1, 0 ,'L');

     $pdf->SetXY(5,259);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones en la Revisión'), 1,'L', 0 );
     $pdf->SetXY(5,264);$pdf->SetFont('Arial','B',7);
     $pdf->MultiCell(200, 5, utf8_decode('Observaciones Finales del Proceso de Mejora'), 1,'L', 0 );
     if($min == $t_op1)  {
         $pdf->SetXY(15,188);
         $pdf->SetFont('Arial','B',20);
         $pdf->MultiCell(190, 10, utf8_decode('La competencia más baja es: HSQ TRABAJADOR OPERATIVO. Tienes que mantener una mejora a partir de la fecha  22 de Marzo del año 2018 a la fecha 22 de Septiembre del año 2018, con compromisos de entrega de resultados con tu jefe inmediato. Las mejoras serán publicadas en la plataforma, en la parte desempeño bajo.'), 0,'C', 0 );
     }

   }else {
     $pdf->SetXY(15,188);
     $pdf->SetFont('Arial','B',20);
     $pdf->MultiCell(180, 9, utf8_decode('¡Felicitaciones! Tu desempeño esta entre Aceptable a Excelente. Le recomendamos ver en la plataforma el plan de acción, para un desempeño Excelente.'),0,'C',0);

   }
 }

$pdf->Output();

?>
