<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Basic_Controller extends CI_Controller{
		public function index()
		{
			$this->load->view('layout/index');
		}
		public function profile(){
			$data['pagename']="myprofile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function dashboard(){
			$data['pagename']="dashboard.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function realestate(){
			$data['pagename']="realestate.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function tution(){
			$data['pagename']="tution.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function hotel(){
			$data['pagename']="hotel.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function travelling(){
			$data['pagename']="travelling.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function automobile(){
			$data['pagename']="automobile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function other(){
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