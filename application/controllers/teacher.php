<?php
    class teacher extends CI_Controller{
        function __construct() {
            parent::__construct();
        }
        
       
     public function home(){
         $this->load->view('menuteacher');
     }
     
     public function login(){
         $this->load->view('login_teacher');
         //$this->load->view('navigation_login');
     }
     public function login_system(){ 
        $this->load->model('teachermodel');
        $data=array(
            'username'=> $this->input->post('username'),
            'password'=>  $this->input->post('password'),
            );
        
        print_r($data);
        $query = $this->teachermodel->login($data);
        if (sizeof(!$query)>0){
           $this->session->set_userdata($query);
           //redirect('/student/showrelation/');
           $this->load->view('menuteacher');
          print_r($query);
           }  else {
            redirect('/teacher/login/');
            //echo "login fall";
        }
    }
     
    }
    
    
    
     
    ?>
