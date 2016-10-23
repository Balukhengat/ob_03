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
		{
			$data['username']=$this->input->post('username');
			$data['mobile']=$this->input->post('mobile');
			$data['email']=$this->input->post('email');
			$data['password']=sha1($this->input->post('password'));
			$this->db->insert('register',$data);
			$email=$this->input->post('email');
			$email_status = $this->BasicModel->email($email);
			if($email_status){
				$temp['pagename'] = 'otp.php'; 
				$temp['email']=$email;
				$this->load->view('pages/loginregi/login.php',$temp);
			}else{
				echo "failed";
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
				$this->load->view('layout/index');
			}else{
				$temp['pagename'] = 'otp.php'; 
				$temp['email']=$email;
				$this->load->view('pages/loginregi/login.php',$temp);
			}
			
		}
	}
?>