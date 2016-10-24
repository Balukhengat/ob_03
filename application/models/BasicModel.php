<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BasicModel extends CI_Model{
	public function index(){
		session_start();
	}
	//Validate signin
	public function validate_signin($data){
		$success=$this->db->get_where('register',$data)->result_array();
		if(count($success) > 0)
		{
			foreach ($success as $row){
				$userid = $row['reg_id'];
			}
			$_SESSION['userid']=$userid;
			$this->session->set_flashdata('message','Sigin Successfully');
			redirect(base_url().'Basic_Controller/user_profile');
		}
		else{
			$this->session->set_flashdata('message','Login Failed,invaid email or password');
			redirect(base_url().'login/login');
		}
	}
	//OTP email (SignIN)
	public function email($email){
		$otp=rand(111111,999999);
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_timeout']=5;
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'uitsoftwares@gmail.com';
		$config['smtp_pass'] = 'King$001#000';
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		$this->load->library('email');
		$this->email->initialize($config);
	
		$this->email->from('uitsoftwares@gmail.com', 'Uitsoftwares');
		$this->email->to($email);
		$this->email->subject('OFFERS BULL Verification');
		$this->email->message('Please verify your account, Your OTP is:'.$otp);
		$this->otp($otp,$email);
		return $this->email->send();
	}
	public function otp($otp,$email){
		$this->db->set('otp',$otp);
		$this->db->set('status',0);
		$this->db->where('email',$email);
		$this->db->update('register');
	}
	public function updateprofile(){
		$userid = $_SESSION['userid'];
		$mobile = $this->input->post('mobile');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$this->db->set('mobile',$mobile);
		$this->db->set('address',$address);
		$this->db->set('city',$city);
		$this->db->where('reg_id',$userid);
		$this->db->update('register');
	}
	//REal estate search
	public function real_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$price = $data['price'];
		$where="city='$city' AND type='$type' AND 	price <='$price'";
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from('realestate');
		return $this->db->get()->result_array();
	}
}
?>