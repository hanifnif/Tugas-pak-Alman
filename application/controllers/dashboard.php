<?php

class Dashboard extends CI_Controller{

    public function index() 
    {
        $data['makanan'] = $this->m_mkn->tampil_data()->result();
        $data['minuman'] = $this->m_minum->tampil_data()->result();
        $data['barang'] = $this->m_brg->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function makanan(){
        $data['makanan'] = $this->m_mkn->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan', $data);
        $this->load->view('templates/footer');
	}

    public function minuman(){
        $data['minuman'] = $this->m_minum->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman', $data);
        $this->load->view('templates/footer');
	}

    public function cemilan(){
        $data['barang'] = $this->m_brg->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cemilan', $data);
        $this->load->view('templates/footer');
	}
}