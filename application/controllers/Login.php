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
		{	$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|exact_length[10]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[8]|matches[password]', array('matches' => 'Password does not match'));
    		if ($this->form_validation->run() == false) {
    			$data['pagename']="registercontainer.php";
    		 $this->load->view('pages/loginregi/login',$data);
    		} else {
    		
			$email=$this->input->post('email');
			$data['username']=$this->input->post('username');
			$data['mobile']=$this->input->post('mobile');
			$data['email']=$this->input->post('email');
			$data['password']=sha1($this->input->post('password'));
			$check=$this->db->get_where('register',array('email'=>$email))->row();
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
				$this->session->set_flashdata('message','Successfully registered, Please login again');
				redirect(base_url().'login/login');
			}else{
				$temp['pagename'] = 'otp.php'; 
				$temp['email']=$email;
				$this->load->view('pages/loginregi/login.php',$temp);
			}
			
		}
		public function mainsearch(){
			$data=$this->input->post('Search');
			$name=$this->input->post('category');
			$category['msearch']=$this->BasicModel->main_search();
			//print_r($category['msearch']);die();
			$category['template'] =$name;
			$category['datas']=null;
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."Realestate/real";
			$config["per_page"] = 5;
			$config["num_links"] = 5;
			$config["total_rows"] = $this->db->get('realestate')->num_rows();
			// bootstraping
			$config["full_tag_open"] = '<ul class="pagination">';
			$config["full_tag_close"] = '</ul>';
			$config["first_link"] = "&laquo;";
			$config["first_tag_open"] = "<li>";
			$config["first_tag_close"] = "</li>";
			$config["last_link"] = "&raquo;";
			$config["last_tag_open"] = "<li>";
			$config["last_tag_close"] = "</li>";
			$config['next_link'] = '&gt;';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '<li>';
			$config['prev_link'] = '&lt;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '<li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$this->pagination->initialize($config);
			$this->load->view("pages/mainpage",$category);
		
		}
	}
?>