<?php

class Mission extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getDataMission() {
         $arr = $this->db->select("*")->from('mission')->where('mis_active',1)->get()->result();
        return $arr ? $arr : FALSE;
    }
    
}
