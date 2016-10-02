<?php
	class Realestate extends CI_Controller{
		public function index(){
			
		}
		public function real(){
			$category['template'] = "realestate";
			$this->load->view('pages/mainpage',$category);
		}
	}
?>