<?php
class MY_Controller extends CI_Controller{
	var $g_user =null;
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user');
		$this->load->helper('url');
		
		if (isset($this->session->userdata['user'])){
			$this->g_user = $this->session->userdata['user'];	
		}else{
			redirect("users/login");
		}
	}
}