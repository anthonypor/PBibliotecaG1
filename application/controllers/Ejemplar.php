<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar extends CI_Controller {

	public function index()
	{  
		//$this->load->database();
		$this->load->model('model_ejemplar');
		$result = $this->model_ejemplar->consultar();
		//$datos= array('registros'=>$result);
		$rows = $this->db->query("
		 SELECT * FROM ejemplar1,categoria
		  WHERE ejem_cate_id=cate_id ")->result();
        $data['rows']= $rows;
		$this->load->view('includes/header');
		$this->load->view('ejemplares/lista',$data);
		$this->load->view('includes/footer');
	}
	public function create()
	{    
		$this->load->view('includes/header');
		$this->load->helper('form');
		$this->load->model('Model_ejemplar');
		 $opciones=$this->Model_ejemplar->getCategorias();
		$data['opciones'] = $opciones; 
		$this->load->view('ejemplares/create',$data); 
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
		$ejem_tipo_id= $this->input->post('ejem_tipo_id'); 
		$ejem_cate_id= $this->input->post('ejem_cate_id');
		$ejem_anio= $this->input->post('ejem_anio');
		$this->load->model('model_ejemplar');
		$data =array('ejem_titulo'=>$ejem_titulo, 
				     'ejem_editorial'=>$ejem_editorial,
					 'ejem_paginas'=>$ejem_paginas,
					 'ejem_idioma'=>$ejem_idioma,
					 'ejem_audio'=>$ejem_audio,
					 'ejem_resumen'=>$ejem_resumen,
					 'ejem_tipo_id'=>$ejem_tipo_id,
					 'ejem_cate_id'=>$ejem_cate_id,
					 'ejem_anio'=>$ejem_anio
				);
				$this->model_ejemplar->guardar($data);
				redirect('ejemplar');
	}
	public function edit($ejem_id)
   {
       $ejem = $this->db->get_where('ejemplar1', array('ejem_id' => $ejem_id))->row();
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
       $this->db->delete('ejemplar1');
       redirect(base_url('ejemplar'));
   }
   
}