<?php

class M_mkn extends CI_Model {
    
    public function tampil_data()
    {
        return $this->db->get('tb_makanan');
    }
}