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
		public function Pramotions(){
			$post_id = $this->input->post("post_id");
			$sub_days = $this->input->post("sub_days"); //Subscrioption days
			$price = $this->input->post("price");
			$category = $this->input->post("category");
			
			date_default_timezone_set("Asia/Kolkata");
			$time = date("Y-m-d");
			
			$time_left = date('Y-m-d', strtotime("+$sub_days days"));
			$data = array(
					'post_id' => $post_id,
					'sub_days' => $sub_days,
					'price' => $price,
					'category' => $category,
					'dateadded' => $time,
					'daysleft' => $time_left
					
			);
			$this->db->insert('pramotion',$data);
			redirect(base_url().'Admin');
		}
		public function DeletePramotions($postid){
			$query = "delete from pramotion where post_id = $postid";
			$this->db->query($query);
			redirect(base_url().'Admin');
		}
		public function UpdateImage($path){
			$data['userid'] = $_SESSION['adminid'];
			$data['imgid'] = $this->input->post('imgid');
			$postid = $this->input->post('postid');
			$this->AdminModel->image_update('real',$data);
			$this->session->set_flashdata('message','Image Updated Successfully');
			/*
			 *
			 * 	PAGENAME SELECTION [ Add new category if any in elseif ] >>>
			 *
			 */
			if($path=="real"){
				$page_name = "realestate_edit";
			}elseif ($path=="tution"){
				$page_name = "tution_edit";
			}elseif ($path=="hotel"){
				$page_name = "hotel_edit";
			}elseif ($path=="travelling"){
				$page_name = "travelling_edit";
			}elseif ($path=="automobile"){
				$page_name = "automobile_edit";
			}elseif ($path="other"){
				$page_name = "other_edit";
			}
			redirect(base_url() . 'Admin/'.$page_name.'/'.$postid);
		}
		public function DeleteImage($path,$id,$realid){
			/*
			 *
			 * 	PAGENAME SELECTION + Image database selection[ Add new category if any in elseif ] >>>
			 *
			 */
			if($path=="real"){
				$page_name = "realestate_edit";
				$image_table = "real_img";
			}elseif ($path=="tution"){
				$page_name = "tution_edit";
				$image_table = "tut_img";
			}elseif ($path=="hotel"){
				$page_name = "hotel_edit";
				$image_table = "hotel_img";
			}elseif ($path=="travelling"){
				$page_name = "travelling_edit";
				$image_table = "travelling_img";
			}elseif ($path=="automobile"){
				$page_name = "automobile_edit";
				$image_table = "automobile_img";
			}elseif ($path="other"){
				$page_name = "other_edit";
				$image_table = "other_img";
			}
			$result = $this->db->query("select path from $image_table where id=$id");
			$row = $result->row();
			$filename = $row->path;
			
			unlink($filename);
			$this->db->query("delete from real_img where id=$id");
			
			$this->session->set_flashdata('message','Image Deleted');
			redirect(base_url() . 'Admin/'.$page_name.'/'.$realid);
		}
		public function AddMoreImages($realid){
			echo $realid; die();
			//$this->AdminModel->image_upload('real',$userid);
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
	