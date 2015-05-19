<?php

class Studentci extends CI_Controller{
    
    public function  index()
    {
        echo "Hello Mycontroller";
    }
    
    public function callview()
    {
        $data['detail'] = 'mydata';
        $data['info'] ='Hello';
        $this->load->view('Myview.php',$data);
    }
}

?>
