<?php

class Partner extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getDataPartner() {
        $arr = $this->db->select("*")->from('partner')->where('par_active',1)->limit(15)->get()->result();
        return $arr ? $arr : FALSE;
    }
    
}
