<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('includes/header');
		$this->load->view('menu');
		
		$this->load->view('footer');
	}
	public function confidencial(){
		
		if($this->session->userdata('auth')!=true) die("Acceso denegado");

		$usua_idp = $this->session->userdata('usua_id');
	$data['usuario'] = $this->db->query("SELECT * FROM usuario WHERE usua_id = '{$usua_idp}' ")->row();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('confidencial',$data);
		$this->load->view('footer');
	}

	public function confidencial2(){
		
		if($this->session->userdata('auth')!=true) die("Acceso denegado");
		if($this->session->userdata('usua_id')!=1) die("Acceso denegado");

	$data['usuarios'] = $this->db->query("SELECT * FROM usuario ")->result();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('confidencial2',$data);
		$this->load->view('footer');
	}
	
}
