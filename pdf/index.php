<?php
require('fpdf186/fpdf.php');

$pdf = new FPDF();//creamos un objeto
$pdf->AddPage();//insertamos una pagina
$pdf->SetFont('Arial','B',14);//configuramos tipografia
$pdf->SetTextColor(20,100,20);
$pdf->SetFillcolor(210,100,20);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(200,10,10);
$pdf->MultiCell(140,10,'centro de estudios Tecnologicos Industriales y Servicios No.84','LR',1,'C',TRUE);//escribo mensaje
$pdf->SetFont('Arial','B',16);//configuramos tipografia
$pdf->SetTextColor(20,100,20);
$pdf->SetFillcolor(210,100,20);
$pdf->Cell(150,20,'desarrolla aplicaciones con conexion a base de datos',0,1);//escribo mensaje
$pdf->SetFont('Arial','B',16);//configuramos tipografia
$pdf->SetTextColor(20,100,20);
$pdf->SetFillcolor(210,100,20);
$pdf->Cell(140,20,'Gabrie Ignacio China Cortez',0,1);//escribo mensaje
$pdf->SetFont('Arial','B',14);//configuramos tipografia
$pdf->SetTextColor(20,100,20);
$pdf->SetFillcolor(210,100,20);
$pdf->Cell(140,20,'victor yurem contreras barajas',0,1);//escribo mensaje
$pdf->Output();//cierro el pdf y lo abro
?>