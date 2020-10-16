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
        public function update_ejem($ejem_id,$data) 
    {
        
        
            $this->db->where('ejem_id',$ejem_id);
           $this->db->update('ejemplar1',$data);
                
    }
}
?>