<?php
class Model_ejemplar extends CI_Model {

        public function consultar()
{
        $query = $this->db->get('ejemplar', 10);
        return $query->result();
}
        public function guardar($data){
        
         $this->db->insert('ejemplar',$data);
         
        }
        public function update_person($id_ejem) 
    {
        $data=array(
            'nombres' => $this->input->post('nombres'),
            'apellidos'=> $this->input->post('apellidos'),
            'edad'=> $this->input->post('edad'),
            'email'=> $this->input->post('email'),
            'direccion'=> $this->input->post('direccion')
        );
        if($id==0){
            return $this->db->insert('ejemplar',$data);
        }
        else{
            $this->db->where('id_ejem',$id_ejem);
            return $this->db->update('ejemplar',$data);
        }        
    }
}