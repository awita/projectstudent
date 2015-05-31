<?php

session_start();

class student extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('studentmodel');
        //$this->load->view('form_addst');
        //$this->load->model('esthblishmodel');
        //$this->load->view("form_addst.php",$data);
    }

    // **********functionstudent add************//
    public function home() {
        $this->load->view('template/header');
        $this->load->view('template/index');
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
        //$this->load->view('home');
        //$this->load->view('template/navigation');
    }

    public function addform() {
        $this->load->view('template/header');
        $this->load->view("student/formpage_st.php");
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
    }

    public function addstudent() {
        // $this->load->view("form_addst.php");
        $this->load->model('studentmodel');
        $data = array(
            'id_st' => $this->input->post('id_st'),
            'term' => $this->input->post('term'),
            'year' => $this->input->post('year'),
            'major' => $this->input->post('major'),
            'gender' => $this->input->post('gender'),
            'name_st' => $this->input->post('name_st'),
            'lastname_st' => $this->input->post('lastname_st'),
            'tell_st' => $this->input->post('tell_st'),
            'email' => $this->input->post('email'),
            'name_pr' => $this->input->post('name_pr'),
            'relation' => $this->input->post('relation'),
            'tell_pr' => $this->input->post('tell_pr'),
            'pass' => md5($this->input->post('pass'))
        );
        //print_r($data);

        if ($this->studentmodel->addstudent($data) == TRUE) {
            $data['result'] = " เพิ่มข้อมูลเรียบร้อยแล้ว ";
            //redirect('/student/showall/', 'refresh');
        } else {
            $data['result'] = " ไม่สามารถเพิ่มข้อมูลได้";
        }
        $this->showall();
    }

    public function detailadd() {

        $data = array(
            'id_st' => $this->input->post('idstudent'),
            'id_es' => $this->input->post('estabishlist'),
            'year' => $this->input->post('year')
        );
        //print_r($data);
        $this->studentmodel->add_detail($data);
        $this->showrelation();
    }

    //*********function update datastudent*************//

    public function update() {
        //$this->load->studentmodel('update');

        $data = array(
            'id_st' => $this->input->post('id_st'),
            'term' => $this->input->post('term'),
            'year' => $this->input->post('year'),
            'major' => $this->input->post('major'),
            'gender' => $this->input->post('gender'),
            'name_st' => $this->input->post('name_st'),
            'lastname_st' => $this->input->post('lastname_st'),
            'tell_st' => $this->input->post('tell_st'),
            'email' => $this->input->post('email'),
            'name_pr' => $this->input->post('name_pr'),
            'relation' => $this->input->post('relation'),
            'tell_pr' => $this->input->post('tell_pr'),
            'pass' => $this->input->post('pass')
        );
        $this->studentmodel->update($id, $data);
        $this->show();
    }

    //**************function showdatastudent****************//

    public function showall() {
        //$this->load->view('template/navigation');
        $this->load->model('studentmodel');
        //$data['query']=$this->studentmodel->showall();
        $data['query'] = $this->studentmodel->showall();
        $this->load->view('student/showall', $data);
        //$this->load->model('studentmodel');
    }

    public function showdetail() {
        $this->load->view('template/header_after');
        $this->load->view('template/controlsidebar');
        $this->load->model('studentmodel');
        $this->load->model('establishmodel');
        $user = $this->session->userdata('user');


        $data['student'] = $this->studentmodel->showdetail($user['id_st']);
        $establish = $this->establishmodel->showall();
        $name_establis = array();
        foreach ($establish as $row) {
            $name_establis[$row['id_es']] = $row['name_es'];
        }

        $data['establish'] = $name_establis;

        $this->load->view('student/add_establish', $data);
        $this->load->view('template/footer');
        
    }

    /* ----- select data student is com-sci */

    public function showrelation() {

        $this->load->model('studentmodel');
        $data['student'] = $this->studentmodel->showrelation();
        $this->load->view('template/header');
        $this->load->view('student/showallstudent', $data);
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
    }

    public function showdata_it() {
        $this->load->model('studentmodel');
        $data['student'] = $this->studentmodel->showrelationshow_it();
        $this->load->view('template/header');
        $this->load->view('student/showstudent_it', $data);
        $this->load->view('template/footer');
        $this->load->view('template/sidebar');
    }

    public function datastudent() {
        $this->load->view('template/header_after');
        $this->load->model('studentmodel');
        //$user=$this->session->set_userdata('user');
        $user = $this->session->userdata('user');
        $data['student_es'] = $this->studentmodel->showrelationview($user['id_st']);
        $data['user'] = $user;
        $this->load->view('student/showdetail', $data);
        $this->load->view('template/controlsidebar');
        $this->load->view('template/footer');
    }

    //*************function delete datastudent***************8//

    public function delete($id_st) {
        if ($this->studentmodel->delete($id_st) == TRUE) {
            $data['result'] = "ลบข้อมูลเรียบร้อยแล้ว";
        } else {
            $data['result'] = "ไม่สามารถลบข้อมูลได้ค่ะ";
        }
        redirect('/student/showall/', 'refresh');
    }

//***************login********************//

    public function login() {
        //$data['menu1'] = "memmu";
        $this->load->view('template/header');
        $this->load->view('student/login_student');
       
        //$this->load->view('template/navigation_login', $data);
    }

    public function login_system() {
        $this->load->model('studentmodel');
        $data = array(
            'id_st' => $this->input->post('id_st'),
            'password' => $this->input->post('pass'),
        );
        //$this->session->set_userdata($datauser);


        $query = $this->studentmodel->login($data);
        if (sizeof($query) > 0) {
            //$this->session->set_userdata($query);
            //
           $datauser = $query[0];
           $this->session->set_userdata('user', $datauser);
           $this->load->view('template/header_after');
           $this->load->view('student/menustudent');
          
            //print_r($datauser);
        } else {
            redirect('/student/login/');
            //print_r($data);
        }
    }

    public function logout() {

        $this->session->unset_userdata($query);
        session_destroy();
        redirect('student/home');
    }
    
    public function menu(){
        $user = $this->session->userdata('user');
        $data['student'] = $this->studentmodel->showrelationview($user['id_st']);
               
        $this->load->view('template/header_after',$data);
        $this->load->view('student/menustudent');
        //print_r($data);
        
        
        
    }
    //*************login สำหรับอาจารย์**************//

    /*
      public function login_teacher(){
      $data['menu1']="memmu";
      $this->load->view('login_teacher');
      $this->load->view('navigation_login',$data);
      //$this->load->teacher->login_system();


      }

      public function system_teacher()
      {
      $this->load->library('session');
      $this->load->view('navigation_after');
      $this->load->model('teachermodel');

      $data=array(
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'));
      print_r($data);
      $query=  $this->teachermodel->login($data);
      $this->session->set_userdata($query);
      //$userid = $this->user_model->attemptLogin($username, $pass);
      if(sizeof($query)>0)
      {

      $this->load->view('menuteacher',$query);
      }
      else
      {
      $this->session->set_userdata($query);
      redirect('/student/login_teacher/');
      }
      /*
      if(sizeof($query)>0){
      //$this->session->set_userdata($query);
      $this->load->view('menuteacher',$query);
      }
      else {
      redirect('/student/login_teacher/');
      //echo "login fall";
      }


      }
     * 
     */
}
?>

