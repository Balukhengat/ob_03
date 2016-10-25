<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Basic_Controller extends CI_Controller{
		public function index()
		{
			$this->load->view('layout/index');
		}
		public function user_logout(){
			unset($_SESSION['userid']);
			$this->session->set_flashdata('message','Successfully logout');
			redirect(base_url().'login/login');
		}
		public function user_profile(){
				$data['pagename']="myprofile.php";
				$this->load->view('pages/profile/profile',$data);
			
			//$data['pagename']="myprofile.php";
			//$this->load->view('pages/profile/profile',$data);
		}
		public function user_dashboard(){
			$data['pagename']="dashboard.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_realestate(){
			$userid = $_SESSION['userid'];
			$this->image_upload('real',$userid);
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
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|exact_length[10]');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('city', 'city', 'trim|required');
			if($this->form_validation->run()==FALSE){
				$data['pagename']="myprofile.php";
				$this->load->view('pages/profile/profile',$data);
			}else
			{
					$this->BasicModel->updateprofile();
				$this->session->set_flashdata('message','Data Updated Successfully');
				redirect(base_url().'Basic_Controller/user_profile');
			}
		}
		public function realestate(){
			$category = "realestate";
			$this->load->view('pages/mainpage',$category);
		}
		//image Uploading
		function image_upload($path,$userid)
		{
			$config['upload_path']= './uploads/'.$path;
			$config['file_name']=$userid . '.jpg';
			$config['allowed_types']= 'jpg|png';
			$config['max_size']= 100000;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$da = array('upload_data' => $this->upload->data());
		
			}
		}
		
	}
?>