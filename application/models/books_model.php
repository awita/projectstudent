<?php
class boos_model extends CI_Model{
    
    public function __construct(){
     parent::__construct();

}

function get($id){

  $this->load->database();

  $query = $this->db->getwhere('books',array('id'=>$id));

  return $query->row_array();        

}
}