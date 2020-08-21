<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function index()
	{  
		//$this->load->database();
		$this->load->model('model_categoria');
		$result = $this->model_categoria->consultar();

		$datos= array('register'=>$result);
        $this->load->view('includes/header');
		$this->load->view('categorias/lista_cat',$datos);
		$this->load->view('includes/footer');
	}
	public function create()
	{    
        $this->load->view('includes/header');
		$this->load->view('categorias/create'); 
		$this->load->view('includes/footer');
	}

	public function Validar_campos()
	{
		$this->form_validation->set_rules("cate_nombre", "Categoria", "trim|required|alpha_numeric_spaces");
	}
	public function novalida1()
	{
		$this->load->view('includes/header');
		$this->load->view('categorias/create'); 
		$this->load->view('includes/footer');
	}
	public function novalida2()
	{
		$this->load->view('includes/header');
		$this->load->view('categorias/edit'); 
		$this->load->view('includes/footer');
	}

	public function guardar()
	{
		$this->Validar_campos();
		
			$cate_nombre= $this->input->post('cate_nombre');
		
		$this->load->model('model_categoria');
		$data =array('cate_nombre'=>$cate_nombre);
		if ($this->form_validation->run()){
			$this->model_categoria->guardar($data);
			redirect('categoria');
		}
		else{
			$this->novalida1();
		}	
	}
	public function edit($cate_id)
   {
       $cat = $this->db->get_where('categoria', array('cate_id' => $cate_id))->row();
       $this->load->view('includes/header');
       $this->load->view('categorias/edit',array('cat'=>$cat));
       $this->load->view('includes/footer');   
   }
   public function update($cate_id)
   {
	$this->Validar_campos();

	$this->load->model('model_categoria');
	   
	   
	   //if ($this->form_validation->run()){
		   $cat = new Model_categoria;
       $cat->update_cat($cate_id);
	   redirect(base_url('categoria'));
	/*}
	else{
		$this->novalida2();
	}*/
   }

   public function delete($cate_id)
   {
       $this->db->where('cate_id', $cate_id);
       $this->db->delete('categoria');
       redirect(base_url('categoria'));
   }
   
}