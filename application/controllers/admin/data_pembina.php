<?php

class data_pembina extends CI_Controller{

    public function index()
    {
        $data['pembina'] = $this->model_pembina->tampil_data()->result();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/pembina', $data);
       $this->load->view('templates_admin/footer');
    }

    public function tambah_pembina(){
		$nama_lengkap		= $this->input->post('nama_pembina');
		$domisili			= $this->input->post('dom_pembina');
		$no_hp				= $this->input->post('nope_pembina');
		$status_pembina 	= $this->input->post('status');
        
		

		$data = array(
			
            'nama_pembina' 		=> $nama_lengkap,
			'dom_pembina' 		=> $domisili,
			'nope_pembina' 		=> $no_hp,
			'status' 			=> $status_pembina 
			
		);
        
    //     echo "<pre>";
		// print_r($data);
		// exit;
        
		$this->db->insert('pembina', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
			  Data berhasil ditambahkan!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>');
		redirect('admin/data_pembina');
        }
    
	public function update(){ 
		$id 	 		= $this->input->post('id_pembina');
		$nama_pembina			= $this->input->post('nama_pembina');
		$status_pembina 	= $this->input->post('status_pembina');
        
		

		$data = array(
            'nama_pembina' 		=> $nama_pembina,
			'status_pembina' 	=> $status_pembina, 
			
		);

		$where = array(
			'id_pmb' => $id 
		);
        $where = array('id_pembina' => $id);
		$this->model_pembina->update_pembina($where,$data, 'pembina');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pembina'); 
	}
	public function detail_pembina($id){
		$data['pembina'] = $this->model_pembina->tampil_data()->result();
		
		$this->load->model('model_pembina');
		$detail_pembina = $this->model_pembina->detail_pembina($id);
		$data['detail_pembina'] = $detail_pembina;
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_pembina' , $data);
		$this->load->view('templates_admin/footer');
	}
}