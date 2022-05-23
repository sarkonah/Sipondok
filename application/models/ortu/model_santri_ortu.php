<?php 

class Model_santri extends CI_Model{
	
	public function tampil_data(){
		return $this->db->get('santri');
	} 
}