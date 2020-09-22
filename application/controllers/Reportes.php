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
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',12);
            $rows = $this->db->query("SELECT * FROM ejemplar1")->result();
            foreach($rows as $row){
                $pdf->Cell(60,10,$row->ejem_titulo,1);
                $pdf->Cell(61,10,$row->ejem_editorial,1);
                $pdf->Cell(30,10,$row->ejem_idioma,1);
                $pdf->Cell(40,10,$row->ejem_anio,1);
                $pdf->ln(10);
                
            }
            $pdf->Output();
        }	
}