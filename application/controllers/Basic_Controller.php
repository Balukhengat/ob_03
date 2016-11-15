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
		public function user_realestate($task=''){
			if($task=='create'){
			$userid = $_SESSION['userid'];
				$data['name']=$this->input->post('name');
				$data['title']=$this->input->post('title');
				$data['type']=$this->input->post('type');
				$data['address']=$this->input->post('address');
				$data['builtup']=$this->input->post('builtup');
				$data['price']=$this->input->post('price');
				$data['description']=$this->input->post('description');
				$data['mobile']=$this->input->post('mobile');
				$data['email']=$this->input->post('email');
				$data['amenities']=$this->input->post('facilities');
				$data['city']=$this->input->post('city');
				$data['area']=$this->input->post('area');
				$data['date']=date('Y-m-d H:i:s');
				$data['offerend']=$this->input->post('offerend');	
				$data['category']=0;
				$data['userid']=$userid;
					$this->db->insert('realestate',$data);
			//$this->image_upload('real',$userid);
			$this->session->set_flashdata('message','Data Uploaded Successfully');
			}
			$data['pagename']="realestate.php";
			$this->load->view('pages/profile/profile',$data);
			
		}
		public function user_realestate_view(){
			$data['pagename']="realestate_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_realestate_edit($real){
			$userid = $_SESSION['userid'];
			$data['realid'] = $real;
			$data['pagename']="edit_realestate.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_realestate_delete($real){
			$realid = $real;
			$userid = $_SESSION['userid'];
			$query = "DELETE FROM realestate WHERE realid='$realid' and userid='$userid'";
			$this->db->query($query);
			if($this->db->affected_rows()){
				$this->session->set_flashdata('message','Record deleted !');
			}else{
				$this->session->set_flashdata('message','Record not found');
			}
			$data['pagename']="realestate_view.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_realestate_update(){
			$name = $this->input->post('name');
			echo $name;
			$this->BasicModel->update_user_realestate();
			//$this->image_upload('real',$userid);
			$this->session->set_flashdata('message','Data Uploaded Successfully');
		}
		public function user_tution($task=''){
			if($task=='create'){
			$userid = $_SESSION['userid'];
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('area', 'Area', 'trim|required');
			$this->form_validation->set_rules('offerend', 'Offer End', 'trim|required');
			if ($this->form_validation->run() == false) {
		
				$data['pagename']="tution.php";
				$this->load->view('pages/profile/profile',$data);
			} else {
				$data['name']=$this->input->post('name');
				$data['title']=$this->input->post('title');
				$data['address']=$this->input->post('address');
				$data['description']=$this->input->post('description');
				$data['mobile']=$this->input->post('mobile');
				$data['email']=$this->input->post('email');
				$data['city']=$this->input->post('city');
				$data['area']=$this->input->post('area');
				$data['date']=date('Y-m-d H:i:s');
				$data['offerend']=$this->input->post('offerend');
				$data['category']=1;
				$data['userid']=$userid;
				$this->db->insert('tution',$data);
				//$this->image_upload('real',$userid);
				$this->session->set_flashdata('message','Data Uploaded Successfully');
			}
			}
			$data['pagename']="tution.php";
			$this->load->view('pages/profile/profile',$data);
		
		}
		public function user_hotel($task=''){
			if($task=='create'){
				$userid = $_SESSION['userid'];
				$this->form_validation->set_rules('title', 'Title', 'trim|required');
				$this->form_validation->set_rules('type', 'Type', 'trim|required');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
				$this->form_validation->set_rules('price', 'Price', 'trim|required|numeric');
				$this->form_validation->set_rules('description', 'Description', 'trim|required');
				$this->form_validation->set_rules('facilities', 'Facility', 'trim|required');
				$this->form_validation->set_rules('city', 'City', 'trim|required');
				$this->form_validation->set_rules('area', 'Area', 'trim|required');
				$this->form_validation->set_rules('offerend', 'Offer End', 'trim|required');
				if ($this->form_validation->run() == false) {
					$data['pagename']="hotel.php";
					$this->load->view('pages/profile/profile',$data);
				} else {
					$data['name']=$this->input->post('name');
					$data['title']=$this->input->post('title');
					$data['type']=$this->input->post('type');
					$data['address']=$this->input->post('address');
					$data['price']=$this->input->post('price');
					$data['description']=$this->input->post('description');
					$data['mobile']=$this->input->post('mobile');
					$data['email']=$this->input->post('email');
					$data['amenities']=$this->input->post('facilities');
					$data['city']=$this->input->post('city');
					$data['area']=$this->input->post('area');
					$data['date']=date('Y-m-d H:i:s');
					$data['offerend']=$this->input->post('offerend');
					$data['category']=2;
					$data['userid']=$userid;
					$this->db->insert('hotel',$data);
					//$this->image_upload('real',$userid);
					$this->session->set_flashdata('message','Data Uploaded Successfully');
				}}
			$data['pagename']="hotel.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_travelling($task=''){
			if($task=='create'){
				$userid = $_SESSION['userid'];
				$this->form_validation->set_rules('title', 'Title', 'trim|required');
				$this->form_validation->set_rules('type', 'Type', 'trim|required');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
				$this->form_validation->set_rules('description', 'Description', 'trim|required');
				$this->form_validation->set_rules('city', 'City', 'trim|required');
				$this->form_validation->set_rules('area', 'Area', 'trim|required');
				$this->form_validation->set_rules('offerend', 'Offer End', 'trim|required');
				if ($this->form_validation->run() == false) {
					$data['pagename']="travelling.php";
					$this->load->view('pages/profile/profile',$data);
				} else {
					$data['name']=$this->input->post('name');
					$data['title']=$this->input->post('title');
					$data['address']=$this->input->post('address');
					$data['price']=$this->input->post('price');
					$data['description']=$this->input->post('description');
					$data['mobile']=$this->input->post('mobile');
					$data['email']=$this->input->post('email');
					$data['city']=$this->input->post('city');
					$data['area']=$this->input->post('area');
					$data['date']=date('Y-m-d H:i:s');
					$data['offerend']=$this->input->post('offerend');
					$data['category']=3;
					$data['userid']=$userid;
					$this->db->insert('travelling',$data);
					//$this->image_upload('real',$userid);
					$this->session->set_flashdata('message','Data Uploaded Successfully');
				}}
					
			$data['pagename']="travelling.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_automobile($task=''){
			if($task=='create'){
				$userid = $_SESSION['userid'];
				$this->form_validation->set_rules('title', 'Title', 'trim|required');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
				$this->form_validation->set_rules('description', 'Description', 'trim|required');
				$this->form_validation->set_rules('city', 'City', 'trim|required');
				$this->form_validation->set_rules('area', 'Area', 'trim|required');
				$this->form_validation->set_rules('offerend', 'Offer End', 'trim|required');
				if ($this->form_validation->run() == false) {
					$data['pagename']="automobile.php";
					$this->load->view('pages/profile/profile',$data);
				} else {
					$data['name']=$this->input->post('name');
					$data['title']=$this->input->post('title');
					$data['type']=$this->input->post('type');
					$data['address']=$this->input->post('address');
					$data['description']=$this->input->post('description');
					$data['mobile']=$this->input->post('mobile');
					$data['email']=$this->input->post('email');
					$data['city']=$this->input->post('city');
					$data['area']=$this->input->post('area');
					$data['date']=date('Y-m-d H:i:s');
					$data['offerend']=$this->input->post('offerend');
					$data['category']=3;
					$data['userid']=$userid;
					$this->db->insert('automobile',$data);
					//$this->image_upload('real',$userid);
					$this->session->set_flashdata('message','Data Uploaded Successfully');
				}}
					
			$data['pagename']="automobile.php";
			$this->load->view('pages/profile/profile',$data);
		}
		public function user_other($task=''){
			if($task=='create'){
				$userid = $_SESSION['userid'];
				$this->form_validation->set_rules('title', 'Title', 'trim|required');
				$this->form_validation->set_rules('address', 'Address', 'trim|required');
				$this->form_validation->set_rules('description', 'Description', 'trim|required');
				$this->form_validation->set_rules('city', 'City', 'trim|required');
				$this->form_validation->set_rules('area', 'Area', 'trim|required');
				$this->form_validation->set_rules('offerend', 'Offer End', 'trim|required');
				if ($this->form_validation->run() == false) {
					$data['pagename']="automobile.php";
					$this->load->view('pages/profile/profile',$data);
				} else {
					$data['name']=$this->input->post('name');
					$data['title']=$this->input->post('title');
					$data['type']=$this->input->post('type');
					$data['address']=$this->input->post('address');
					$data['description']=$this->input->post('description');
					$data['mobile']=$this->input->post('mobile');
					$data['email']=$this->input->post('email');
					$data['city']=$this->input->post('city');
					$data['area']=$this->input->post('area');
					$data['date']=date('Y-m-d H:i:s');
					$data['offerend']=$this->input->post('offerend');
					$data['category']=3;
					$data['userid']=$userid;
			$data['pagename']="other.php";
			$this->load->view('pages/profile/profile',$data);
		}
			}}
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