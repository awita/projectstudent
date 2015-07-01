<?php

class documentmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertdata($data) {
        $this->db->insert('document_one', $data);
    }

    public function showuserdata($id_st) {
        $this->db->where('document_one.id_st', $id_st);
        $this->db->select("*");
        $this->db->from("document_one");
        $this->db->join("student_establish", "document_one.id_st= student_establish.id_st", "left");
        $this->db->join("student", "student.id_st= student_establish.id_st");
        $this->db->join("establishment", "establishment.id_es = student_establish.id_es");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function showdatadocument($id_st) {
        $this->db->where('document_one.id_st', $id_st);
        $query = $this->db->get('document_one');

        return $query->result_array();
    }

}

?>
