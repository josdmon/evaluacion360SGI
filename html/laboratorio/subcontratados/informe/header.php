<?php
class PDF extends FPDF
{
   //Cabecera de página
   function Header()
   {

     //Logo
   //$this->Image("leon.jpg" , 10 ,8, 35 , 38 , "JPG" ,"http://www.mipagina.com");
   //Arial bold 15
   $this->SetFont('Arial','B',15);
   //Movernos a la derecha
   $this->Image('views/images/SGI.png',25,13,50);

   $this->Cell(60,20,'',1,0);
   //Título
   $this->Cell(133,20,utf8_decode('SUBCONTRATACIÓN DE PARÁMETROS'),1,0,'C');
   $this->SetFont('Arial','B',10);
   $this->Cell(43,5,'FECHA',1,0,'C');
   $this->SetFont('Arial','',10);
   $this->Cell(42,5,'03/01/2017',1,0,'C');
   $this->Ln();
   $this->Cell(193);
   $this->SetFont('Arial','B',10);
   $this->Cell(43,5,'PAGINA',1,0,'C');
   $this->SetFont('Arial','',10);
   $this->Cell(42,5,$this->PageNo(),1,0,'C');
   $this->Ln();
   $this->Cell(193);
   $this->SetFont('Arial','B',10);
   $this->Cell(43,5,utf8_decode('VERSIÓN'),1,0,'C');
   $this->SetFont('Arial','',10);
   $this->Cell(42,5,'3',1,0,'C');
   $this->Ln();
   $this->Cell(193);
   $this->SetFont('Arial','B',10);
   $this->Cell(43,5,utf8_decode('CÓDIGO'),1,0,'C');
   $this->SetFont('Arial','',10);
   $this->Cell(42,5,'FO-GRL-014',1,0,'C');
   //Salto de línea
   $this->Ln(10);
   $db = new Conexion();

   $p= $_GET['p'];
   $f= $_GET['f'];
   $sql = $db->query("SELECT * FROM proveedores_subcontratados WHERE id = '$p';");
   while ($d = $db->recorrer($sql)) {

   $this->Cell(278,5,utf8_decode('Nombre: '.$d['nombre']),1);
   $this->Ln();
   $this->Cell(62,5,utf8_decode('Lugar: '.$d['lugar']),1);
   $this->Cell(154,5,utf8_decode('Dirección: '.$d['direccion']),1);
   $this->Cell(62,5,utf8_decode('Teléfono: '.$d['telefono']),1);
   $this->Ln();
   $this->Cell(208,5,utf8_decode('Email: '.$d['email']),1);
   $this->Cell(70,5,utf8_decode('Fecha: '.$f),1);
   $this->Ln(10);}
   $db->liberar($sql);
   $db->close();
   }
   function Footer()
   {

     $this->SetY(-35);

     $this->SetFont('Arial','B',12);

     $this->MultiCell(278,15,utf8_decode('Observaciones: '),1);
     $this->Cell(139,10,'',1,0);
     $this->Cell(139,10,'',1,0);
     $this->Ln();
     $this->Cell(139,5,utf8_decode('Firma Responsable S.G.I SAS.'),1,0,'C');
     $this->Cell(139,5,utf8_decode('Firma Responsable Laboratorio Subcontratado:'),1,0,'C');
   }

//Creamos la tabla
      function BasicTable()
{
    $this->SetFont('Arial','B',12);
    $this->Cell(10,8,'ID',1,0,'C');
    $this->Cell(20,8,utf8_decode('Código'),1,0,'C');
    $this->Cell(20,8,'Matriz',1,0,'C');
    $this->Cell(40,8,'Tipo de Muestra',1,0,'C');
    $this->Cell(20,8,'F. toma',1,0,'C');
    $this->Cell(30,8,'E. muestra',1,0,'C');
    $this->Cell(138,8,utf8_decode('Análisis Solicitados'),1,0,'C');
$this->Ln();

}
      function DB()
{
  $db = new Conexion();
  $f= $_GET['f'];
  $p= $_GET['p'];
  $i=1;
  $sql = $db->query("SELECT * FROM subcontratados WHERE fecha_s = '$f' AND proveedor = '$p';");
  while ($d = $db->recorrer($sql)) {

    $this->SetFont('Arial','',8);
    $this->Cell(10,5,$i,1,0,'C');
    $this->Cell(20,5,utf8_decode($d['codigo']),1,0,'C');
    $this->Cell(20,5,utf8_decode($d['matriz']),1,0,'C');
    $this->Cell(40,5,utf8_decode($d['tipo_m']),1,0,'C');
    $this->Cell(20,5,utf8_decode($d['fecha_m']),1,0,'C');
    $this->Cell(30,5,utf8_decode($d['estado_m']),1,0,'C');
    $this->MultiCell(138,5,utf8_decode($d['analisis_m']),1,'C');
    $i++;
  }
  $db->liberar($sql);
  $db->close();

}

}
?>
