

<?php
if(isset($_POST['submit']))
{  
    $sname=$_POST['name'];
    $event=$_POST['event'];
    $date=$_POST['dat'];
  
  require('fpdf.php');
    
  class PDF extends FPDF {
    
      // Page header
      function Header() {
            
          // Add logo to page
         //$this->Image('download.png',1,10,33);
            
          // Set font family to Arial bold 
          //$this->SetFont('Arial','BI',28);
          $this->AddFont('aAbsoluteEmpire', '', 'aAbsoluteEmpire.php');
          $this->SetFont('aAbsoluteEmpire','',28);
            
          // Move to the right
          $this->Cell(80);
            
          // Header
          $this->Cell(35,20,'CERTIFICATE OF PARTICIPATION',0,0,'C');
            
          // Line break
          $this->Ln(40);
      }
    
      // Page footer
      function Footer() {
            
          // Position at 1.5 cm from bottom
          $this->SetY(-15);
            
          // Arial italic 8
        $this->SetFont('Courier','I',8);
         
          // Page number
          $this->Cell(0,10,'This Certificate is auto Generated ',0,0,'C');
      }
  }
    
  // Instantiation of FPDF class
  $pdf = new PDF();
    
  // Define alias for number of pages
  //$pdf->AliasNbPages();
  $pdf->AddPage();
  //$pdf->Image('download.png',0,0,100,100);
  $pdf->SetFont('Times','B',25);
  
 // $pdf->SetFont('aAbsoluteEmpire','',14);
            
  $pdf->SetDrawColor(2,174,247);

  $pdf->SetLineWidth(1.1);
  
  $pdf->Rect(10,8,190,270,);

  $pdf->SetMargins(15,15,15);
  
  $pdf->Cell(0,10,'This Certifate is Awarded To',0,0,'C',false);
  $pdf->Ln(15);
  $pdf->SetFont('Times','IU',28);
  $pdf->Cell(0,10,$sname,0,0,'C',false);

  $pdf->SetFont('Times','B',28);
  $pdf->Ln(15);
  $pdf->Cell(0,10,'For Participation in The',0,0,'C',false);
  $pdf->Ln(15);
  $pdf->SetFont('Times','IU',25);
  $pdf->Cell(0,10,$event,0,0,'C',false);
  $pdf->Ln(50);
  $pdf->SetFont('Times','',18);
  $pdf->Cell(0,10,'Date: '.$date,0,0,'L',false);
  
 
  $pdf->Cell(0,20,'Signature',0,0,'R',false);

    
  
  $pdf->Output();
}
    
  ?>


    