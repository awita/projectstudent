<?php

class document extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('documentmodel');
        $this->load->model('studentmodel');

        
    }

    public function menudocument() {
        $user = $this->session->userdata('user');
        $this->load->view('template/header_after', $user);

        $this->load->view('document/menudocument');
    }

    public function chackshowdata() {
        
        $this->load->model('documentmodel');
        $user = $this->session->userdata('user');
        $data['userdata'] = $this->documentmodel->showuserdata($user['id_st']);
       
        
        if ($data['userdata']==null) {
            $this->document_num1();
        } else {
            
            $this->showdata_form1();
        }
    }

    public function document_num1() {
        $user = $this->session->userdata('user');
        $this->load->view('template/header_after', $user);
        $data['userdata'] = $this->load->studentmodel->showrelationview($user['id_st']);
        
        $this->load->view('document/document_form1', $data);
     
    }

    public function adddocument_num1() {

        $this->load->model('documentmodel');
        $user = $this->session->userdata('user');

        $data = array(
            'number' => $this->input->post('number'),
            'road' => $this->input->post('road'),
            'alley' => $this->input->post('alley'),
            'district' => $this->input->post('district'),
            'county' => $this->input->post('county'),
            'city' => $this->input->post('city'),
            'postcode' => $this->input->post('postcode'),
            'phone' => $this->input->post('phone'),
            'fax' => $this->input->post('fax'),
            'name_contact' => $this->input->post('name_contact'),
            'lastname_contact' => $this->input->post('lastname_contact'),
            'number_contact' => $this->input->post('number_contact'),
            'road_contact' => $this->input->post('road_contact'),
            'alley_contact' => $this->input->post('alley_contact'),
            'district_contact' => $this->input->post('district_contact'),
            'county_contact' => $this->input->post('county_contact'),
            'city_contact' => $this->input->post('city'),
            'postcode_contact' => $this->input->post('postcode_contact'),
            'phone_contact' => $this->input->post('phone_contact'),
            'fax_contact' => $this->input->post('fax_contact'),
        );
        $data['id_st'] = $user['id_st'];
        //print_r($data);
        $this->documentmodel->insertdata($data);
        $this->showdata_form1();
    }

    public function showdata_form1() {
        $this->load->model('documentmodel');
        $user = $this->session->userdata('user');
        $this->load->view('template/header_after', $user);

        //print_r($user);
        $data['userdata'] = $this->documentmodel->showuserdata($user['id_st']);
        //print_r($data);
        $this->load->view('document/showdata_form1', $data);
    }
    


}

?>