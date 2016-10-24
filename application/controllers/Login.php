<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
				
		}
		public function login(){
			$data['pagename']='logincontainer.php';
			$this->load->view('pages/loginregi/login.php',$data);
		}
		public function newuser(){
			$data['pagename']='registercontainer.php';
			$this->load->view('pages/loginregi/login.php',$data);
		}
		public function sigin()
		{
			$data['email']=$this->input->post('email');
			$data['password']=sha1($this->input->post('password'));
			$this->BasicModel->validate_signin($data);
		}
		public function registration()
		{	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    		if ($this->form_validation->run() == false) {
    		$bed_number_error = form_error('bed_number');
    		echo $bed_number_error;
    			} else {
    		echo "true";
    			}
			$email=$this->input->post('email');
			$data['username']=$this->input->post('username');
			$data['mobile']=$this->input->post('mobile');
			$data['email']=$this->input->post('email');
			$data['password']=sha1($this->input->post('password'));
			$check=$this->db->get_where('register',array('email'=>$email))->row();
			//print_r($check);die();
			if(!$check){
			$this->db->insert('register',$data);
			$email_status = $this->BasicModel->email($email);
			if($email_status){
				$temp['pagename'] = 'otp.php'; 
				$temp['email']=$email;
				$this->load->view('pages/loginregi/login.php',$temp);
			}else{
				echo "failed";
			}
			}else {
				$this->session->set_flashdata('message','Email already exits');
				redirect(base_url().'login/newuser');
			}
		}
		public function verifyotp(){
			$otp = $this->input->post('otp');
			$email = $this->input->post('email');
			$query = $this->db->get_where('register',array('email'=>$email))->result_array();
			foreach ($query as $row){
				$original = $row['otp'];
			}
			if($original==$otp){
				$this->db->set('otp',null);
				$this->db->set('status',1);
				$this->db->where('email',$email);
				$this->db->update('register');
				//go to user profile with session
				redirect(base_url().'Basic_Controller');
			}else{
				$temp['pagename'] = 'otp.php'; 
				$temp['email']=$email;
				$this->load->view('pages/loginregi/login.php',$temp);
			}
			
		}
	}
?>