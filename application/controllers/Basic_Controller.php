<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Basic_Controller extends CI_Controller{
		public function index()
		{
			$this->load->view('layout/index');
		}
		public function user_profile(){
			$data['pagename']="myprofile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_dashboard(){
			$data['pagename']="dashboard.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_realestate(){
			$data['pagename']="realestate.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_tution(){
			$data['pagename']="tution.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_hotel(){
			$data['pagename']="hotel.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_travelling(){
			$data['pagename']="travelling.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_automobile(){
			$data['pagename']="automobile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_other(){
			$data['pagename']="other.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function updateprofile(){
			$this->form_validation->set_rules('mobile','Mobile','required|max-length[10]|numeric');
			if($this->form_validation->run()){
				$mobile= $this->input->post('mobile');
				$this->db-set($mobile);
				$this->db->update('register');
			}else{
		//		$this->load->
			}
		}
		public function realestate(){
			$category = "realestate";
			$this->load->view('pages/mainpage',$category);
		}
	}
?>