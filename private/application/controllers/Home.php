<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    protected $_data;

    public function __construct() {
        parent::__construct();

        // load Pagination library
        $this->load->library('pagination');
        // load URL helper
        $this->load->helper('url');

        $this->load->model('Content');
        $this->load->model('Mission');
        $this->load->model('Partner');
        $this->load->model('Post');
        $this->load->model('Culture');
        $this->load->model('Recruitment');
        // load COOCKIE helper
        $this->load->helper('cookie');
		//echo get_cookie('lang');die;
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if (get_cookie('lang')){
			if (get_cookie('lang') == 'en') {
				$this->lang->load('en', 'english');
			} else {
				$this->lang->load('vi', 'vietnamese');
			}
		}else{
			if ($lang == 'en') {
				$this->lang->load('en', 'english');
			} else {
				$this->lang->load('vi', 'vietnamese');
			}
		}

        $this->_data['lang'] = get_cookie('lang');
    }
	public function setLanguage()
	{
		$json = array();
		$lang =  $this->input->post('lang');
		$redirect  = $this->input->post('redirect');
		// set cookie
		set_cookie('lang',$lang,time()+86500,'','/','',FALSE);
		if (!empty($redirect)) {
			$json['status'] = true;
			$json['redirect'] = $redirect;
		}else{
			$json['status'] = true;
			$json['redirect'] = base_url();
		}
		echo json_encode($json);exit();
	}

    public function index() {

//        $this->_data['contents'] = $this->content->getDataContent();
        $this->_data['missions'] = $this->Mission->getDataMission();
        $this->_data['partners'] = $this->Partner->getDataPartner();
        $this->_data['posts'] = $this->Post->getDataPost();
        $this->_data['cultures'] = $this->Culture->get_list_data();

        $this
                ->set_page_title("Welcome to vnpt epay")
                ->set_body_class("home-page")
                ->set_content("home/home")
                ->render();
    }

    public function service() {

        $this->_data['partners'] = $this->Partner->getDataPartner();

        $this
                ->set_page_title("Dịch vụ")
                ->set_body_class("service-page")
                ->set_content("home/service")
                ->render();
    }

    public function work() {

        $this->config->load('pagination', TRUE);
        $config = $this->config->item('pagination', 'pagination');
        $id = $this->uri->segment(2);
        if (!isset($id)) {
            $page = 1;
        } else {
            $page = $id;
        }
        $limit = $config['per_page'];
        $offset = ($page - 1) * $limit;
        $list_data = $this->Culture->get_list_data($limit, $offset);
        $total_rows = $this->Culture->count_culture();
        $config['cur_page'] = $page;
        $config['total_rows'] = $total_rows;
        $config["base_url"] = base_url() . 'work';
        $this->pagination->initialize($config);
        $this->_data['paginator'] = $this->pagination->create_links();
        $this->_data['cultures'] = $list_data;

        $this
                ->set_page_title("Hoạt Động")
                ->set_body_class("work-page")
                ->set_content("home/work")
                ->render();
    }

    public function recruitment() {

        $this->config->load('pagination', TRUE);
        $config = $this->config->item('pagination', 'pagination');
        $id = $this->uri->segment(2);
        if (!isset($id)) {
            $page = 1;
        } else {
            $page = $id;
        }
        $limit = $config['per_page'];
        $offset = ($page - 1) * $limit;
        $list_data = $this->Recruitment->get_list_data_recruitment($limit, $offset);
        $total_rows = $this->Recruitment->count_recruitment();
        $config['cur_page'] = $page;
        $config['total_rows'] = $total_rows;
        $config["base_url"] = base_url() . 'tuyen-dung';
        $this->pagination->initialize($config);
        $this->_data['paginator'] = $this->pagination->create_links();
        $this->_data['recruitments'] = $list_data;
        $this->_data['cate_recruitments'] = $this->Recruitment->get_list_data_cate_recruitment();

        $this
                ->set_page_title("Tuyển dụng")
                ->set_body_class("recruitment-page")
                ->set_content("home/recruitment")
                ->render();
    }

    public function recruitment_detail($cate_id) {
        
        $this->config->load('pagination', TRUE);
        $config = $this->config->item('pagination', 'pagination');
        $id = $this->uri->segment(3);
        if (!isset($id)) {
            $page = 1;
        } else {
            $page = $id;
        }
        $limit = $config['per_page'];
        $offset = ($page - 1) * $limit;
        $list_data = $this->Recruitment->get_list_data_recruitment_detail($cate_id,$limit, $offset);
        $total_rows = $this->Recruitment->count_recruitment();
        $config['cur_page'] = $page;
        $config['total_rows'] = $total_rows;
        $config["base_url"] = base_url() . 'tuyen-dung';
        $this->pagination->initialize($config);
        $this->_data['paginator'] = $this->pagination->create_links();
        $this->_data['recruitment_details'] = $list_data;

        $this->_data['cate_recruitments'] = $this->Recruitment->get_list_data_cate_recruitment();
        $this->_data['cate_rec_id'] = $cate_id;


        $this
                ->set_page_title("Tuyển dụng")
                ->set_body_class("recruitment-page")
                ->set_content("home/recruitment-detail")
                ->render();
    }

	public function recruitment_detail_info($id) {
		$this->_data['cate_recruitments'] = $this->Recruitment->get_list_data_cate_recruitment();
		$this->_data['recruitment_details'] = $this->Recruitment->getDataDetailRecruitment($id);

		$this
			->set_page_title("Tuyển dụng")
			->set_body_class("recruitment-page")
			->set_content("home/recrui_detail_info")
			->render();
	}
    
    public function recruitment_search() {
        $key = $this->input->post();
        if (isset($key['key'])) {
            $data = $this->Recruitment->getRecruitmentDataSearch($key['key'],get_cookie('lang'));
            if (isset($data)) {
                $this->config->load('pagination', TRUE);
                $config = $this->config->item('pagination', 'pagination');
                $id = $this->uri->segment(2);
                if (!isset($id)) {
                    $page = 1;
                } else {
                    $page = $id;
                }
                $limit = $config['per_page'];
                $offset = ($page - 1) * $limit;
                $list_data = $this->Recruitment->get_list_data_search($key['key'],get_cookie('lang'),$limit, $offset);
                $total_rows = $this->Recruitment->count_recruitment();
                $config['cur_page'] = $page;
                $config['total_rows'] = $total_rows;
                $config["base_url"] = base_url() . 'tuyen-dung';
                $this->pagination->initialize($config);
                $this->_data['paginator'] = $this->pagination->create_links();
                $this->_data['recruitments'] = $list_data;
                $this->_data['cate_recruitments'] = $this->Recruitment->get_list_data_cate_recruitment();
                $this->_data['keyword'] = $key['key'];
                
            } else {
                $this->_data['keyword'] = $key['key'];
            }
        }
        
        $this
                ->set_page_title("Tuyển dụng")
                ->set_body_class("recruitment-page")
                ->set_content("home/recruitment-search")
                ->render();
    }

    public function news() {

        $this->config->load('pagination', TRUE);
        $config = $this->config->item('pagination', 'pagination');
        $id = $this->uri->segment(2);
        if (!isset($id)) {
            $page = 1;
        } else {
            $page = $id;
        }
        $limit = $config['per_page'];
        $offset = ($page - 1) * $limit;
        $list_data = $this->Post->get_list_data_post($limit, $offset);
        $total_rows = $this->Post->count_post();
        $config['cur_page'] = $page;
        $config['total_rows'] = $total_rows;
        $config["base_url"] = base_url() . 'news';
        $this->pagination->initialize($config);
        $this->_data['paginator'] = $this->pagination->create_links();
        $this->_data['posts'] = $list_data;
        $this->_data['recent_posts'] = $this->Post->get_list_data_recent_post();

        $this
                ->set_page_title("Tin tức")
                ->set_body_class("news-page")
                ->set_content("home/news")
                ->render();
    }

    public function news_detail($id) {

        $this->_data['posts'] = $this->Post->get_list_data_recent_post();
        $this->_data['post_detail'] = $this->Post->getDetail($id);

        $this
                ->set_page_title("Tin tức")
                ->set_body_class("news-page")
                ->set_content("home/news-detail")
                ->render();
    }

    public function customer() {

        $this->_data['partners'] = $this->Partner->getDataPartner();

        $this
                ->set_page_title("Khách hàng")
                ->set_body_class("customer-page")
                ->set_content("home/customer")
                ->render();
    }

    public function about_us() {

        $this->_data['about'] = $this->Content->getDataContent();
        $this->_data['missions'] = $this->Mission->getDataMission();

        $this
                ->set_page_title("Khách hàng")
                ->set_body_class("about-page")
                ->set_content("home/about")
                ->render();
    }

    public function search() {
        $key = $this->input->post();
        if (isset($key['key'])) {
            $data = $this->Post->getDataSearch($key['key'],get_cookie('lang'));
            if (isset($data)) {
                $this->config->load('pagination', TRUE);
                $config = $this->config->item('pagination', 'pagination');
                $id = $this->uri->segment(2);
                if (!isset($id)) {
                    $page = 1;
                } else {
                    $page = $id;
                }
                $limit = $config['per_page'];
                $offset = ($page - 1) * $limit;
                $list_data = $this->Post->get_list_data_search($key['key'],get_cookie('lang'),$limit, $offset);
                $total_rows = $this->Post->count_post();
                $config['cur_page'] = $page;
                $config['total_rows'] = $total_rows;
                $config["base_url"] = base_url() . 'news';
                $this->pagination->initialize($config);
                $this->_data['paginator'] = $this->pagination->create_links();
                $this->_data['posts'] = $list_data;
                $this->_data['recent_posts'] = $this->Post->get_list_data_recent_post();
                $this->_data['keyword'] = $key['key'];
                
            } else {
                $this->_data['keyword'] = $key['key'];
            }
        }
        
        $this
                ->set_page_title("Tin tức")
                ->set_body_class("news-page")
                ->set_content("home/new-search")
                ->render();
    }
    
    

}
