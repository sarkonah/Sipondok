<?php

class Data_kelas extends CI_Controller{

    public function index()
    {
       $data['walikelas'] = $this->model_kelas->tampil_data()->result();
	   $data['list_kelas']    = $this->model_kelas->list_kelas();
	   $data['list_walikelas']    = $this->model_kelas->list_nama_walikelas();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/kelas', $data);
       $this->load->view('templates_admin/footer');
    }
  
	public function tambah_kelas()
	{
		$idkelas		= $this->input->post('id_kelas');
		$namawalikelas = $this->input->post('nama_walikelas');
		
		


		$data = array(
			'id_kelas'     => $idkelas,
			'nama_walikelas' 	=> $namawalikelas 
			
			
		);

		$this->model_kelas->tambah_kelas($data, 'walikelas');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil ditambahkan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_kelas');
	}
	
    // public function edit($id)
	// { 
	// 	$where = array('id_kelas' =>$id);
	// 	$data['santri'] = $this->model_kelas->edit_kelas($where, 'kelas')->result();
	// 	$this->load->view('templates_admin/header');
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('admin/edit_kelas', $data);
	// 	$this->load->view('templates_admin/footer');

	// }

	public function update_kelas(){ 
		$id 	 		= $this->input->post('id_kelas');
		$nama_walikelas 			= $this->input->post('nama_walikelas');
		
		

		$data = array(
            'id_kelas' 		=> $id,
			'nama_walikelas' 	=> $nama_walikelas
       
			
		);

		$where = array(
			'id_kls' => $id 
		);
        $where = array('id_kelas' => $id);
		$this->model_kelas->update_kelas($where,$data, 'walikelas');
		$this->session->set_flashdata('pesan_santri','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_kelas'); 
	}
	
	public function hapus_kelas($id_walikelas){
		$where = array('id_walikelas'=>$id_walikelas);
		$this->db->delete('walikelas', $where);
		$this->session->set_flashdata('pesan_santri','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_kelas');
	}
}
?>