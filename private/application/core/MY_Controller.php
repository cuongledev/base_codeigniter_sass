<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller{

	protected $_data           = array();
	protected $_full_layout    = FALSE;
	protected $_layout_no_header = FALSE;
	protected $_current_content   = NULL;
	protected $_body_classes   = array();
    private $_page_title = "";

    public function __construct(){

        parent::__construct();
		$this->load->model("Theme_model");
		$this->_data['path'] ="common/template";

    } // end of construction


	public function set_body_class($cls = ""){
		if("" === $cls || in_array($cls, $this->_body_classes)) return $this;
		$this->_body_classes[] = $cls;
		return $this;
	} //

	// getting body classes
	public function get_body_classes(){
		return implode(" ", $this->_body_classes);
	}


	// the styles
	// ====================================
	public function styles(){

		$the_styles = $this->get_default_assets("css");

		if(empty($the_styles)): return ""; endif;

		$style_template = array();

		foreach($the_styles as $single_style){
			$style_template[] = "<link type='text/css' rel='stylesheet' href='".base_url()."{$single_style["path"]}' media='{$single_style["media"]}' />";
		}
		return implode("", $style_template);

	} //===================================



	// the scripts
	// ====================================
	public function scripts(){

		$the_scripts = $this->get_default_assets("js");
		if(empty($the_scripts)): return ""; endif;

		$script_template = array();

		foreach($the_scripts as $single_script){
			$script_template[] = "<script type='text/javascript' src='".base_url()."{$single_script}'></script>";
		}

		return implode($script_template);

	} // ==================================

	// get page title
	public function get_page_title(){return $this->_page_title;}

	// function to set page title
	public function set_page_title($title, $data = NULL){
		$the_title = $title;

		FALSE === $the_title && $the_title = $title;

		if(preg_match('/\%[ds]/', $the_title) && NULL !== $data):
			$the_title = vsprintf($the_title, $data);
		endif;

		$this->_page_title = $the_title;

		return $this;

	} //


	// get page current
	public function get_content(){return $this->_current_content;}

	// function to set page current
	public function set_content($current_content){
		$this->_current_content = $current_content;

		return $this;

	} //

	public function get_default_assets($type = "css"){

		$default_assets = $this->Theme_model->get_assets("default");
		return $default_assets[$type];

	}//


	public function render(){
		$this->_data['_body_classes'] 	= $this->get_body_classes();
		$this->_data['_load_content'] 	= $this->get_content();
		$this->_data['_page_title'] 	= $this->get_page_title();
		$this->_data['_styles'] 		= $this->styles();
		$this->_data['_scripts'] 		= $this->scripts();

		$this->load->view($this->_data['path'],$this->_data);

	} // end of function to render


}
