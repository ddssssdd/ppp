<?php
class Upload_file extends CI_Model{
	protected $file_url;
	protected $filename;
	protected $file_type;
	protected $size;
	protected $width;
	protected $height;
	protected $upload_date;
	protected $thumbnail_url;
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function insert($url,$t_url,$fname,$ftype,$s,$w=0,$h=0){
		$data = array('file_url'=>$url,
					'filename'=>$fname,
					'thumbnail_url'=>$t_url,
					'file_type'=>$ftype,
					'size'=>$s,
					'width'=>$w,
					'height'=>$h,
					'upload_date'=>  date("Y-m-d H:i:s"));
		$this->db->insert("uploads",$data);
		return $this->db->insert_id();
	}
	
}