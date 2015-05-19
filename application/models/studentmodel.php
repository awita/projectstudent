<?php

class studentmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function showall() {
        $query = $this->db->get('student');
        return $query->result_array();
    }

    function showdetail($id_st) {
        $this->db->where('id_st', $id_st);
        $query = $this->db->get('student');
        return $query->result_array();
    }
    
    function showrelation1(){
        
       $this->db->select("*");
       $query =  $this->db->get('student_establish_view');
       return $query->result_array();
       
       
    }
    function showrelation($id_st) {
       $this->db->where('student.id_st',$id_st);
        $this->db->select("*");
        $this->db->from("student_establish");
        $this->db->join("student", "student.id_st= student_establish.id_st");
        $this->db->join("establishment", "establishment.id_es = student_establish.id_es");
        echo $this->db->last_query(); 
        $query = $this->db->get();
        return $query->result_array();
    }

    function addstudent($data) {
        $this->db->insert('student', $data);
    }
      
    
    function delete($id_st) {
        $this->db->delete('student', array('id_st' => $id_st));
    }

 

    public function add_detail($data) {
        $this->db->insert('student_establish', $data);
    }

    ///////////////loginsystem///////////////////
    
    public function login($data) {
        $id_st=$data['id_st'];
        $password=$data['password'];
        $this -> db -> where('id_st', $id_st);
        $this -> db -> where('pass', MD5($password));            
        $query = $this->db->get('student');
        return $query->result_array();
 
        
    }


}

?>   