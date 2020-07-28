<?php
require('C:\AppServ\www\CONTROL_ OSAKA_ELECTRONIC\fpdf\fpdf.php');

$mysqli = new mysqli("localhost", "root", "12345678", "bdunad11");
$consultar = "SELECT * FROM TABLA11";
$result = $mysqli->query($consultar);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$pdf->Cell(20,10,'Registro en BD_UNAD11');
$pdf->Ln(10);
$pdf->Cell(20,20,'codigo');
$pdf->Cell(40,20,'descripcion');
$pdf->Cell(25,20,'proveedor');
$pdf->Cell(25,20,'disponible');
$pdf->Cell(40,20,'costo');
$pdf->Cell(15,20,'venta');
$pdf->Ln(10);
while($row = $result->fetch_assoc())
{
    $pdf->Cell(20, 20, $row['codigo'],0);
        $pdf->Cell(40, 20, $row['descripcion'],0) ;
        $pdf->Cell(25, 20, $row['proveedor'],0) ;
        $pdf->Cell(40, 20, $row['disponible'],0) ;
        $pdf->Cell(15, 20, $row['costo'],0) ;
        $pdf->Cell(20, 20, $row['venta'],0) ;
    }

$pdf->Output();
?>