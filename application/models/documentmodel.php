<?php

class documentmodel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function insertdata($data) {
        $this->db->insert('document_one', $data);
    }

    public function showdata() {
        $query = $this->db->get('document_one');
        return $query->result_array();
    }

}

?>
