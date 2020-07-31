<?php
class Model_usuario extends CI_Model {

        public function consultar()
{
        $query = $this->db->get('usuario', 10);
        return $query->result();
}
        public function guardar($data){
        
         $this->db->insert('usuario',$data);
         
        }
        public function update_us($usua_id) 
    {
        $data=array(
            'usuario' => $this->input->post('usuario'),
            'password' => $this->input->post('password'),
            'usua_codigo' => $this->input->post('usua_codigo'),
            'usua_nombres' => $this->input->post('usua_nombres'),
            'usua_apellidos' => $this->input->post('usua_apellidos'),
            'usua_direccion' => $this->input->post('usua_direccion'),
            'usua_email' => $this->input->post('usua_email'),
            'usua_telefono' => $this->input->post('usua_telefono'),
            'usua_esadmin' => $this->input->post('usua_esadmin'),
        );
        if($usua_id==0){
            return $this->db->insert('usuario',$data);
        }
        else{
            $this->db->where('usua_id',$usua_id);
            return $this->db->update('usuario',$data);
        }        
    }
}