<?php

class establishmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function add($data) {
        $this->db->insert('establishment', $data);
    }

    function delete($id_es) {
        $this->db->delete('establishment', array('id_es' => $id_es));
    }

    /*
      function update($id_es,$data){
      $this->db->where('id_es', $id_es);
      $this->db->update('establishment', $data);
      } */

    public function getestablishment($id) {
        $this->db->where('id_es', $id);
        return $this->db->get('establishment');
    }

    function showall() {
        $query = $this->db->get('establishment');
        return $query->result_array();
    }

    public function showalldata($id_es) {
        $this->db->where('id_es', $id_es);
        return $this->db->get('establishment');
    }

    public function getestablishbyname($name) {
        $this->db->like('name_es', $name);
        $query = $this->db->get('establishment');

        return $query->result_array();
    }

    public function getDetail($id_es) {
        $this->db->where('id_es', $id_es);
        $query = $this->db->get('establishment');
        return $query->result_array();
    }

    public function add_idestablish($data) {
        $this->db->insert('student_establish', $data);
    }

    public function checkid($id_st) {
        $this->db->select('*');
        $this->db->where('id_st', $id_st);
        $query = $this->db->get('student_establish_view');
        return $query->result_array();
    }

    function showdata($id_st) {
        $this->db->where('student.id_st', $id_st);
        $this->db->select("*");
        $this->db->from("student_establish");
        $this->db->join("student", "student.id_st= student_establish.id_st");
        $this->db->join("establishment", "establishment.id_es = student_establish.id_es");
        $query = $this->db->get();
        return $query->result_array();
    }

    /*
      function search($searchdata)
      {
      $this->db->like('name_es',$searchdata);

      $query=$this->db->get('establishment');
      return $query->result();

      }
     */
}

?>