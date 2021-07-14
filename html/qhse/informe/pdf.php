<?php
include(HTML_DIR . 'qhse/informe/header.php');
$pdf=new PDF('P','mm',array(220,317));
$pdf->SetAutoPageBreak(true,35);
$pdf->SetMargins(17,10,10);
$pdf->SetTitle('Evaluación de desempeño 360');
$pdf->AddPage();
$pdf->Resultados();
//$pdf->DB();
$pdf->Output();
 ?>
