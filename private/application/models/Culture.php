<?php

class Culture extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_list_data($limit = null, $offset = null) {
        $this->db->select("*")->from('culture')->where('cul_active',1);
        if (!empty($limit))
            $this->db->limit($limit);
        if (!empty($offset))
            $this->db->offset($offset);
        $arr = $this->db->order_by('culture.cul_date', 'DESC')->get()->result();
        return $arr ? $arr : FALSE;
    }
    
     public function count_culture() {
        $arr = $this->db->select("*")->from('culture')->where('cul_active',1)->count_all_results();
        return $arr ? $arr : FALSE;
    }

}
