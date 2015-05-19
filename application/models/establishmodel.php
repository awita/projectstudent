<?php

class establishmodel extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    
   
            
    function add($data)
    {
        $this->db->insert('establishment',$data); 
     }
     
    function delete($id_es) {
        //$this->db->where('id_es', $id_es);
        //$this->db->delete('establishment'); 
        $this->db->delete('establishment', array('id_es' => $id_es));
        //$this->db->delete('establishment', array('id_es' => $id_es));
        
        //echo $id_es;
    }
    
    function update($id_es,$data){
        /*$this->db->select('*');
        $this->db->from('establishmodel');
        $this->db->where('id_es', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;*/
        $this->db->where('id_es', $id_es);
        $this->db->update('establishment', $data); 
    }

    public function getestablishment($id) {
        $this->db->where('id_es', $id);
        return $this->db->get('establishment');
    }
    
     function showall()
    {
        
        $query = $this->db->get('establishment');
        return $query->result_array();
        
    }
    /*public function search($keyword){
        $this->select('id_es,name_es');
        $this->db->like('name_es',$keyword);
        $query = $this->db->get('establishment');
        return $query->result();
    }*/
    
    function search($searchdata)
    {
        
        $this->db->like('name_es',$searchdata);
         
        $query  =   $this->db->get('establishment');
        return $query->result();
    
    }
    
    
}
?>