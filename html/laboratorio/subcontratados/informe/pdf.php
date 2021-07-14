<?php
include(HTML_DIR . 'laboratorio/subcontratados/informe/header.php');
$pdf=new PDF('L','mm',array(310,210));
$pdf->SetAutoPageBreak(true,35); 
$pdf->SetMargins(20,10,10);
$pdf->SetTitle('Subcontratados');
$pdf->AddPage();
$pdf->BasicTable();
$pdf->DB();
$pdf->Output();
 ?>
