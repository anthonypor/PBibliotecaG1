<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
        function __construc(){
            parent::__construc();
        }
	    function index(){
            $this->load->library('Pdf');
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage('LANDSCAPE');
            $pdf->SetFont('Arial','B',12);
        
            
            $rows = $this->db->query("SELECT * FROM ejemplar1")->result();
        
            foreach($rows as $row){
     
                $pdf->Cell(60,50,$row->ejem_titulo,1,'','C');
                $pdf->Cell(61,50,utf8_decode($row->ejem_editorial),1,'','C');
                $pdf->Cell(30,50,utf8_decode($row->ejem_idioma),1,'','C');
                $pdf->Cell(40,50,utf8_decode($row->ejem_anio),1,'','C');
                $pdf->Cell(87,50,$pdf->Image('https://static.wikia.nocookie.net/beekeepers21/images/c/c8/NotFound.png', $pdf->GetX()+25, $pdf->GetY()+5,40),1);
               
                $pdf->ln(50);
                
            }
            
            $pdf->Output('','Reporte semanal');
        }	
}
