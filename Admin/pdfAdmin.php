<?php
   
    require("fpdf/fpdf.php");
    $db=new PDO("mysql:host=localhost;dbname=Projet_web", "root", "mysql");
   
    class myPDF extends FPDF
    {
   
    function header()
    {
    $this->SetFont("Arial","B",14);
            $this->Cell(10,10,"Admins",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des Admins:",'C');
            $this->ln();
    }
    function headertable()
    {
    $this->SetFont('Times','B',12);
    $this->Cell(40,10,'Nom',1,0,'C');
    $this->Cell(40,10,'Email',1,0,'C');
    $this->Cell(40,10,'Telephone',1,0,'C');
    $this->Cell(40,10,'Dernier accès ',1,0,'C');
    $this->ln();
    }
    function viewsTable($db)
    {
    $this->SetFont('times','',12);
    $stmt = $db->query("SElECT * From admin");
            while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
       $this->Cell(40,10,$data->nom,1,0,'C');
       $this->Cell(40,10,$data->email,1,0,'L');
       $this->Cell(40,10,$data->tel,1,0,'L');
       $this->Cell(40,10,$data->dernier_acc,1,0,'L');
       $this->ln();
            }

    }
    }
    $pdf=new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("Admins.pdf", "D");


?>