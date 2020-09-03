<?php
class Model_categoria extends CI_Model {

    function foredit(){
        return $this->db->query('SELECT * FROM ejemplar1,categoria WHERE ejem_cate_id=cate_id')->result();
    }
        public function consultar()
{
        $query = $this->db->get('categoria', 10);
        return $query->result();
}
        public function guardar($data){
         $this->db->insert('categoria',$data);
         
        }
        public function update_cat($cate_id) 
    {
        $data=array(
            'cate_nombre' => $this->input->post('cate_nombre'),
        );
        if($cate_id==0){
            return $this->db->insert('categoria',$data);
        }
        else{
            $this->db->where('cate_id',$cate_id);
            return $this->db->update('categoria',$data);
        }        
    }
}