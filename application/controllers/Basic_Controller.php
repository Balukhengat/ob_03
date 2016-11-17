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
		}
		/* ************************************************************
		 * 					REALESTATE
		 *************************************************************/
		public function user_realestate($task='',$realid=''){
			if($task=='create'){
				$userid=$_SESSION['userid'];
				$this->BasicModel->insert_user_realestate($realid);
				$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'Basic_Controller/user_realestate');
			}
			if($task=='update'){
				$this->BasicModel->update_user_realestate($realid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'Basic_Controller/user_realestate_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$query = "DELETE FROM realestate WHERE realid='$realid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'Basic_Controller/user_realestate');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="realestate.php";
			$this->load->view('pages/profile/profile',$data);
			
		}
		public function user_realestate_view(){
			$data['pagename']="realestate_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_realestate_edit($realid){
			$userid = $_SESSION['userid'];
			$data['realid'] = $realid;
			$data['pagename']="edit_realestate.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 *		 					TUTION
		 *************************************************************/
		public function user_tution($task='',$tutid=''){
			if($task=='create'){
				$this->BasicModel->insert_user_tution($tutid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'Basic_Controller/user_tution');
			}
			if($task=='update'){
				$this->BasicModel->update_user_tution($tutid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'Basic_Controller/user_tution_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$query = "DELETE FROM tution WHERE tutid='$tutid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'Basic_Controller/user_tution_view');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="tution.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_tution_view(){
			$data['pagename']="tution_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_tution_edit($tutid){
			$userid = $_SESSION['userid'];
			$data['tutid'] = $tutid;
			$data['pagename']="edit_tution.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 *		 					HOTEL
		 *************************************************************/
		public function user_hotel($task='',$hotelid=''){
			if($task=='create'){
				$this->BasicModel->insert_user_hotel($hotelid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'Basic_Controller/user_hotel');
			}
			if($task=='update'){
				$this->BasicModel->update_user_hotel($hotelid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'Basic_Controller/user_hotel_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$query = "DELETE FROM hotel WHERE hotelid='$hotelid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'Basic_Controller/user_hotel_view');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="hotel.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_hotel_view(){
			$data['pagename']="hotel_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_hotel_edit($hotelid){
			$userid = $_SESSION['userid'];
			$data['hotelid'] = $hotelid;
			$data['pagename']="edit_hotel.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 * 					Travelling
		 *************************************************************/
		public function user_travelling($task='',$travelid=''){
			if($task=='create'){
				$this->BasicModel->insert_user_travelling($travelid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'Basic_Controller/user_travelling_view');
			}
			if($task=='update'){
				$this->BasicModel->update_user_travelling($travelid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'Basic_Controller/user_travelling_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$query = "DELETE FROM travelling WHERE travelid='$travelid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'Basic_Controller/user_travelling_view');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="travelling.php";
			$this->load->view('pages/profile/profile',$data);
				
		}
		public function user_travelling_view(){
			$data['pagename']="travelling_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_travelling_edit($travelid){
			$userid = $_SESSION['userid'];
			$data['travelid'] = $travelid;
			$data['pagename']="edit_travelling.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 * 					AUTOMOBILES
		 *************************************************************/
		public function user_automobile($task='',$autoid=''){
			if($task=='create'){
				$this->BasicModel->insert_user_automobile($autoid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'Basic_Controller/user_automobile_view');
			}
			if($task=='update'){
				$this->BasicModel->update_user_automobile($autoid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'Basic_Controller/user_automobile_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$query = "DELETE FROM automobile WHERE autoid='$autoid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'Basic_Controller/user_automobile_view');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="automobile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_automobile_view(){
			$data['pagename']="automobile_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_automobile_edit($autoid){
			$userid = $_SESSION['userid'];
			$data['autoid'] = $autoid;
			$data['pagename']="edit_automobile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		
		/* ************************************************************
		 * 					OTHER
		 *************************************************************/
		public function user_other($task='',$otherid=''){
			if($task=='create'){
				$this->BasicModel->insert_user_other($otherid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
				redirect(base_url() . 'Basic_Controller/user_other');
			}
			if($task=='update'){
				$this->BasicModel->update_user_other($otherid);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Updated Successfully');
				//$data['pagename']="realestate_view.php";
				redirect(base_url() . 'Basic_Controller/user_other_view');
			}
			if($task=='delete'){
				$userid = $_SESSION['userid'];
				$query = "DELETE FROM other WHERE otherid='$otherid' and userid='$userid'";
				$this->db->query($query);
				if($this->db->affected_rows()){
					$this->session->set_flashdata('message','Record deleted !');
				}else{
					$this->session->set_flashdata('message','Record not found');
				}
				redirect(base_url() . 'Basic_Controller/user_other');
				//$data['pagename']="realestate_view.php";
			}
			$data['pagename']="other.php";
			$this->load->view('pages/profile/profile',$data);
				
		}
		public function user_other_view(){
			$data['pagename']="other_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_other_edit($otherid){
			$userid = $_SESSION['userid'];
			$data['otherid'] = $otherid;
			$data['pagename']="edit_other.php";
			$this->load->view('pages/profile/profile',$data);
		}
		/* ************************************************************
		 * 					PROFILE
		 *************************************************************/
		public function updateprofile(){
				$this->BasicModel->updateprofile();
				$this->session->set_flashdata('message','Data Updated Successfully');
				redirect(base_url().'Basic_Controller/user_profile');
		}
		public function realestate(){
			$category = "realestate";
			$this->load->view('pages/mainpage',$category);
		}
		//image Uploading
		/*
		function image_upload($path,$userid)
		{	
				$filesCount = count($_FILES['image']['name']);
				print_r($filesCount);
				for($i = 0; $i < $filesCount; $i++){
					$_FILES['img']['name'] = $_FILES['image']['name'][$i];
					$_FILES['img']['type'] = $_FILES['image']['type'][$i];
					$_FILES['img']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
					$_FILES['img']['error'] = $_FILES['image']['error'][$i];
					$_FILES['img']['size'] = $_FILES['image']['size'][$i];
					print_r($_FILES['image']['tmp_name'][$i]);
			$config['upload_path']= './uploads/'.$path;
			$config['file_name']=$userid .$i. '.jpg';
			$config['allowed_types']= 'jpg|png';
			$config['max_size']= 2048;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('img'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$da = array('upload_data' => $this->upload->data());
		
			}
				}//}
		}*/
		function image_upload($path,$userid)
		{
			$base_path='./uploads/'.$path;
			chdir($base_path);
			if(!file_exists($userid))
			{
				$date=date('Y-m-d_H-i-s');
				mkdir($userid);
				chdir($userid);
				echo getcwd();
				$new_path=$base_path.'/'.$userid;
				echo $new_path;die();
				$filesCount = count($_FILES['image']['name']);
				for($i = 0; $i < $filesCount; $i++)
				{
					$_FILES['img']['name'] = $_FILES['image']['name'][$i];
					$_FILES['img']['type'] = $_FILES['image']['type'][$i];
					$_FILES['img']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
					$_FILES['img']['error'] = $_FILES['image']['error'][$i];
					$_FILES['img']['size'] = $_FILES['image']['size'][$i];
					$config['upload_path']= $new_path;
					$config['file_name']=$date.'_'.$i. '.jpg';
					$config['allowed_types']= 'jpg|png';
					$config['max_size']= 2048;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ( ! $this->upload->do_upload('img'))
					{
						$error = array('error' => $this->upload->display_errors());
					}
					else
					{
						$da = array('upload_data' => $this->upload->data());
		
					}
				}// end for
			}///end if
			else{
				chdir($userid);
				$new_path=$base_path.'/'.$userid.'/';
				$filesCount = count($_FILES['image']['name']);
				for($i = 0; $i < $filesCount; $i++)
				{
					$_FILES['img']['name'] = $_FILES['image']['name'][$i];
					$_FILES['img']['type'] = $_FILES['image']['type'][$i];
					$_FILES['img']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
					$_FILES['img']['error'] = $_FILES['image']['error'][$i];
					$_FILES['img']['size'] = $_FILES['image']['size'][$i];
					$config['upload_path']= $new_path;
					$config['file_name']=$date.'_'.$i. '.jpg';
					$config['allowed_types']= 'jpg|png';
					$config['max_size']= 2048;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ( ! $this->upload->do_upload('img'))
					{
						$error = array('error' => $this->upload->display_errors());
					}
					else
					{
						$da = array('upload_data' => $this->upload->data());
		
					}
				}
			}//EOF else
		}
	}
?>