<?php
    require('../../fpdf/fpdf.php');
    $pdf = new FPDF();
    $pdf->addPage();
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(185, 10, 'Salary Slip', 0, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(50, 30, 'Name : ', 0, 0, 'C');
    $pdf->SetFont('Arial', '', 16);
    $pdf->Cell(10, 30, 'Prakhar Parikh', 0, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(50, 0, 'Salary : ', 0, 0, 'C');
    $pdf->SetFont('Arial', '', 16);
    $pdf->Cell(1, 0, '100000', 0, 0, 'C');
    $pdf->Output();
?>