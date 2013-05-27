<?php
class Admin extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("admin_model");
	}
	public function index(){
		$data=array();
		$this->output("admin/index", $data);
	}
	public function database(){
		$data=array();
		$this->output("admin/database", $data);
	}
	protected function output($viewName,$data){
		$this->load->view('share/_header',$this->g_user);
		$this->load->view('share/_menu');
		$this->load->view($viewName,$data);
		$this->load->view('share/_footer');
	}
	public function get_content(){
		$tablename= $_REQUEST["tablename"];
		if (isset($_REQUEST["page_index"])){
			$page_index= intval($_REQUEST["page_index"]);
		}
		if (isset($_REQUEST["page_size"])){
			$page_size= intval($_REQUEST["page_size"]);
		}
		$data=$this->admin_model->get_content($tablename,$page_size,$page_index*$page_size);
		$data["status"]="success";
		echo json_encode($data);
	}
	/*
	public function add_project_type(){
		$name = $_REQUEST["name"];
		$description = $_REQUEST["description"];
		$this->admin_model->add_project_type($name,$description);
		$data["list"]=$this->admin_model->get_content("project_type");
		$data["status"]="success";
		echo json_encode($data);
	}
	*/
	public function add_content(){
		$tablename= $_REQUEST["tablename"];
		$data = array_diff($_REQUEST, array("tablename"=>$tablename));
		$this->admin_model->add_content($tablename,$data);
		
		$this->get_content();
	}
	public function edit_content(){
		$tablename= $_REQUEST["tablename"];
		$id=$_REQUEST["id"];
		$data = array_diff($_REQUEST, array("tablename"=>$tablename,"id"=>0));
		$this->admin_model->edit_content($tablename,$id,$data);
		
		$this->get_content();
	}
	public function delete_content(){
		$tablename= $_REQUEST["tablename"];
		$id=$_REQUEST["id"];
		
		$this->admin_model->delete_content($tablename,$id);
		
		$this->get_content();
	}
	public function get_all(){
		echo json_encode($this->admin_model->get_tables());
	}
	public function execute(){
		$sql = $_REQUEST["sql"];
		$result = $this->admin_model->execute_sql($sql);
		echo json_encode($result);
	}
}