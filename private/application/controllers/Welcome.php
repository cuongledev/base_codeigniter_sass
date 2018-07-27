<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	protected $_data;
	public function index()
	{
		$this->_data['hello'] = array('123','sdfsdf');

		$this
			->set_page_title("Welcome to vnpt epay")
			->set_body_class("home-page")
			->set_content("welcome_message")
			->render();

	}
}
