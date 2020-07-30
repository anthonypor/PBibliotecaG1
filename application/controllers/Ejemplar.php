<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar extends CI_Controller {

	public function index()
	{  
		//$this->load->database();
		$this->load->model('model_personas');
		$result = $this->model_personas->consultar();

		$datos= array('registros'=>$result);
        $this->load->view('header');
		$this->load->view('personas/lista',$datos);
		$this->load->view('footer');
	}
	public function formulario()
	{    
        $this->load->view('header');
		$this->load->view('personas/formulario'); 
		$this->load->view('footer');
	}
	public function guardar()
	{
		$nombres= $this->input->post('nombres');
		$apellidos= $this->input->post('apellidos');
		$edad= $this->input->post('edad');
		$email= $this->input->post('email');
		$direccion= $this->input->post('direccion');

		$this->load->model('model_personas');
		$data =array('nombres'=>$nombres, 
				     'apellidos'=>$apellidos,
					 'edad'=>$edad,
					 'email'=>$email,
					 'direccion'=>$direccion
				);
				$this->model_personas->guardar($data);
				redirect('personas');
	}
	public function edit($id)
   {
       $person = $this->db->get_where('persona', array('id' => $id))->row();
       $this->load->view('header');
       $this->load->view('personas/edit',array('person'=>$person));
       $this->load->view('footer');   
   }
   public function update($id)
   {
       $persona = new Model_personas;
       $persona->update_person($id);
       redirect(base_url('personas'));
   }
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('persona');
       redirect(base_url('personas'));
   }
   
}