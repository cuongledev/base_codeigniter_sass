<?php

class Post extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getDataPost() {
        $arr = $this->db->select("*")->from('post')->where('pos_active',1)->get()->result();
        return $arr ? $arr : FALSE;
    }

    public function getDetail($id) {
        $arr = $this->db->select("*")->from('post')->where('pos_id', $id)->get()->result();
        return $arr ? $arr : FALSE;
    }

    public function getDataSearch($key,$lang) {
        if(isset($lang) && $lang == 'en'){
            $pos_title = 'pos_title_en';
        }  else {
            $pos_title = 'pos_title';
        }
        $data = $this->db->query('SELECT * FROM post WHERE pos_active = 1 and "'.$pos_title.'" LIKE "%' . trim($key) . '%"')->result();
        return isset($data) ? $data : '';
    }
    
    public function get_list_data_post($limit = null, $offset = null) {
        $this->db->select("*")->from('post')->where('pos_active',1);
        if (!empty($limit))
            $this->db->limit($limit);
        if (!empty($offset))
            $this->db->offset($offset);
        $arr = $this->db->order_by('post.pos_date', 'DESC')->get()->result();
        return $arr ? $arr : FALSE;
    }
    
     public function count_post() {
        $arr = $this->db->select("*")->from('post')->count_all_results();
        return $arr ? $arr : FALSE;
    }

    public function get_list_data_search($key,$lang,$limit = null, $offset = null) {
        if(isset($lang) && $lang == 'en'){
            $pos_title = 'pos_title_en';
        }  else {
            $pos_title = 'pos_title';
        }
        $this->db->select("*")->from('post')->where('pos_active',1)->like($pos_title,  trim($key));
        
        if (!empty($limit))
            $this->db->limit($limit);
        if (!empty($offset)){
            $this->db->offset($offset);
        }
            
        $data = $this->db->order_by('post.pos_date', 'DESC')->get()->result();
        return isset($data) ? $data : '';
    }
    
    public function get_list_data_recent_post(){
        $arr = $this->db->select("*")->from('post')->where('pos_active',1)->limit(5)->order_by('post.pos_date', 'DESC')->get()->result();
        return $arr ? $arr : FALSE;
    }

}
