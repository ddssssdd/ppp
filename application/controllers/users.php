<?php
class Users extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("user");
		$this->load->helper("url");
	}
	public function signup(){
		$this->load->view("share/_header");
		$this->load->view("share/_menu");
		$this->load->view("login/signup");
		$this->load->view("share/_footer");
	}
	public function index(){
		
		$info = $this->input->get();
		echo json_encode($this->user->signup($info));
		
	}
	public function login(){
		$info = $this->input->post();
		if (isset($info["email"]) && isset($info["password"])){
			$user =$this->user->login($info); 
			if ($user){
				$user_session = array(id=>$user->id,email=>$user->email,firstname=>$user->firstname,lastname=>$user->lastname);
				$this->session->set_userdata("user",$user_session);
				redirect("home/index");
			}
		}
		$this->load->view("share/_header",$info);
		$this->load->view("share/_menu");
		$this->load->view("login/login");
		$this->load->view("share/_footer");
	}
	public function logout(){
		$this->session->unset_userdata('user');
		redirect("users/login");
	}
	public function test(){
		$result["status"]=$this->user->login($this->input->get());
		echo json_encode($result);
	}
}