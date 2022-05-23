<?php

class data_kelas extends CI_Controller
{

    public function index()
    {
        $data['santri'] = $this->model_santri->tampil_data()->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar');
        $this->load->view('guru/kelas',$data);
        $this->load->view('templates_guru/footer');
    }
    public function kelas_guru($id_kelas)
	{
		// $data['list_nominator'] = $this->model_nominator->list_nama_nominator();
		$data['kelas'] = $this->model_kelas_guru->ambil_id_kelas($id_kelas);
		$data['santri'] = $this->model_kelas_guru->ambil_id_kelas($id_kelas);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('guru/kelas', $data);
		$this->load->view('templates_admin/footer');
	}
}