<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin extends CI_Controller{
		public function index(){
			if(isset($_SESSION['adminid'])){
				$this->load->view('admin/layout/index.php');
			}else{
				redirect(base_url().'Admin/login');
			}	
		}
		// Login Display page
		public function Login(){
			$this->load->view('admin/layout/login');
		}
		// Login credential checking 
		public function loginCheck(){
			$data['email']=$this->input->post('email');
			$data['password']=sha1($this->input->post('password'));
			$this->load->model('AdminModel');
			$this->AdminModel->validate_signin($data);
		}
		// Logout user
		public function Logout(){
			unset($_SESSION['adminid']);
			$this->session->set_flashdata('message','Successfully logout');
			redirect(base_url().'Admin/Login');
		}
		/* ************************************************************
		 * 					REALESTATE
		 *************************************************************/
		public function realestate($task='',$realid=''){
			if($task=='create'){
				$userid=$_SESSION['adminid'];
				$this->load->model('AdminModel');
				$this->AdminModel->insert_user_realestate();
				$this->AdminModel->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'Admin/realestate');
			}
			if($task=='update'){
				$this->load->model('AdminModel');
				$this->AdminModel->update_user_realestate($realid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'Admin/realestate_view');
			}
			if($task=='delete'){
				if(isset($_SESSION['adminid'])){
					$userid = $_SESSION['adminid'];
					$query = "DELETE FROM realestate WHERE realid='$realid' and userid='$userid'";
					$this->db->query($query);
					if($this->db->affected_rows()){
						$this->session->set_flashdata('message','Record deleted !');
					}else{
						$this->session->set_flashdata('message','Record not found');
					}
					redirect(base_url() . 'Admin/realestate_view');
					//$data['pagename']="realestate_view.php";
				}else{
					redirect(base_url().'Admin/login');
				}
			}
			$data['pagename']="realestate.php";
			$this->load->view('admin/pages/director',$data);
		}
		public function realestate_view(){
			$data['pagename']="realestate_view.php";
			$this->load->view('admin/pages/director',$data);
		}
		public function realestate_edit($realid){
			$userid = $_SESSION['adminid'];
			$data['realid'] = $realid;
			$data['pagename']="realestate_edit.php";
			$this->load->view('Admin/pages/director',$data);
		}
		
	}
	