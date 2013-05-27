<?php
class Home extends MY_Controller{
	function __construct(){
		parent::__construct();
		
	}
	public function index(){
		$user = $this->g_user;
		$this->load->view("home/index",$user);
	}
}