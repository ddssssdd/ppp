<?php
class Photos extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user_upload');
	}
	public function index(){
		
		$this->load->view('share/_header',$this->g_user);
		$this->load->view('share/_menu');
		$this->load->view('photo/index');
		$this->load->view('share/_footer');
		/*
		foreach($list as $item){
			$item['url'] = base_url().$item['file_url'];
		}
		*/
		
	}
	public function get_files(){
		$list = $this->user_upload->get_files_by_uid_and_type($this->g_user['id'],'picture');
		echo json_encode($list);
	}
	public function edit(){
		$this->load->view('photo/edit');
	}
	public function first(){
		$this->load->view('photo/first');
	}
}