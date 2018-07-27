<?php

class Recruitment extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_list_data_recruitment($limit = null, $offset = null) {
        
        $this->db->select("*")->from('recruitment')->where('rec_active',1);
        if (!empty($limit))
            $this->db->limit($limit);
        if (!empty($offset)){
            $this->db->offset($offset);
        }
            
        $data = $this->db->order_by('recruitment.rec_date', 'DESC')->get()->result();
        
        return $data ? $data : FALSE;
    }
    
     public function count_recruitment() {
        $arr = $this->db->select("*")->from('recruitment')->count_all_results();
        return $arr ? $arr : FALSE;
    }

    public function get_list_data_cate_recruitment() {
        $data = $this->db->query('SELECT * FROM categories WHERE cat_type = "recruitment" and cat_active = 1 order by cat_order ASC')->result();
        return $data ? $data : FALSE;
    }
	public function getDataDetailRecruitment($id) {
    	$this->db->where('rec_id',$id);
    	return $this->db->get('recruitment')->row_array();
		//$data = $this->db->query('SELECT * FROM categories WHERE cat_type = "recruitment" and cat_active = 1 order by cat_order ASC')->result();
		//return $data ? $data : FALSE;
	}
    
    public function get_list_data_recruitment_detail($cate_id,$limit = null, $offset = null) {
        $this->db->select("*")->from('recruitment')->where('rec_cat_id', $cate_id);
        if (!empty($limit))
            $this->db->limit($limit);
        if (!empty($offset)){
            $this->db->offset($offset);
        }
        $arr = $this->db->order_by('recruitment.rec_date', 'DESC')->get()->result();
        return $arr ? $arr : '';
    }
    
     public function getRecruitmentDataSearch($key,$lang) {
        if(isset($lang) && $lang == 'en'){
            $rec_title = 'rec_title_en';
        }  else {
            $rec_title = 'rec_title';
        }
        $data = $this->db->query('SELECT * FROM recruitment WHERE rec_active = 1 and "'.$rec_title.'" LIKE "%' . trim($key) . '%"')->result();
        return isset($data) ? $data : '';
    }
    
    public function get_list_data_search($key,$lang,$limit = null, $offset = null) {
        if(isset($lang) && $lang == 'en'){
            $rec_title = 'rec_title_en';
        }  else {
            $rec_title = 'rec_title';
        }
        $this->db->select("*")->from('recruitment')->where('rec_active',1)->like($rec_title,  trim($key));
        
        if (!empty($limit))
            $this->db->limit($limit);
        if (!empty($offset)){
            $this->db->offset($offset);
        }
            
        $data = $this->db->order_by('recruitment.rec_date', 'DESC')->get()->result();
        return isset($data) ? $data : '';
    }
    
}
