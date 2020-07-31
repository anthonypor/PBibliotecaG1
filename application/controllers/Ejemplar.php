<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar extends CI_Controller {

	public function index()
	{  
		//$this->load->database();
		$this->load->model('model_ejemplar');
		$result = $this->model_ejemplar->consultar();

		$datos= array('registros'=>$result);
        $this->load->view('includes/header');
		$this->load->view('ejemplares/lista',$datos);
		$this->load->view('includes/footer');
	}
	public function create()
	{    
        $this->load->view('includes/header');
		$this->load->view('ejemplares/create'); 
		$this->load->view('includes/footer');
	}
	public function guardar()
	{
		$ejem_titulo= $this->input->post('ejem_titulo');
		$ejem_editorial= $this->input->post('ejem_editorial');
		$ejem_paginas= $this->input->post('ejem_paginas');
		$ejem_idioma= $this->input->post('ejem_idioma');
		$ejem_audio= $this->input->post('ejem_audio');
		$ejem_resumen= $this->input->post('ejem_resumen');
		
		$ejem_anio= $this->input->post('ejem_anio');
		$this->load->model('model_ejemplar');
		$data =array('ejem_titulo'=>$ejem_titulo, 
				     'ejem_editorial'=>$ejem_editorial,
					 'ejem_paginas'=>$ejem_paginas,
					 'ejem_idioma'=>$ejem_idioma,
					 'ejem_audio'=>$ejem_audio,
					 'ejem_resumen'=>$ejem_resumen,
					 
					 'ejem_anio'=>$ejem_anio
				);
				$this->model_ejemplar->guardar($data);
				redirect('ejemplar');
	}
	public function edit($ejem_id)
   {
       $ejem = $this->db->get_where('ejemplar', array('ejem_id' => $ejem_id))->row();
       $this->load->view('includes/header');
       $this->load->view('ejemplares/edit',array('ejem'=>$ejem));
       $this->load->view('includes/footer');   
   }
   public function update($ejem_id)
   {
	$this->load->model('model_ejemplar');
       $ejem = new Model_ejemplar;
       $ejem->update_ejem($ejem_id);
       redirect(base_url('ejemplar'));
   }
   public function delete($ejem_id)
   {
       $this->db->where('ejem_id', $ejem_id);
       $this->db->delete('ejemplar');
       redirect(base_url('ejemplar'));
   }
   
}