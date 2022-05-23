<?php

class Data_rapor extends CI_Controller
{

    public function index()
    {
        $data['rapor'] = $this->model_rapor->tampil_data()->result();
        // echo "<pre>";
        // print_r($data);
        // exit;
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rapor', $data);
        $this->load->view('templates_admin/footer');
    }
    
}