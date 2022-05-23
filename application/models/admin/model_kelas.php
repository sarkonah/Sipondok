<?php 

class Model_kelas extends CI_Model{
	public function view_kelas(){

		$this->db->select('kelas.*,walikelas.id as walikelas_id, walikelas.walikelas');
		$this->db->from('kelas');
		$this->db->join('walikelas','walikelas.id = kelas.id_walikelas');
		//$this->db->where('id_subevent', $id_subevent);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
        return $query->result();
	}
	public function tampil_data(){
		return $this->db->get('walikelas');
	} 
	
	public function tambah_kelas($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function hapus_kelas($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function list_kelas() {
		$this->db->select('*');
		$this->db->from('kelas');
		//$this->db->where('hak_akses','Penilai');
		$query = $this->db->get();
		return $query->result();
	   }
	   
	// public function edit_kelas($where,$table){
	// 	return $this->db->get_where($table,$where);
	// }
	public function list_nama_walikelas() {
		$this->db->select('*');
		$this->db->from('walikelas');
		//$this->db->where('hak_akses','Penilai');
		$query = $this->db->get();
		return $query->result();
	   }
	public function update_kelas($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>