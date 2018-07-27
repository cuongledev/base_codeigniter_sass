<?php

class Content extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getDataContent() {
         $arr = $this->db->select("*")->from('aboutus')->get()->result();
        return $arr ? $arr : FALSE;
    }
    
}
