<?php
include_once "../Controller/evenementC.php";
require('fpdf/fpdf.php');

	
 
 

$EvenementC = new EvenementC();
$resultat=$EvenementC->afficherEvenement();

$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',14); 
$pdf->Cell(10,10,"Evenement",'C');
$pdf->Ln(20);
$pdf->Cell(5,5,"liste des Evenements:",'C');
$pdf->ln();
$pdf->SetFont('Times','B',12);
$pdf->Cell(40,10,"Titre",1,0,'C');
$pdf->Cell(40,10,"Date Debut",1,0,'C'); 
$pdf->Cell(40,10,"Date Fin",1,0,'C');
$pdf->Cell(40,10,"Description",1,0,'C');

$pdf->Ln(); 



foreach($resultat as $row)
{
$pdf->SetFont('times','',12);
$pdf->Cell(40,10,$row['nom'],1,0,'C');
$pdf->Cell(40,10,$row['date_debut'],1,0,'L');
$pdf->Cell(40,10,$row['date_fin'],1,0,'L'); 
$pdf->Cell(40,10,$row['descrip'],1,0,'L');
$pdf->Ln(); 
}
$pdf->Output("F","test.pdf");
 header('Location: test.pdf');
 






	
	

?>

	

	
	
	

