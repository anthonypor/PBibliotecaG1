<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ejemplar extends CI_Controller {
   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('EjemplarModel');         
   }
   public function index()
   {
       $ejemplar=new EjemplarModel;
       $data['data']=$ejemplar->get_ejemplar();
       $this->load->view('includes/header');       
       $this->load->view('ejemplar/list',$data);
       $this->load->view('includes/footer');
   }
   public function create()
   {
      $this->load->view('includes/header');
      $this->load->view('ejemplar/create');
      $this->load->view('includes/footer');      
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $ejemplar=new EjemplarModel;
       $ejemplar->insert_ejem();
       redirect(base_url('ejemplar'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($ejem_id)
   {
       $ejem = $this->db->get_where('ejemplar', array('ejem_id' => $ejem_id))->row();
       $this->load->view('includes/header');
       $this->load->view('ejemplar/edit',array('ejem'=>$ejem));
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($ejem_id)
   {
       $ejemplar=new EjemplarModel;
       $ejemplar->update_ejem($ejem_id);
       redirect(base_url('edit'));
   }
   public function delete($ejem_id)
   {
       $this->db->where('ejem_id', $ejem_id); 
       $this->db->delete('ejemplar');
       redirect(base_url('ejemplar'));
   }
}