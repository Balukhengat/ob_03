<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Basic_Controller extends CI_Controller{
		public function index()
		{
			$this->load->view('layout/index');
		}
		public function profile(){
			$this->load->view('pages/profile/profile');
		}
		public function realestate(){
			$category = "realestate";
			$this->load->view('pages/mainpage',$category);
		}
	}
?>