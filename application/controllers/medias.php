<?php
class Medias extends MY_Controller{
function __construct(){
		parent::__construct();
		$this->load->model('user_upload');
	}
	public function index(){
		$data['list'] = $this->user_upload->get_files_by_uid_and_type($this->g_user['id'],'audio');
		
		$this->load->view('share/_header',$this->g_user);
		$this->load->view('share/_menu');
		$this->load->view('media/index',$data);
		$this->load->view('share/_footer');
	}
	public function index_video(){
		$data['list'] = $this->user_upload->get_files_by_uid_and_type($this->g_user['id'],'video');
		
		$this->load->view('share/_header',$this->g_user);
		$this->load->view('share/_menu');
		$this->load->view('media/index_v',$data);
		$this->load->view('share/_footer');
	}
}