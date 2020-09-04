<?php
class Model_ejemplar extends CI_Model {
        public function __construct(){
            parent::__construct();
        }
        function getCategorias(){
            $rows = $this->db->query('SELECT * FROM categoria')->result();
            $opciones = array();
            foreach($rows as $row){
                $opciones[$row->cate_id]=$row->cate_nombre;
            }
            return $opciones;
        }
        
        public function consultar()
{            $query = $this->db->get('ejemplar1', 10);
        return $query->result();
}
        public function guardar($data){
        
         $this->db->insert('ejemplar1',$data);
         
        }
        public function update_ejem($ejem_id) 
    {
        $data=array(
            'ejem_titulo' => $this->input->post('ejem_titulo'),
            'ejem_editorial' => $this->input->post('ejem_editorial'),
            'ejem_paginas' => $this->input->post('ejem_paginas'),
            'ejem_idioma' => $this->input->post('ejem_idioma'),
            'ejem_audio' => $this->input->post('ejem_audio'),
            'ejem_resumen' => $this->input->post('ejem_resumen'), 
            'ejem_tipo_id' => $this->input->post('ejem_tipo_id'), 
            'ejem_cate_id' => $this->input->post('ejem_cate_id'),
            'ejem_anio' => $this->input->post('ejem_anio'),
        );
        if($ejem_id==0){
            return $this->db->insert('ejemplar1',$data);
        }
        else{
            $this->db->where('ejem_id',$ejem_id);
            return $this->db->update('ejemplar1',$data);
        }        
    }
}
?>