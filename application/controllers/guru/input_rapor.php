<?php

class input_rapor extends CI_Controller{
    public function index()
    {
        $data['mapel'] = $this->model_input_rapor->tampil_data()->result();
        $data['santri'] = $this->model_santri->tampil_data()->result();
       $this->load->view('templates_guru/header');
       $this->load->view('templates_guru/sidebar');
       $this->load->view('guru/input_rapor', $data);
       $this->load->view('templates_guru/footer');
    }
    public function update_input_rapor(){ 
        $id_mapel 	 		= $this->input->post('id_mapel');
        $nilai 	= $this->input->post('nilai');
       
        $data = array(
        'id_mapel' => $id_mapel,
        'nilai' => $nilai
        
        );
    
        
    
        $this->model_input_rapor->update_input_rapor($data, 'mapel');
        $this->session->set_flashdata('popup_user','<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
              Data berhasil diupdate!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('guru/kelas'); 
      }
}