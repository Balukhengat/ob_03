<?php
	class Realestate extends CI_Controller{
		public function index(){
			
		}
		public function real(){
			$category['template'] = "realestate";
			$this->load->view('pages/mainpage',$category);
		}
		public function manage_view($realid)
		{
		  $id['realid']=$realid;
			$this->load->view('pages/realestate/realestate_view',$id);
		}
	}
?>