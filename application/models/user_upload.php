<?php
class User_upload extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insert($uid,$fid){
		$data = array("user_id"=>$uid,"file_id"=>$fid);
		$this->db->insert("user_upload",$data);
		return $this->db->insert_id();
	}
	public function get_photo_by_uid($uid){
		$query = $this->db->get("uploads");
		return $query->result_array();
	}
	public function get_files_by_uid_and_type($uid,$typename){
		$sql = "SELECT uu.user_id,ft.type_name,upload.* FROM user_upload uu LEFT JOIN uploads upload ON upload.id=uu.file_id LEFT JOIN file_type ft ON ft.name=upload.file_type where user_id={$uid} and type_name='{$typename}' order by upload.upload_date desc";
		
		$query = $this->db->query($sql);
		if ($query->num_rows()>0){
			return $query->result_array();
		}
		return array();
	}
	public function get_file_by_id($bookid){
		/*
		 $query = $this->db->get_where("uploads",array("id"=>$bookid)); 
		 
		 * */
		$where=array("id"=>$bookid);
		$this->db->from("uploads")->where($where);
		$query = $this->db->get();
		
		if ($query->num_rows()>0){
			return $query->row();
		}
		return null;
	}
	public function update_file_thumb_url($book_id,$url){
		$this->db->set("thumbnail_url",$url);
		$this->db->where("id",$book_id);
		$this->db->update("uploads");
	}
	public function add_tag($uid,$tagname){
		$data=array("name"=>$tagname,"user_id"=>$uid);
		$this->db->insert("user_tag",$data);
		return $this->db->insert_id();
	}
	public function get_tags($uid){
		$this->db->from("user_tag")->where(array("user_id"=>$uid));
		$query= $this->db->get();
		if ($query->num_rows()>0){
			return $query->result_array();
		}
		return array();
		
	}
	public function tag_book($uid,$fileId,$tagId){
		$data = array("user_id"=>$uid,
						  "file_id"=>$fileId,
						  "tag_id"=>$tagId);
		$query=$this->db->from("file_tag")->where($data)->get();
		if ($query->num_rows()==0){
			$this->db->insert("file_tag",$data);
			return $this->db->insert_id();	
		}else{
			$row = $query->row();
			return $row->id;
		}
		
		
		
	}
	public function get_file_tags($uid,$fileId=null){
		$data = array("file_tag.user_id"=>$uid);
		if (isset($fileId)){
			$data = array("file_tag.user_id"=>$uid,"file_tag.file_id"=>$fileId);
		}
		$this->db->from("file_tag")->where($data)->join("user_tag","file_tag.tag_id=user_tag.id","LEFT");
		$query = $this->db->get();
		if ($query->num_rows()>0){
			return $query->result_array();
		}
		return array();
	}
	
	
}