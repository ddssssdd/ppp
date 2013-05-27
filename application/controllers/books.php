<?php
class Books extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user_upload');
	}
	public function index(){
		$data['list'] = $this->user_upload->get_files_by_uid_and_type($this->g_user['id'],'book');
		
		$this->load->view('share/_header',$this->g_user);
		$this->load->view('share/_menu');
		$this->load->view('book/index',$data);
		$this->load->view('share/_footer');
	}
	public function get_books(){
		$data['list'] = $this->user_upload->get_files_by_uid_and_type($this->g_user['id'],'book');
		$data['taglist']= $this->user_upload->get_file_tags($this->g_user["id"],null);
		echo json_encode($data);
	}
	public function tag(){
		$data["status"]="failure";
		$tagname=$_REQUEST["tagname"];
		if (!empty($tagname)){
			
			$data["tagId"]=$this->user_upload->add_tag($this->g_user["id"],$tagname);
			$data["status"]="success";
		}
		$data["list"]=$this->user_upload->get_tags($this->g_user["id"]);
		echo json_encode($data);
	}
	public function tag_book(){
		$data["status"]= "failure";
		$bookId = $_REQUEST["bookId"];
		$tagId = $_REQUEST["tagId"];
		
		if ((isset($bookId)) and  (isset($tagId))){			
			$this->user_upload->tag_book($this->g_user["id"],$bookId,$tagId);
			$data["status"]='success';
			$data["bookId"]=$bookId;
			$data["tagList"]=$this->user_upload->get_file_tags($this->g_user["id"],$bookId);
		}
		echo json_encode($data);
	}
	public function get_pdf_first_page(){
		$book_id = $_REQUEST["id"];
		$page_no = 0;
		if (!empty($_REQUEST["no"])){
			$page_no = $_REQUEST["no"];
		}
		$book = $this->user_upload->get_file_by_id($book_id);
		//echo json_encode($book);
		$result['status']='failure';
		if (($book) && ($book->file_type=="application/pdf")){
			if ($page_no==0){
				$url = $book->thumbnail_url;
				if ($url){
					$result['status']='success';
					$result['url']=base_url().$url;
					echo json_encode($result);
					return;
				}	
			}
			
			if (!$url){
				$file_path = dirname($_SERVER['SCRIPT_FILENAME']).$book->file_url;
				$imagick = new Imagick();
				$imagick->setResolution(120, 120);
				$imagick->setCompressionquality(100);
				$imagick->readimage($file_path."[$page_no]");
				foreach($imagick as $key=>$val){
					$val->setImageFormat("png");
					$val->resizeImage(200,200,imagick::FILTER_LANCZOS, 0.9, true);
					$filename='files/'.$this->g_user['id'].'/medium/'.md5($key.time()).'.png';
					$val->writeImage(dirname($_SERVER['SCRIPT_FILENAME']).'/'.$filename);
				}
				$result['status']='success';
				$result['url']=base_url().$filename;
				
			}
		}
		if ($page_no==0){
			$this->user_upload->update_file_thumb_url($book_id,"/$filename");
		}
		echo json_encode($result);
		
	}
}