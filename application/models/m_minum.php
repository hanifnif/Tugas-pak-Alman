<?php

class M_minum extends CI_Model {
    
    public function tampil_data()
    {
        return $this->db->get('tb_minuman');
    }
}