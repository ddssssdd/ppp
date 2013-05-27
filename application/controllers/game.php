<?php
class Game extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	public function starburk(){
		$this->load->view("game/starburk");
	}
}