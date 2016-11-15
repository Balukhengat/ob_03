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
// 			$this->session->set_userdata($userid);
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
	public function insert_user_realestate($realid){
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
	}
	public function update_user_realestate($realid){
			$data['name'] = $this->input->post('name');
			$data['title'] = $this->input->post('title');
			$data['type'] = $this->input->post('type');
			$data['address'] = $this->input->post('address');
			$data['builtup'] = $this->input->post('builtup');
			$data['price'] = $this->input->post('price');
			$data['description'] = $this->input->post('description');
			$data['mobile'] = $this->input->post('mobile');
			$data['email'] = $this->input->post('email');
			$data['amenities'] = $this->input->post('facilities');
			$data['city'] = $this->input->post('city');
			$data['area'] = $this->input->post('area');
 			$data['date'] = date('Y-m-d H:i:s');
			$data['offerend'] = $this->input->post('offerend');	
 			$data['category'] = 0;
			$data['userid'] = $_SESSION['userid'];
			$this->db->where('userid',$data['userid']);
			$this->db->where('realid',$realid);
			$this->db->update('realestate',$data);
	}
	//REal estate search
	public function real_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$price = $data['price'];
		if($price==0){
			$str="select * from realestate where city='$city' and type='$type' and price BETWEEN 0 AND 9999";
		}elseif ($price==1){
			$str="select * from realestate where city='$city' and type='$type' and price BETWEEN 10000 AND 49999";
		}
		elseif ($price==2){
			$str="select * from realestate where city='$city' and type='$type' and price BETWEEN 50000 AND 99999";
		}
		elseif ($price==3){
			$str="select * from realestate where city='$city' and type='$type' and price BETWEEN 100000 AND 4999999";
		}
		else{
			$str="select * from realestate where city='$city' and type='$type' and price >=5000000";
		}
		//$query="select * from realestate where city='$city' and type='$type' and price '$str'";
		//echo $str;die();
// 		$where="city='$city' AND type='$type' AND 	price '$str'";
// 		$this->db->select('*');
// 		$this->db->where("city='$city' AND type='$type' AND 	price <=$price");
// 		$this->db->from('realestate');
		
		return $this->db->query($str)->result_array();
	}
	public function tution_search($data){
		$city = $data['city'];
		$type = $data['type'];
			$str="select * from tution where city='$city' and title='$type'";
		return $this->db->query($str)->result_array();
	}
	public function hotel_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$price = $data['price'];
		if($price==0){
			$str="select * from hotel where city='$city' and type='$type' and price BETWEEN 0 AND 9999";
		}elseif ($price==1){
			$str="select * from hotel where city='$city' and type='$type' and price BETWEEN 10000 AND 49999";
		}
		elseif ($price==2){
			$str="select * from hotel where city='$city' and type='$type' and price BETWEEN 50000 AND 99999";
		}
		elseif ($price==3){
			$str="select * from hotel where city='$city' and type='$type' and price BETWEEN 100000 AND 4999999";
		}
		else{
			$str="select * from hotel where city='$city' and type='$type' and price >=5000000";
		}
		return $this->db->query($str)->result_array();
	}
	public function automobile_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$str="select * from automobile where city='$city' and type='$type'";
		return $this->db->query($str)->result_array();
	}
	public function travelling_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$title=$city.' to '.$type;
		$str="select * from travelling	 where title='$title'";
		return $this->db->query($str)->result_array();
	}
}
?>