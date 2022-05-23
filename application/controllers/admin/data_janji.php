<?php

class Data_janji extends CI_Controller{

    public function index()
    {
       $data['walikelas'] = $this->model_janji->tampil_data()->result();
      
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/janji_temu', $data);
       $this->load->view('templates_admin/footer');
    }
}