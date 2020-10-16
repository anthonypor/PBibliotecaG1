<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar extends CI_Controller {

	public function index()
	{  
		$draw = intval($this->input->get('draw')); 
		$start = intval($this->input->get('start'));
		$length = intval($this->input->get('length'));
		$this->load->model('model_ejemplar');
		$result = $this->model_ejemplar->consultar();
		$rows = $this->db->query("
		 SELECT * FROM ejemplar1,categoria
		  WHERE ejem_cate_id=cate_id ")->result();
		$data['rows']= $rows;
		$reg = $this->db->query("
		 SELECT * FROM ejemplar1,categoria
		  WHERE ejem_cate_id=cate_id ")->result();
		$data['reg']= $reg;
		$this->load->view('includes/header');
		$this->load->view('ejemplares/lista',$data);
		$this->load->view('includes/footer');
	}

	public function do_upload($path,$name){
               
		$config['upload_path'] = $path;
		$config['allowed_types'] = "gif|jpg|png";
		$config['file_name'] = $name;
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";

		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('ejem_audio')) {
						return false;
		}else{
				$data = $this->upload->data();
				return $data;
		}
		}

	public function get_items()
	{
		$draw = intval($this->input->get('draw'));
		$start = intval($this->input->get('start'));
		$length = intval($this->input->get('length'));
		$query = $this->db->get("index");


      $data = [];


      foreach($query->result() as $r) {
           $data[] = array(
                $r->ejem_titulo,
				$r->ejem_editorial,
				$r->ejem_paginas,
				$r->ejem_idioma,
				$r->ejem_audio,
				$r->ejem_resumen,
				$r->ejem_tipo_id,
				$r->ejem_cate_id,
                $r->ejem_anio
           );
      }


      $result = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );


      echo json_encode($result);
      exit();
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
	public function Validar_campos()
	{
		$this->form_validation->set_rules("ejem_titulo", "Titulo", "trim|required");
		$this->form_validation->set_rules("ejem_editorial", "Editorial", "trim|required|alpha_numeric_spaces");
		$this->form_validation->set_rules("ejem_paginas", "Nro_paginas", "trim|required|numeric");
		//$this->form_validation->set_rules("ejem_idioma", "Idioma", "trim|required|alpha");
		$this->form_validation->set_rules("ejem_audio", "audio", "required");
		$this->form_validation->set_rules("ejem_resumen", "resumen", "required");
		$this->form_validation->set_rules("ejem_tipo_id", "Tipo de libro", "required");
		$this->form_validation->set_rules("ejem_cate_id", "Categoria", "callback_ejem_cate_id_check");
		$this->form_validation->set_rules("ejem_anio", "Año", "trim|required|numeric|min_length[4]");
	}
	public function novalida1()
	{
		$this->load->view('includes/header');
		$this->load->view('ejemplares/create'); 
		$this->load->view('includes/footer');
	}
	public function novalida2()
	{
		$this->load->view('includes/header');
		$this->load->view('ejemplares/edit'); 
		$this->load->view('includes/footer');
	}
	public function guardar()
	{ 
		
		$this->Validar_campos();

		//if ($this->form_validation->run()){		
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
			$file = uniqid();
			$data = $this->do_upload('./uploads/',$file);
			$archivo = $data['file_name'];
			$data =array('ejem_titulo'=>$ejem_titulo, 
						 'ejem_editorial'=>$ejem_editorial,
						 'ejem_paginas'=>$ejem_paginas,
						 'ejem_idioma'=>$ejem_idioma,
						 'ejem_audio'=>$archivo,
						 'ejem_resumen'=>$ejem_resumen,
						 'ejem_tipo_id'=>$ejem_tipo_id,
						 'ejem_cate_id'=>$ejem_cate_id,
						 'ejem_anio'=>$ejem_anio
					);
				$this->model_ejemplar->guardar($data);
				redirect('ejemplar');
			/*}
			else{
					$this->novalida2();
				}*/
			
		}
	
	public function edit($ejem_id)
   {
       $ejem = $this->db->get_where('ejemplar1', array('ejem_id' => $ejem_id))->row();
	   $this->load->view('includes/header');

	   $this->load->helper('form');
		$this->load->model('Model_ejemplar');
		$opciones=$this->Model_ejemplar->getCategorias();
		$data['ejem']= $ejem;
		$data['opciones'] = $opciones; 
       $this->load->view('ejemplares/edit',$data);
       $this->load->view('includes/footer');   
   }
   public function update($ejem_id)
   {
	   
	$this->load->model('model_ejemplar');
	   $ejem = new Model_ejemplar;
	   $this->Validar_campos();
	   $file = uniqid();
	   $data = $this->do_upload('./uploads/',$file);
	   $archivo = $data['file_name'];
	   $data=array(
		'ejem_titulo' => $this->input->post('ejem_titulo'),
		'ejem_editorial' => $this->input->post('ejem_editorial'),
		'ejem_paginas' => $this->input->post('ejem_paginas'),
		'ejem_idioma' => $this->input->post('ejem_idioma'),
		'ejem_audio' => $archivo,
		'ejem_resumen' => $this->input->post('ejem_resumen'), 
		'ejem_tipo_id' => $this->input->post('ejem_tipo_id'), 
		'ejem_cate_id' => $this->input->post('ejem_cate_id'),
		'ejem_anio' => $this->input->post('ejem_anio'),
	);
	  // if ($this->form_validation->run()){
       $this->model_ejemplar-> update_ejem($ejem_id,$data);
	   redirect(base_url('ejemplar'));

	  /* }
	   else{
		$this->novalida2();
	}*/
		
   }
   public function delete($ejem_id)
   {
       $this->db->where('ejem_id', $ejem_id);
       $this->db->delete('ejemplar1');
       redirect(base_url('ejemplar'));
   }
   
}
