<?php
require_once "../fpdf/fpdf.php";
require_once "variables.php";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('../img/hrdac.png',10,10,60 );
$pdf->Image('../img/susalud.png',140,10,60 );
$pdf->SetFont('Arial','B',20);
$pdf->Ln(28);
$pdf->Cell(185, 10, 'HOJA DE RECLAMACION EN SALUD ', 0,0,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Ln(12);
$pdf->SetFillColor(183,213,239);
$pdf->Cell(190, 43,'', 0,0,'C',1);
$pdf->Ln(5);
$pdf->SetFillColor(255,255,255);
$pdf->SetX(15);
$pdf->Cell(110, 11,'IPRESS:  HOSPITAL REGIONAL DANIEL ALCIDES CARRION - PASCO', 0,0,'C',1);
$pdf->SetX(140);
$pdf->Cell(50, 33,'HOJA EN RECLAMACION', 0,0,'C',1);
$pdf->Ln(11);
$pdf->SetX(15);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(110, 11,'DIRECCION:  AV. LOS INCAS S/N. SAN JUAN - YANACANCHA-PASCO', 0,0,'C',1);
$pdf->Ln(11);
$pdf->SetX(15);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(110, 11,'FECHA: '.$_POST['fecha'], 0,0,'C',1);
$pdf->Ln(15);
$pdf->SetFillColor(224,225,226);
$pdf->Cell(190, 50,'', 0,0,'C',1);
$pdf->Ln(5);
$pdf->SetX(15);
$pdf->Cell(170, 5,'1. IDENTIFICACION DEL USUARIO O TERCERO LEGITIMADO ', 0,0,'L',1);
$pdf->Ln(5);
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',6);
$pdf->SetX(15);
$pdf->Cell(90, 10,'TIPO DE DOCUMENTO: '.strtoupper($_POST['documento']), 0,0,'L',1);
$pdf->Cell(90, 10,'NUMERO DE DOCUMENTO:  '.$_POST['numero_documento'], 0,0,'L',1);
$pdf->Ln(10);
$pdf->SetFillColor(255,255,255);
$pdf->SetX(15);
$pdf->Cell(90, 14,'NOMBRE O RAZON SOCIAL: '.utf8_decode($_POST['nombre']), 0,0,'L',1);
$pdf->Cell(90, 14,'EMAIL: '.utf8_decode($_POST['email']), 0,0,'L',1);
$pdf->Ln(10);
$pdf->SetFillColor(255,255,255);
$pdf->SetX(15);
$pdf->Cell(90, 14,'DOMICILIO: '.utf8_decode($_POST['domicilio']), 0,0,'L',1);
$pdf->Cell(90, 14,'TELEFONO: '.$_POST['telefono'], 0,0,'L',1);
$pdf->Ln(20);
if(!empty($_POST['numero_documento_tercero'])){
    $pdf->SetFillColor(183,213,239);
    $pdf->Cell(190, 50,'', 0,0,'C',1);
    $pdf->Ln(5);
    $pdf->SetX(15);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(170, 5,'2. IDENTIFICACION DE QUIEN PRESENTA EL RECLAMO ', 0,0,'L',1);
    $pdf->Ln(5);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont('Arial','B',6);
    $pdf->SetX(15);
    $pdf->Cell(90, 10,'TIPO DE DOCUMENTO: '.$_POST['documento_tercero'], 0,0,'L',1);
    $pdf->Cell(90, 10,'NUMERO DE DOCUMENTO:  '.$_POST['numero_documento_tercero'], 0,0,'L',1);
    $pdf->Ln(10);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetX(15);
    $pdf->Cell(90, 14,'NOMBRE O RAZON SOCIAL: '.utf8_decode($_POST['nombre_tercero']), 0,0,'L',1);
    $pdf->Cell(90, 14,'EMAIL: '.utf8_decode($_POST['email_tercero']), 0,0,'L',1);
    $pdf->Ln(10);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetX(15);
    $pdf->Cell(90, 14,'DOMICILIO: '.utf8_decode($_POST['domicilio_tercero']), 0,0,'L',1);
    $pdf->Cell(90, 14,'TELEFONO: '.$_POST['telefono_tercero'], 0,0,'L',1);
    $pdf->Ln(20);
}else{
    $pdf->SetFillColor(183,213,239);
    $pdf->Cell(190, 50,'', 0,0,'C',1);
    $pdf->Ln(5);
    $pdf->SetX(15);
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(170, 5,'2. IDENTIFICACION DE QUIEN PRESENTA EL RECLAMO ', 0,0,'L',1);
    $pdf->Ln(5);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetFont('Arial','B',6);
    $pdf->SetX(15);
    $pdf->Cell(90, 10,'TIPO DE DOCUMENTO: ' , 0,0,'L',1);
    $pdf->Cell(90, 10,'NUMERO DE DOCUMENTO:  ', 0,0,'L',1);
    $pdf->Ln(10);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetX(15);
    $pdf->Cell(90, 14,'NOMBRE O RAZON SOCIAL: ', 0,0,'L',1);
    $pdf->Cell(90, 14,'EMAIL: ', 0,0,'L',1);
    $pdf->Ln(10);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetX(15);
    $pdf->Cell(90, 14,'DOMICILIO: ', 0,0,'L',1);
    $pdf->Cell(90, 14,'TELEFONO: ', 0,0,'L',1);
    $pdf->Ln(20);
}
$pdf->SetFillColor(233,233,233);
$pdf->Cell(190, 65,'', 0,0,'C',1);
$pdf->Ln(5);
$pdf->SetX(15);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(170, 5,'3. DETALLE DEL RECLAMO ', 0,0,'L',1);
$pdf->Ln(5);
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','B',6);
$pdf->SetX(15);
$pdf->Cell(180, 5,'UNIDAD O SERVICIO: '.utf8_decode($unidad[$_POST['unidad']]), 0,0,'L',1);
$pdf->Ln(5);
$pdf->SetX(15);
if(!empty($_POST['area'])){
    $pdf->Cell(180, 5,'AREA: '.utf8_decode($area[$_POST['area']]), 0,0,'L',1);
}else{
    $pdf->Cell(180, 5,'AREA: ', 0,0,'L',1);
}
$pdf->Ln(10);
$pdf->SetX(15);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(180, 37,'', 0,0,'C',1);
$pdf->Ln(1);
$pdf->SetX(15);
$pdf->MultiCell(170, 3, 'DETALLE DEL RECLAMO:   '.utf8_decode($_POST['detalles']),'J',1);
$pdf->SetY(257);
$pdf->SetFillColor(183,213,239);
$pdf->Cell(190, 10,'', 0,0,'C',1);
$pdf->SetX(15);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(110, 8,'4. AUTORIZO NOTIFICACION DEL RESULTADO DEL RECLAMO AL EMAIL CONSIGNADO ', 0,0,'L',1);
$pdf->Cell(65, 8," ".strtoupper($_POST['autorizo']), 0,0,'R');
$pdf->Ln(9);
$pdf->SetFillColor(233,233,233);
$pdf->SetFont('Arial','B',5);
$pdf->MultiCell(190, 3, utf8_decode('Las IAFAS, IPRESS o UGIPRESS deben atender el reclamo en plazo de 30 días hábiles."Estimado usuario: Usted puede presentar su queja ante SUSALUD cuando no le hayan brindado un servicio, prestación o cobertura solicitada, o recibida de las IAFAS o IPRESS, o que dependan de las UGIPRESS públicas, privadas o mixtas. También ante la negativa de atención de su reclamo, irregularidad en su tramitación o disconformidad con el resultado del mismo". '), 0,'LT','J',1);
$pdf->Output();









