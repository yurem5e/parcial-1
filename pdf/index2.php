<?php
require('fpdf186/fpdf.php');
$query = $pdo->prepare("SELECT * FROM characters");
$character = $query->fetchAll();

if(count($characters)>0){
    foreach($characters as $character){
        $pdf->Cell(80,10,$character['name']);//escribo mensaje
        $pdf->Cell(80,10,$character['level'],0,1);//escribo mensaje
    }
}else{
    $pdf->Cell(80,10,'No hay personajes');
}

$pdf->Output();//cierro el pdf y lo abro
?>