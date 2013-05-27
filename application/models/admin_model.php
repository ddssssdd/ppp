<?php
class Admin_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function get_content($tablename,$limit,$offset){
		$result["count"]=$this->db->count_all($tablename);
		$query=	$this->db->get($tablename,$limit,$offset);
		
		$result["list"]=$query->result_array();
		$result["fields"]=$query->list_fields();//$query->num_fields();
		return $result;
	}
	public function add_project_type($name,$description){
		$data= array("name"=>$name,"description"=>$description);
		$this->db->insert("project_type",$data);
		return $this->db->insert_id();
	}
	public function add_content($tablename,$data){
		
		$this->db->insert($tablename,$data);
		return $this->db->insert_id();
	}
	public function edit_content($tablename,$id,$data){
		$this->db->where("id",$id);
		$result=$this->db->update($tablename,$data);
		return $result;
	}
	public function delete_content($tablename,$id){
		$this->db->where("id",$id);
		$result=$this->db->delete($tablename);
		return $result;
	}
	public function get_tables(){
		return $this->db->list_tables();
	}
	public function execute_sql($sql){
		$query = $this->db->query($sql);
		$data["count"]= $query->num_rows();
		$data["rows"]=$query->result_array();
		$data["affect_rows"]= $this->db->affected_rows();
		return $data;
	}
}