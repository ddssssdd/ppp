<?php
class User extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function signup($info){
		$result["status"] = $this->db->insert("users",$info);
		return  $result;
	}
	public function login($info){
		$this->db->from("users")->where($info);
		$query = $this->db->get();
		if ($query->num_rows()>0){
			return $query->row();
		}
		return null;
		
	}
}