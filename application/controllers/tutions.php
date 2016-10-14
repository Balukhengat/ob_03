<?php
	class tutions extends CI_Controller{
		public function index(){
			
		}
		public function tution(){
			$category['template'] = "tution";
			$this->load->view('pages/mainpage',$category);
		}
		public function manage_view()
		{
			$this->load->view('pages/tution/tution_view');
		}
	}
?>