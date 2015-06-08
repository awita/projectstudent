<?php

//Controller Establishment
class establishment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('establishmodel');
    }

    function home() {
        $this->load->view('home');
        $this->load->view('header');
        $this->load->view('template/navigation');
    }

    public function addformes() {
        $this->load->view('template/header_after');
        $this->load->view('establishment/establishment_formadd');
        $this->load->view('template/controlsidebar');
        $this->load->view('template/footer');
    }

    public function addestablishment() {
        $this->load->model('establishmodel');
        $data = array(
            'name_es' => $this->input->post('name_es'),
            'address_es' => $this->input->post('address_es'),
            'website' => $this->input->post('website'),
            'peple' => $this->input->post('peple'),
            'position' => $this->input->post('position'),
            'email' => $this->input->post('email'),
            'tell_es' => $this->input->post('tell_es'),
            'website' => $this->input->post('website')
        );
        $this->db->insert('establishment', $data);
        $this->showestblis();
    }

    public function addnew() {
        $this->load->model('establishmodel');
        $data['name_es'] = $this->input->post('name_es');
        $this->db->insert('establishment', $data);
    }

    public function showestblis() {

        $this->load->view('template/navigation_after');
        $this->load->model('studentmodel');
        $this->load->model('establishmodel');
        $this->load->session->userdata('user');
        //$user=  $this->session->userdata('user');

        $data['establish'] = $this->studentmodel->showrelation();
        $this->load->view('establishment/showestablish', $data);
    }

    public function showdataestablish() {
        $this->load->model('establishmodel');
        $data['establish'] = $this->establishmodel->showall();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('establishment/showallestablish', $data);
        $this->load->view('template/footer');
    }

    public function update() {
        $id = $this->input->post('id_es');

        $data = array(
            //'id_es' =>  $this->input->post('id_es'),
            'name_es' => $this->input->post('name_es'),
            'address_es' => $this->input->post('address_es'),
            'position' => $this->input->post('position'),
            'peple' => $this->input->post('peple'),
            'tell_es' => $this->input->post('tell_es'),
            'email' => $this->input->post('email')
        );
        $this->establishmodel->update($id, $data);
        $this->load->view('update_es', $data);
    }

    public function deletement($id_es) {
        //public function delete($id_st) {
        if ($this->establishmodel->delete($id_es) == TRUE) {
            $data['result'] = "ลบข้อมูลเรียบร้อยแล้ว";
            //$this->load->view('showall');
        } else {
            $data['result'] = "ไม่สามารถลบข้อมูลได้ค่ะ";
        }
        redirect('/establishment/showestblis/', 'refresh');
    }

    public function getname() {
        $name = $this->input->get('term');

        $this->load->model('establishmodel');
        $data = $this->establishmodel->getestablishbyname($name);
        $json = array();
        foreach ($data as $value) {
            $bus = array(
                'label' => $value['name_es'],
                'value' => $value['name_es'],
                'id' => $value['id_es']
            );
            array_push($json, $bus);
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;

        /*
          $name = $this->input->get('term');
          $json = array();
          for ($i = $name; $i < 10; $i++) {
          $bus = array(
          'lable' => $i,
          'value' => $i . "value",
          'id' => $i . "x"
          );
          array_push($json, $bus);
          }
          echo json_encode($json);

         */
    }

    public function getDetail($id) {
        $id_es = $id;
        $this->load->model('establishmodel');
        $data = $this->establishmodel->getDetail($id_es);

        echo json_encode($data[0]);
    }

    public function add_establish() {
        $id = $user = $this->session->userdata('user');

        $data['id_es'] = $this->input->post('id_es');
        $data['id_st'] = $user['id_st'];
        $data['year'] = date("Y");

        $this->load->model('establishmodel');
        $data = $this->establishmodel->add_idestablish($data);
        //$this->load->view('template/header_after');
    }
    
      public function getditail(){
       
        $this->load->model('establishmodel');
        $user = $this->session->userdata('user');
        
        $st_es =  $this->establishmodel->checkid($user['id_st']);
    }

}

?>
