<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{  
		//$this->load->database();
		$this->load->model('model_usuario');
		$result = $this->model_usuario->consultar();
 
		$datos= array('registro'=>$result);
        $this->load->view('includes/header');
		$this->load->view('usuarios/lusuario',$datos);
		$this->load->view('includes/footer');
	}
	public function crear()
	{    
        $this->load->view('includes/header');
		$this->load->view('usuarios/crear'); 
		$this->load->view('includes/footer');
	}
	public function get_items()
	{
		$draw = intval($this->input->get('draw'));
		$start = intval($this->input->get('start'));
		$length = intval($this->input->get('length'));
		$query = $this->db->get("index");


      $data = [];


      foreach($query->result() as $s) {
           $data[] = array(
                $s->usuario,
				$s->password,
				$s->usua_codigo,
				$s->usua_nombres,
				$s->usua_apellidos,
				$s->usua_direccion,
				$s->usua_email,
				$s->usua_telefono,
				$s->usua_esadmin
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
	public function Validar_campos()
	{
		$this->form_validation->set_rules("usuario", "Usuario", "trim|required|alpha_dash");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		$this->form_validation->set_rules("usua_codigo", "codigo", "trim|required|numeric");
		$this->form_validation->set_rules("usua_nombres", "nombres", "trim|required");
		$this->form_validation->set_rules("usua_apellidos", "apellidos", "trim|required");
		$this->form_validation->set_rules("usua_direccion", "direccion", "trim|required");
		$this->form_validation->set_rules("usua_email", "email", "trim|required|valid_email");
		$this->form_validation->set_rules("usua_telefono", "telefono", "trim|required|numeric|max_length[9]");
		$this->form_validation->set_rules("usua_esadmin", "esadmin", "trim|required");
	}
	public function novalida1()
	{
		$this->load->view('includes/header');
		$this->load->view('usuarios/crear'); 
		$this->load->view('includes/footer');
	}
	public function novalida2()
	{
		$this->load->view('includes/header');
		$this->load->view('usuarios/editar'); 
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
	
		$this->Validar_campos();
		$usuario= $this->input->post('usuario');
		$password= $this->input->post('password');
		$usua_codigo= $this->input->post('usua_codigo');
		$usua_nombres= $this->input->post('usua_nombres');
		$usua_apellidos= $this->input->post('usua_apellidos');
		$usua_direccion= $this->input->post('usua_direccion');
		$usua_email= $this->input->post('usua_email');
		$usua_telefono= $this->input->post('usua_telefono');
		$usua_esadmin= $this->input->post('usua_esadmin');

		$this->load->model('model_usuario');

		if ($this->form_validation->run()){
		$data =array('usuario'=>$usuario, 
				     'password'=>$password,
					 'usua_codigo'=>$usua_codigo,
					 'usua_nombres'=>$usua_nombres,
					 'usua_apellidos'=>$usua_apellidos,
					 'usua_direccion'=>$usua_direccion,
					 'usua_email'=>$usua_email,
					 'usua_telefono'=>$usua_telefono,
					 'usua_esadmin'=>$usua_esadmin
				);
				$this->model_usuario->guardar($data);
				redirect('usuario');
			}
			else{
				$this->novalida1();
			}
	}
	public function editar($usua_id)
   {
       $us = $this->db->get_where('usuario', array('usua_id' => $usua_id))->row();
       $this->load->view('includes/header');
       $this->load->view('usuarios/editar',array('us'=>$us));
       $this->load->view('includes/footer');   
   }
   public function update($usua_id)
   {
	
	$this->load->model('model_usuario');
	   $us = new Model_usuario;
	   $this->Validar_campos();
	   if ($this->form_validation->run()){
       $us->update_us($usua_id);
	   redirect(base_url('usuario'));
	 }
	 else{
		$this->novalida2();
	}
   }
   public function delete($usua_id)
   {
	   $this->db->where('usua_id', $usua_id);
       $this->db->delete('usuario');
       redirect(base_url('usuario'));
   }
   
}