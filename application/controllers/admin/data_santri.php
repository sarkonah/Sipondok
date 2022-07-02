<?php

class Data_santri extends CI_Controller
{

	public function index()
	{
		$data['santri'] = $this->model_santri->tampil_data()->result();
		$data['list_kelas']    = $this->model_kelas->list_kelas();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/santri', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_santri()
	{
		$nama_santri 	= $this->input->post('nama_santri');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('gender');
		$status_santri	= $this->input->post('status_santri');
		$alamat			= $this->input->post('alamat');
		$nama_ayah		= $this->input->post('nama_ayah');
		// $no_hp_ayah		= $this->input->post('nope_ayah');
		$nama_ibu		= $this->input->post('nama_ayah');
		// $no_hp_ibu		= $this->input->post('nope_ibu');
		$no_hp_ortu	= $this->input->post('nope_ortu');
		$tanggal_masuk_pondok		= $this->input->post('tgl_masuk');

		$data = array(
			'nama_ayah'			=> $nama_ayah,
			// 'nope_ayah' 		=> $no_hp_ayah,
			'nama_ibu'			=> $nama_ibu,
			// 'nope_ibu' 			=> $no_hp_ibu,
			'nope_ortu'			=> $no_hp_ortu,
		);
		$this->db->insert('ortu', $data);
		$id_ortu = $this->db->insert_id();

		$data = array(
			'id_ortu' 			=> $id_ortu,
			'nama_santri' 		=> $nama_santri,
			'tempat_lahir' 		=> $tempat_lahir,
			'tanggal_lahir'		=> $tanggal_lahir,
			'gender'			=> $jenis_kelamin,
			'status_santri' 	=> $status_santri,
			'alamat' 			=> $alamat,
			'tgl_masuk' 		=> $tanggal_masuk_pondok
		);

		// echo "<pre>";
		// print_r($data);
		// exit;
		$this->db->insert('santri', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
			  Data berhasil ditambahkan!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>');
		redirect('admin/data_santri');
	}

	//public function edit($id)
	//{
	//	$where = array('id_santri' => $id);
	//	$data['santri'] = $this->model_santri->edit_santri($where, 'santri')->result();
	//	$this->load->view('templates_admin/header');
	//	$this->load->view('templates_admin/sidebar');
	//	$this->load->view('admin/edit_santri');
	//	$this->load->view('templates_admin/footer');
	//}

	public function update_santri()
	{
		$id_santri 	 	= $this->input->post('id_santri');
		$nis_santri	    = $this->input->post('nis_santri');
		$nama_santri 	= $this->input->post('nama_santri');
		$kelas_santri	= $this->input->post('id_kelas');
		$status_santri	= $this->input->post('status_santri');
		$tanggal_masuk  	= $this->input->post('tgl_masuk');


		$data = array(
			'id_santri' 		=> $id_santri,
			'nis_santri' 		=> $nis_santri,
			'nama_santri' 		=> $nama_santri,
			'id_kelas' 		=> $kelas_santri,
			'status_santri' 	=> $status_santri,
			'tgl_masuk' 		=> $tanggal_masuk

		);

		$where = array(
			'id_santri' => $id_santri
		);

		$this->model_santri->update_santri($where,$data, 'santri');
		$this->session->set_flashdata('popup_santri', '<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_santri');
	}
	public function detail_santri($id){
		$data['santri'] = $this->model_santri->tampil_data()->result();
		
		$this->load->model('model_santri');
		$detail_santri = $this->model_santri->detail_santri($id);
		$data['detail_santri'] = $detail_santri;
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_santri' , $data);
		$this->load->view('templates_admin/footer');
	}
}