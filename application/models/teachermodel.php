<?php
    class teachermodel extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        
        public function showdata(){
            $this->load->db->get('teacher');
            return $query->return();
        }

        public function addteacher($data){
            $this->load->db->get('teacher');
        }
        
        public function login($data){
        $username=$data['username'];
        $password=$data['password'];
        $this -> db -> select('id_teacher, username, password');
        $this -> db -> from('teacher');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', MD5($password));
        $query = $this->db->get();
        return $query->result_array();
    }
    }
?>