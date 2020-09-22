<?php
include(APPPATH."libraries/fpdf/fpdf.php");
class PDF extends FPDF
{
    function Header()
    {
        // Logo
        $this->Image(FCPATH.'assets/libro.jpg',10,8,30);
        $this->Image(FCPATH.'assets/libro.jpg',170,8,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'Reporte de los libros',0,0,'C');
        // Salto de línea
        $this->Ln(20);
        $this->Cell(60,10,'Titulo',1);
        $this->Cell(61,10,'Editorial',1);
        $this->Cell(30,10,'Idioma',1);
        $this->Cell(40,10,utf8_decode('Año'),1);
        $this->ln(10);
    }
    
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        $this->SetTextColor(128);
        // Número de página
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }

    
}
?>