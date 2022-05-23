<?php

class Model_janji extends CI_Model{
    public function tampil_data(){
    return $this->db->get('walikelas');
    }
}
?>