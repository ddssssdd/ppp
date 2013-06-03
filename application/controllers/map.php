<?php
class Map extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}
	public function index(){
		$this->load->view('map/index');
		
	}
	public function index2(){
		$this->load->view('map/index2');
	}
	public function test(){
		$this->load->view("map/test");
	}
}
