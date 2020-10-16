<?php
include(APPPATH."libraries/fpdf/fpdf.php");
class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial','B',10);
        
        $this->Text(100,15,utf8_decode('UNIVERSIDAD NACIONAL DEL ALTIPLANO - Ingeniería de Sistemas'),0,0,'C');
     
        $this->ln(5);
        $this->SetFont('Arial','B',22);
        $this->Text(115,28,utf8_decode('BIBLIOTECA VIRTUAL'),0,0,'C');
        $this->ln(1);
        $this->Text(123,38,utf8_decode('"ESPERANCITO"'),0,0,'C');
        $this->ln(5);
        $this->Image('https://sites.google.com/site/elnuestrabiblioteca/_/rsrc/1283475501888/home/logo%2520Biblioteca%2520trans%25204.png',17,10,70,50);
    
        $this->ln(20);

    $this->SetTextColor(6,17,128);
    //Lineas
    $this->SetDrawColor(6,17,128);
    $this->SetLineWidth(1);
    //Linea de arriba
    $this->Line(7, 7, 290, 7);
    //Linea de abajo
    $this->Line(7, 202, 290, 202);
    //Linea izquierda
    $this->Line(7, 7, 7, 202);
    //Linea derecha
    $this->Line(290, 7, 290, 202);

    //Colaboradores
    $this->SetTextColor(0,0,0);;
    $this->SetFont('Arial','B',10);
    $this->Text(220,25,utf8_decode('Colaboradores: '),0,0,'C');
    $this->SetFont('Arial','',10);
    $this->Text(220,30,utf8_decode('- Arias Escarcena, Franklin Jose'),0,0,'C');
    $this->Text(220,35,utf8_decode('- Lopez Yucra, Lenin'),0,0,'C');
    $this->Text(220,40,utf8_decode('- Mendoza Apaza, Fiorella Yanel'),0,0,'C');
    $this->Text(220,45,utf8_decode('- Portugal Chipana, Anthony Jhonatan'),0,0,'C');

    $this->SetTextColor(6,17,128);
    $this->SetLineWidth(0);
    $this->SetDrawColor(0,80,180);
        $this->Cell(80);
        // Título
        $this->SetFont('Arial','U',20);
        $this->Text(103,50,utf8_decode('---Libros virtuales disponibles---'),0,0,'C');
        // Salto de línea
        $this->SetFont('Arial','B',15);
        $this->Ln(20);
        $this->SetFillColor(185,218,255);
        $this->Cell(60,10,'Titulo',1,'','C',true);
        $this->Cell(61,10,'Editorial',1,'','C',true);
        $this->Cell(30,10,'Idioma',1,'','C',true);
        $this->Cell(40,10,utf8_decode('Año'),1,'','C',true);
        $this->Cell(87,10,'Portada',1,'','C',true);
        $this->ln(10);
    }
    
    // Pie de página
    function Footer()
    {
        $this->ln(60);
        
        // Posición: a 1,8 cm del final
        $this->SetY(-18);
        // Arial italic 8
        $this->Text(75,192,utf8_decode('Todos los derechos reservados a los esperancitos que hicieron este proyecto'),0,0,'C');
        $this->SetFont('Arial','I',8);
        $this->SetTextColor(128);
        // Número de página
        
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }

    
}
?>
