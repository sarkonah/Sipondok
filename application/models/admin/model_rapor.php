<?php

class Model_rapor extends CI_Model{
    public function tampil_data(){
		return $this->db->get('santri');
	} 
	public function detail_indikator($id = NULL){
		$query = $this->db->get_where('mapel', array('id_kelas' => $id))->row();
		return $query;
	}
}