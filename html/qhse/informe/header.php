<?php
class PDF extends FPDF
{
   //Cabecera de página
  function Header()
  {
     $this->SetFont('Arial','B',13);
     //Movernos a la derecha
     $this->Image('views/images/SGI.png',18,15,45);
     $this->Cell(45,21,'',1,0);
     //Título
     $this->Cell(100,14,utf8_decode('EVALUACIÓN DE DESEMPEÑO'),1,0,'C');
     $this->SetFont('Arial','B',10);
     $this->Cell(45,7,'FO-GRL-011',1,0,'C');
     $this->Ln();
     $this->Cell(145);
     $this->AliasNbPages();
     $this->Cell(45,7,$this->PageNo().' / {nb}',1,0,'C');
     $this->Ln();
     $this->Cell(45);
     $this->Cell(100,7,utf8_decode('SERVICIOS GEOLÓGICOS INTEGRADOS - SGI SAS.'),1,0,'C');

     $this->Cell(45,7,'VERSION:10',1,0,'C');
     //$this->SetFont('Arial','',8);
     //$this->Cell(20,5,'03/01/2017',1,0,'C');

     //Salto de línea
     $this->Ln(10);
     $db = new Conexion();
     $p= $_GET['usr'];
     $sql = $db->query("SELECT * FROM users WHERE id = '$p';");
     while ($d = $db->recorrer($sql)) {
       $categoria = $d['categorias'];
       $this->SetFont('Arial','B',10);
       $this->Cell(20,6,utf8_decode('Nombre:'),1);
       $this->SetFont('Arial','',9);
       $this->Cell(100,6,utf8_decode($d['nombres'].' '.$d['apellidos']),1);
       $this->SetFont('Arial','B',10);
       $this->Cell(20,6,utf8_decode('C.C.'),1);
       $this->SetFont('Arial','',10);
       $this->Cell(50,6,utf8_decode($d['cedula']),1);
       $this->Ln();
       $this->SetFont('Arial','B',10);
       $this->Cell(20,6,utf8_decode('Área:'),1);
       $this->SetFont('Arial','',9);
       $t = $d['area'];
       $area = $db->query("SELECT * FROM areas WHERE id = $t;");
       $are = $db->recorrer($area);
       $this->Cell(35,6,utf8_decode($are['area']),1);
       $this->SetFont('Arial','B',10);
       $this->Cell(20,6,utf8_decode('EMAIL:'),1);
       $this->SetFont('Arial','',10);
       $this->Cell(115,6,utf8_decode($d['email']),1);
       $this->Ln(15);
       $db->liberar($area);
    }
     $db->liberar($sql);
     $db->close();
  }


  function Resultados(){
    $history=$_GET['id'];
      $db = new Conexion();
      $e = $_GET['usr'];
      $sql = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND comunicacion >=1 AND historial_evaluacion = $history;");
      $sql2 = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND evaluador = '$e' AND historial_evaluacion = $history;");
      if ($row = $db->recorrer($sql)){
        $categoria = $row['categoria'];
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

          if ($categoria == 1) {
            $grc+=$row["gerencia"];
            $m_grc+=$row["m_gerencial"];
          }elseif ($categoria == 2) {
            $grc+=$row["gerencia"];
            $m_md+=$row["m_medio"];
          }elseif ($categoria == 3) {
            $t_op+=$row["t_operativo"];
          }elseif ($categoria == 4) {
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
          if ($categoria == 1) {
            $grc2=number_format($aut["gerencia"],2);
            $m_grc2=number_format($aut["m_gerencial"],2);
          }elseif ($categoria == 2) {
            $grc2=number_format($aut["gerencia"],2);
            $m_md2=number_format($aut["m_medio"],2);
          }elseif ($categoria == 4) {
            $grc2=number_format($aut["gerencia"],2);
            $m_hse2=number_format($aut["m_hse"],2);
          }elseif ($categoria == 3) {
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

      $this->SetFont('Arial','B',15);
      $this->Cell(200, 12, utf8_decode('RESULTADOS EVALUACIÓN 360 VS AUTOEVALUACIÓN'), 0, 0, 'C');
      $this->Ln(15);
      $this->SetFillColor(206,218,228);
      $this->SetFont('Arial','B',8);
      $this->Cell(60, 10, utf8_decode('COMPETENCIA EVALUAD'), 1, 0, 'C',1);
      $this->Cell(30, 10, utf8_decode('CALIFICACIÓN'), 1, 0, 'C',1);
      $this->Cell(30, 10, utf8_decode('AUTOEVALUACIÓN'), 1, 0, 'C',1);
      $this->Ln();
      $this->SetFont('Arial','B',10);
      $this->Cell(60, 8, utf8_decode('COMUNICACIÓN'), 1, 0, 'C',1);
      $this->Cell(30, 8, $com1, 1, 0, 'C');
      $this->Cell(30, 8, $com2, 1, 0, 'C');
      $this->Cell(11, 8, '', 0, 0, 'C');
      $this->Cell(29, 8, utf8_decode('CALIFICACIÓN'), 1, 0, 'C',1);
      $this->Cell(29, 8, utf8_decode('DESEMPEÑO'), 1, 0, 'C',1);

      $this->Ln();
      $this->Cell(60, 8, utf8_decode('EFECTIVIDAD'), 1, 0, 'C',1);
      $this->Cell(30, 8, $eft1, 1, 0, 'C');
      $this->Cell(30, 8, $eft2, 1, 0, 'C');
      $this->Cell(11, 8, '', 0, 0, 'C');
      $this->Cell(29, 8, utf8_decode('0.0 a 2.99'), 1, 0, 'C');
      $this->Cell(29, 8, utf8_decode('Deficiente'), 1, 0, 'C');
      $this->Ln();
      $this->Cell(60, 8, utf8_decode('HABILIDAD COGNITIVA'), 1, 0, 'C',1);
      $this->Cell(30, 8, $hbd1, 1, 0, 'C');
      $this->Cell(30, 8, $hbd2, 1, 0, 'C');
      $this->Cell(11, 8, '', 0, 0, 'C');
      $this->Cell(29, 8, utf8_decode('3.0 a 3.49'), 1, 0, 'C');
      $this->Cell(29, 8, utf8_decode('Regular'), 1, 0, 'C');
      $this->Ln();
      $this->Cell(60, 8, utf8_decode('LIDERAZGO'), 1, 0, 'C',1);
      $this->Cell(30, 8, $ldg1, 1, 0, 'C');
      $this->Cell(30, 8, $ldg2, 1, 0, 'C');
      $this->Cell(11, 8, '', 0, 0, 'C');
      $this->Cell(29, 8, utf8_decode('3.5 a 3.99'), 1, 0, 'C');
      $this->Cell(29, 8, utf8_decode('Aceptable'), 1, 0, 'C');
      $this->Ln();
      $this->Cell(60, 8, utf8_decode('PROFESIONALISMO'), 1, 0, 'C',1);
      $this->Cell(30, 8, $prf1, 1, 0, 'C');
      $this->Cell(30, 8, $prf2, 1, 0, 'C');
      $this->Cell(11, 8, '', 0, 0, 'C');
      $this->Cell(29, 8, utf8_decode('4.0 a 4.49'), 1, 0, 'C');
      $this->Cell(29, 8, utf8_decode('Bueno'), 1, 0, 'C');
      $this->Ln();
      $this->Cell(60, 8, utf8_decode('ETICA'), 1, 0, 'C',1);
      $this->Cell(30, 8, $etc1, 1, 0, 'C');
      $this->Cell(30, 8, $etc2, 1, 0, 'C');
      $this->Cell(11, 8, '', 0, 0, 'C');
      $this->Cell(29, 8, utf8_decode('4.5 a 5.0'), 1, 0, 'C');
      $this->Cell(29, 8, utf8_decode('Excelente'), 1, 0, 'C');

       if ($categoria == 1) {
         $this->Ln();
         $this->Cell(60, 8, utf8_decode('GERENCIA'), 1, 0, 'C',1);
         $this->Cell(30, 8, $grc1, 1, 0, 'C');
         $this->Cell(30, 8, $grc2, 1, 0, 'C');
         $this->Ln();
         $this->Cell(60, 8, utf8_decode('HSQ MANDO GERENCIAL'), 1, 0, 'C',1);
         $this->Cell(30, 8, $m_grc1, 1, 0, 'C');
         $this->Cell(30, 8, $m_grc2, 1, 0, 'C');
        }elseif ($categoria == 2) {
          $this->Ln();
          $this->Cell(60, 8, utf8_decode('GERENCIA'), 1, 0, 'C',1);
          $this->Cell(30, 8, $grc1, 1, 0, 'C');
          $this->Cell(30, 8, $grc2, 1, 0, 'C');
          $this->Ln();
          $this->Cell(60, 8, utf8_decode('HSE MANDO MEDIO'), 1, 0, 'C',1);
          $this->Cell(30, 8, $m_md1, 1, 0, 'C');
          $this->Cell(30, 8, $m_md2, 1, 0, 'C');
        }elseif ($categoria == 4) {
          $this->Ln();
          $this->Cell(60, 8, utf8_decode('GERENCIA'), 1, 0, 'C',1);
          $this->Cell(30, 8, $grc1, 1, 0, 'C');
          $this->Cell(30, 8, $grc2, 1, 0, 'C');
          $this->Ln();
          $this->Cell(60, 8, utf8_decode('MANDO HSE'), 1, 0, 'C',1);
          $this->Cell(30, 8, $m_hse1, 1, 0, 'C');
          $this->Cell(30, 8, $m_hse2, 1, 0, 'C');
        }elseif ($categoria == 3) {
          $this->Ln();
          $this->Cell(60, 8, utf8_decode('HSE TRABAJADOR OPERATIVO'), 1, 0, 'C',1);
          $this->Cell(30, 8, $t_op1, 1, 0, 'C');
          $this->Cell(30, 8, $t_op2, 1, 0, 'C');
        }
        $this->Ln(10);
        $this->SetFont('Arial','B',12);
        $this->Cell(200, 12, utf8_decode('PREGUNTAS ABIERTAS'), 0, 0, 'C');
        $this->Ln();
        $sql = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND comunicacion >=1 AND historial_evaluacion = $history;");
        if ($row = $db->recorrer($sql)){
          do {
            if($row['p_abierta1'] != ""){
$fechaa=$row['fecha'];
              $this->SetFont('Arial','B',10);
              $this->MultiCell(180, 5, utf8_decode('Lo que esperan de usted: '), 0,'J', 0 );
              $this->SetFont('Arial','',10);
              $this->MultiCell(180, 5, utf8_decode($row['p_abierta1']), 0,'J', 0 );

              $this->SetFont('Arial','B',10);
              $this->MultiCell(180, 5, utf8_decode('Las actitudes y comportamientos que están afectando el trabajo del área son: '), 0,'J', 0 );
              $this->SetFont('Arial','',10);
              $this->MultiCell(180, 5, utf8_decode($row['p_abierta2']), 0,'J', 0 );


              $this->SetFont('Arial','B',10);
              $this->MultiCell(180, 5, utf8_decode('Lo que no esperan de usted: '), 0,'J', 0 );
              $this->SetFont('Arial','',10);
              $this->MultiCell(180, 5, utf8_decode($row['p_abierta3']), 0,'J', 0 );
              $this->Ln();
            }else {
              $this->SetFont('Arial','B',10);
              $this->MultiCell(180, 5, utf8_decode('Todavía no existe ningún resultado.'), 0,'J', 0 );
            }
          }while ($row = $db->recorrer($sql));
        }

        $limite = 3.5;
        if ($com1 < $limite || $eft1 < $limite || $hbd1 < $limite || $ldg1 < $limite || $prf1 < $limite || $etc1 < $limite) {
            $this->SetFont('Arial','B',10);
            $this->MultiCell(180, 5, utf8_decode('PLAN DE ACCÓN'), 0,'C', 0 );
            $this->Ln();
            $this->SetFont('Arial','B',10);
            $this->MultiCell(180, 5, utf8_decode('TODAS LAS COMPETENCIAS QUE ESTÉN POR DEBAJO DE 3.5 DEBERÁN SER MEJORADAS POR EL EMPLEADO'), 0,'J', 0 );
            $this->Ln();
            $this->Cell(20,6,utf8_decode('NOTA 1: '),0);
            $this->SetFont('Arial','',10);
            //$this->Ln();
            $this->MultiCell(180, 5, utf8_decode('la actividad escogida será objeto de seguimiento por parte de la persona que es su Jefe de área.'), 0,'J', 0);
            $this->MultiCell(180, 5, utf8_decode('Esta persona plasmará el cumplimiento o incumplimiento de sus compromisos de mejora. La revisión se hará cada 3 meses. La empresa podrá tomar medidas respecto a su cumplimiento o incumplimiento, lo cual puede afectar directamente su vinculación con la misma, de manera positiva o negativa. Depende de usted proceder de manera ética y apropiada.'), 0,'J', 0 );
            $this->Ln();
            if($com1 < $limite){
              $this->SetFont('Arial','',12);

              $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta Comunicación con un puntaje de '.$com1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
              $this->Ln();
              $this->SetFont('Arial','B',12);
              $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '1';");
              if ($row = $db->recorrer($sql)){
                $i=0;
                do {
                   ++$i;
                    $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                  $this->Ln();


                }while ($row = $db->recorrer($sql));
              }

            }if($eft1 < $limite){
              $this->SetFont('Arial','',12);

              $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta Efectividad con un puntaje de '.$eft1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
              $this->Ln();
              $this->SetFont('Arial','B',12);
              $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '2';");
              if ($row = $db->recorrer($sql)){
                $i=0;
                do {
                   ++$i;
                    $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                  $this->Ln();


                }while ($row = $db->recorrer($sql));
              }

            }
            if($hbd1 < $limite){
              $this->SetFont('Arial','',12);

              $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta Habilidad Cognitiva con un puntaje de '.$hbd1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
              $this->Ln();
              $this->SetFont('Arial','B',12);
              $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '3';");
              if ($row = $db->recorrer($sql)){
                $i=0;
                do {
                   ++$i;
                    $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                  $this->Ln();


                }while ($row = $db->recorrer($sql));
              }

            }

            if($ldg1 < $limite){
              $this->SetFont('Arial','',12);

              $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta Liderazgo con un puntaje de '.$ldg1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
              $this->Ln();
              $this->SetFont('Arial','B',12);
              $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '4';");
              if ($row = $db->recorrer($sql)){
                $i=0;
                do {
                   ++$i;
                    $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                  $this->Ln();


                }while ($row = $db->recorrer($sql));
              }

            }

            if($prf1 < $limite){
              $this->SetFont('Arial','',12);

              $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas es Profesionalismo con un puntaje de '.$prf1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
              $this->Ln();
              $this->SetFont('Arial','B',12);
              $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '5';");
              if ($row = $db->recorrer($sql)){
                $i=0;
                do {
                   ++$i;
                    $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                  $this->Ln();


                }while ($row = $db->recorrer($sql));
              }

            }if($etc1 < $limite){
              $this->SetFont('Arial','',12);

              $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas es Etica  con un puntaje de '.$etc1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
              $this->Ln();
              $this->SetFont('Arial','B',12);
              $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '6';");
              if ($row = $db->recorrer($sql)){
                $i=0;
                do {
                   ++$i;
                    $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                  $this->Ln();


                }while ($row = $db->recorrer($sql));
              }

            }if ($categoria == 2) {
              if($m_md1 < $limite){
                $this->SetFont('Arial','',12);

                $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta HSE Mando Medio con un puntaje de '.$m_md1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                $this->Ln();
                $this->SetFont('Arial','B',12);
                $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '9';");
                if ($row = $db->recorrer($sql)){
                  $i=0;
                  do {
                     ++$i;
                      $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                    $this->Ln();


                  }while ($row = $db->recorrer($sql));
                }

              }
              if($grc1 < $limite){
                $this->SetFont('Arial','',12);

                $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta Gerencia con un puntaje de '.$grc1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                $this->Ln();
                $this->SetFont('Arial','B',12);
                $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '8';");
                if ($row = $db->recorrer($sql)){
                  $i=0;
                  do {
                     ++$i;
                      $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                    $this->Ln();


                  }while ($row = $db->recorrer($sql));
                }
              }
            }
            if ($t_op1 == 3) {
              if($t_op1 < $limite){
                $this->SetFont('Arial','',12);

                $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta HSE Trabajador Operativo con un puntaje de '.$t_op1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                $this->Ln();
                $this->SetFont('Arial','B',12);
                $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '7';");
                if ($row = $db->recorrer($sql)){
                  $i=0;
                  do {
                     ++$i;
                      $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                    $this->Ln();


                  }while ($row = $db->recorrer($sql));
                }

              }
            }if ($categoria == 1) {
              if($m_grc1 < $limite){
                $this->SetFont('Arial','',12);

                $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta HSE Mando Gerencial con un puntaje de '.$m_grc1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                $this->Ln();
                $this->SetFont('Arial','B',12);
                $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '10';");
                if ($row = $db->recorrer($sql)){
                  $i=0;
                  do {
                     ++$i;
                      $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                    $this->Ln();


                  }while ($row = $db->recorrer($sql));
                }

              }
              if($grc1 < $limite){
                $this->SetFont('Arial','',12);

                $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta Gerencia con un puntaje de '.$grc1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                $this->Ln();
                $this->SetFont('Arial','B',12);
                $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '8';");
                if ($row = $db->recorrer($sql)){
                  $i=0;
                  do {
                     ++$i;
                      $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                    $this->Ln();


                  }while ($row = $db->recorrer($sql));
                }

              }
            }
            $semanaSiguiente = (92 * 24 * 60 * 60);
            $dia_db=strtotime($fechaa);
            $s = $semanaSiguiente + $dia_db;
            $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
            $this->SetFont('Arial','B',10);
            $this->Ln();
            $this->Cell(20,6,utf8_decode('NOTA 2: '),0);
            $this->SetFont('Arial','',10);
            $this->Ln();
            $this->MultiCell(180, 5, utf8_decode('los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el PLAN DE MEJORA podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.'), 0,'J', 0);
            $this->SetFont('Arial','B',10);
            $this->Cell(20,6,utf8_decode('NOTA 3: '),0);
            $this->SetFont('Arial','',10);
            $this->Ln();
            $this->MultiCell(180, 5, utf8_decode('Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha. '.$ss), 0,'J', 0 );
            $this->Ln();
          }else{
            if ($categoria == 2) {
              if($m_md1 < $limite || $grc1 < $limite){
                $this->SetFont('Arial','B',10);
                $this->MultiCell(180, 5, utf8_decode('PLAN DE ACCÓN'), 0,'C', 0 );
                $this->Ln();
                $this->SetFont('Arial','B',10);
                $this->MultiCell(180, 5, utf8_decode('TODAS LAS COMPETENCIAS QUE ESTÉN POR DEBAJO DE 3.5 DEBERÁN SER MEJORADAS POR EL EMPLEADO'), 0,'J', 0 );
                $this->Ln();
                $this->Cell(20,6,utf8_decode('NOTA 1: '),0);
                $this->SetFont('Arial','',10);
                //$this->Ln();
                $this->MultiCell(180, 5, utf8_decode('la actividad escogida será objeto de seguimiento por parte de la persona que es su Jefe de área.'), 0,'J', 0);
                $this->MultiCell(180, 5, utf8_decode('Esta persona plasmará el cumplimiento o incumplimiento de sus compromisos de mejora. La revisión se hará cada 3 meses. La empresa podrá tomar medidas respecto a su cumplimiento o incumplimiento, lo cual puede afectar directamente su vinculación con la misma, de manera positiva o negativa. Depende de usted proceder de manera ética y apropiada.'), 0,'J', 0 );
                $this->Ln();
                if($m_md1 < $limite){
                  $this->SetFont('Arial','',12);

                  $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta HSE Mando Medio con un puntaje de '.$m_md1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                  $this->Ln();
                  $this->SetFont('Arial','B',12);
                  $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '9';");
                  if ($row = $db->recorrer($sql)){
                    $i=0;
                    do {
                       ++$i;
                        $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                      $this->Ln();


                    }while ($row = $db->recorrer($sql));
                  }

                }
                if($grc1 < $limite){
                  $this->SetFont('Arial','',12);

                  $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta Gerencia con un puntaje de '.$grc1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                  $this->Ln();
                  $this->SetFont('Arial','B',12);
                  $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '8';");
                  if ($row = $db->recorrer($sql)){
                    $i=0;
                    do {
                       ++$i;
                        $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                      $this->Ln();


                    }while ($row = $db->recorrer($sql));
                  }

                }
                $semanaSiguiente = (92 * 24 * 60 * 60);
                $dia_db=strtotime($fechaa);
                $s = $semanaSiguiente + $dia_db;
                $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                $this->SetFont('Arial','B',10);
                $this->Ln();
                $this->Cell(20,6,utf8_decode('NOTA 2: '),0);
                $this->SetFont('Arial','',10);
                $this->Ln();
                $this->MultiCell(180, 5, utf8_decode('los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el PLAN DE MEJORA podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.'), 0,'J', 0);
                $this->SetFont('Arial','B',10);
                $this->Cell(20,6,utf8_decode('NOTA 3: '),0);
                $this->SetFont('Arial','',10);
                $this->Ln();
                $this->MultiCell(180, 5, utf8_decode('Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha. '.$ss), 0,'J', 0 );
                $this->Ln();
              }
            }if ($categoria == 3 && $t_op1 < $limite) {
              $this->SetFont('Arial','B',10);
              $this->MultiCell(180, 5, utf8_decode('PLAN DE ACCÓN'), 0,'C', 0 );
              $this->Ln();
              $this->SetFont('Arial','B',10);
              $this->MultiCell(180, 5, utf8_decode('TODAS LAS COMPETENCIAS QUE ESTÉN POR DEBAJO DE 3.5 DEBERÁN SER MEJORADAS POR EL EMPLEADO'), 0,'J', 0 );
              $this->Ln();
              $this->Cell(20,6,utf8_decode('NOTA 1: '),0);
              $this->SetFont('Arial','',10);
              //$this->Ln();
              $this->MultiCell(180, 5, utf8_decode('la actividad escogida será objeto de seguimiento por parte de la persona que es su Jefe de área.'), 0,'J', 0);
              $this->MultiCell(180, 5, utf8_decode('Esta persona plasmará el cumplimiento o incumplimiento de sus compromisos de mejora. La revisión se hará cada 3 meses. La empresa podrá tomar medidas respecto a su cumplimiento o incumplimiento, lo cual puede afectar directamente su vinculación con la misma, de manera positiva o negativa. Depende de usted proceder de manera ética y apropiada.'), 0,'J', 0 );
              $this->Ln();
              $this->SetFont('Arial','',12);

              $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta HSE Trabajador Operativo con un puntaje de '.$t_op1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
              $this->Ln();
              $this->SetFont('Arial','B',12);
              $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '7';");
              if ($row = $db->recorrer($sql)){
                $i=0;
                do {
                   ++$i;
                    $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                  $this->Ln();


                }while ($row = $db->recorrer($sql));
              }

              $semanaSiguiente = (92 * 24 * 60 * 60);
              $dia_db=strtotime($fechaa);
              $s = $semanaSiguiente + $dia_db;
              $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
              $this->SetFont('Arial','B',10);
              $this->Ln();
              $this->Cell(20,6,utf8_decode('NOTA 2: '),0);
              $this->SetFont('Arial','',10);
              $this->Ln();
              $this->MultiCell(180, 5, utf8_decode('los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el PLAN DE MEJORA podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.'), 0,'J', 0);
              $this->SetFont('Arial','B',10);
              $this->Cell(20,6,utf8_decode('NOTA 3: '),0);
              $this->SetFont('Arial','',10);
              $this->Ln();
              $this->MultiCell(180, 5, utf8_decode('Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha. '.$ss), 0,'J', 0 );
              $this->Ln();
            }if ($categoria == 1) {
              if($m_grc1 < $limite || $grc1 < $limite){
                $this->SetFont('Arial','B',10);
                $this->MultiCell(180, 5, utf8_decode('PLAN DE ACCÓN'), 0,'C', 0 );
                $this->Ln();
                $this->SetFont('Arial','B',10);
                $this->MultiCell(180, 5, utf8_decode('TODAS LAS COMPETENCIAS QUE ESTÉN POR DEBAJO DE 3.5 DEBERÁN SER MEJORADAS POR EL EMPLEADO'), 0,'J', 0 );
                $this->Ln();
                $this->Cell(20,6,utf8_decode('NOTA 1: '),0);
                $this->SetFont('Arial','',10);
                //$this->Ln();
                $this->MultiCell(180, 5, utf8_decode('la actividad escogida será objeto de seguimiento por parte de la persona que es su Jefe de área.'), 0,'J', 0);
                $this->MultiCell(180, 5, utf8_decode('Esta persona plasmará el cumplimiento o incumplimiento de sus compromisos de mejora. La revisión se hará cada 3 meses. La empresa podrá tomar medidas respecto a su cumplimiento o incumplimiento, lo cual puede afectar directamente su vinculación con la misma, de manera positiva o negativa. Depende de usted proceder de manera ética y apropiada.'), 0,'J', 0 );
                $this->Ln();
                if($m_grc1 < $limite){
                  $this->SetFont('Arial','',12);

                  $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta HSE Mando Gerencial con un puntaje de '.$m_grc1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                  $this->Ln();
                  $this->SetFont('Arial','B',12);
                  $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '10';");
                  if ($row = $db->recorrer($sql)){
                    $i=0;
                    do {
                       ++$i;
                        $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                      $this->Ln();


                    }while ($row = $db->recorrer($sql));
                  }

                }
                if($grc1 < $limite){
                  $this->SetFont('Arial','',12);

                  $this->MultiCell(180, 5, utf8_decode('Entre las competencias más bajas esta Gerencia con un puntaje de '.$grc1.' Por ello es necesario realizar uno de los siguientes cursos en línea.'), 0,'J', 0);
                  $this->Ln();
                  $this->SetFont('Arial','B',12);
                  $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '8';");
                  if ($row = $db->recorrer($sql)){
                    $i=0;
                    do {
                       ++$i;
                        $this->Cell(180,6,utf8_decode('Link '.$i.', '.$row['nombre']),0,1,'',false,$row['lin']);
                      $this->Ln();


                    }while ($row = $db->recorrer($sql));
                  }
                }
                $semanaSiguiente = (92 * 24 * 60 * 60);
                $dia_db=strtotime($fechaa);
                $s = $semanaSiguiente + $dia_db;
                $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                $this->SetFont('Arial','B',10);
                $this->Ln();
                $this->Cell(20,6,utf8_decode('NOTA 2: '),0);
                $this->SetFont('Arial','',10);
                $this->Ln();
                $this->MultiCell(180, 5, utf8_decode('los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el PLAN DE MEJORA podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.'), 0,'J', 0);
                $this->SetFont('Arial','B',10);
                $this->Cell(20,6,utf8_decode('NOTA 3: '),0);
                $this->SetFont('Arial','',10);
                $this->Ln();
                $this->MultiCell(180, 5, utf8_decode('Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha. '.$ss), 0,'J', 0 );
                $this->Ln();
              }
            }

          }



          $db->liberar($sql);
          $db->liberar($sql2);
          $db->close();

        } else {
        $this->Cell(60, 10, utf8_decode('Todavía no existe ningún resultado.'), 1, 0, 'C');
      }
  }


  function Footer()
  {
     /*$this->SetY(-35);
     $this->SetFont('Arial','B',12);
     $this->MultiCell(190,15,utf8_decode('Observaciones: '),1);
     $this->Cell(95,10,'',1,0);
     $this->Cell(95,10,'',1,0);
     $this->Ln();
     $this->Cell(95,5,utf8_decode('Firma Responsable S.G.I SAS.'),1,0,'C');
     $this->Cell(95,5,utf8_decode('Firma Responsable Laboratorio Subcontratado:'),1,0,'C');*/
  }
}
?>
