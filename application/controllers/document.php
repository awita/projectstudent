<?php 
class document extends CI_Controller{
     function __construct() {
        parent::__construct();
        //$this->load->model('documentmodel');
        $this->load->model('studentmodel');
        
    }
    public function menudocument(){
        $user = $this->session->userdata('user');
        $this->load->view('template/header_after',$user);
        
        $this->load->view('document/menudocument');
    }
    
    public function document_num1(){
        $user = $this->session->userdata('user');
        $this->load->view('template/header_after',$user);
        $data['userdata'] = $this->load->studentmodel->showrelationview($user['id_st']);
        //print_r($data);
        $this->load->view('document/document_form1',$data);
    }
    public function adddocument_num1(){
        
    }
    
}

?>