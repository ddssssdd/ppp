<?php
class Upload extends MY_Controller{
	public function index(){
		/*
		error_reporting(E_ALL | E_STRICT);
		require('upload.class.php');
		$upload_handler = new UploadHandler();
		*/
		error_reporting(E_ALL | E_STRICT);
		$this->load->model("uploadHandler");
		if ($this->uploadHandler->is_post){
			$this->load->model("upload_file");
			$this->load->model("user_upload");
		
			$result = $this->uploadHandler->result;
			foreach($result as $item){
			
				$icon_url =null;
				if ($item->width && $item->height){
					$icon_url = $item->medium_url_relate;
				}
				$upload_id=$this->upload_file->insert($item->url_relate,
										$icon_url,
										$item->origin_name,
										$item->type,
										$item->size,
										$item->width,
										$item->height);
				
				$this->user_upload->insert($this->g_user["id"],$upload_id);
			}
		}
		
		
	}
	public function test(){
		$result["folder"]=dirname($_SERVER['SCRIPT_FILENAME']).'/files/';
		echo json_encode($result);
	}
}