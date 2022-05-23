<?php

class data_indikator extends CI_Controller{

    public function index()
    {
       $data['mapel'] = $this->model_mapel->tampil_data()->result();
       
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/indikator_rapor', $data);
       $this->load->view('templates_admin/footer');
    }
    public function detail_indikator($id_kelas)
	{
		
		$data['mapel'] = $this->model_detail_indikator->tampil_data()->result();
		$data['kelas'] = $this->model_detail_indikator->ambil_id_kelas($id_kelas);
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_indikator', $data);
		$this->load->view('templates_admin/footer');
	}
    
}