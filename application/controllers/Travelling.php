<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Travelling extends CI_Controller{
		public function index(){
			$this->load->library('session');
		}
		public function travel(){
			$category['template'] = "travelling";
			$category['datas']=null;
			$category['msearch']=null;
			//pagination
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Travelling/travel";
			$config["per_page"] = 5;
			$config["num_links"] = 5;
			$config["total_rows"] = $this->db->get('travelling')->num_rows();
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
//			$data['query'] = $this->db->get('realestate',$config['per_page'],$this->uri->segment(3));
			$this->load->view('pages/mainpage',$category);
		}
		public function manage_view($travelid)
		{
		  $id['travelid']=$travelid;
			$this->load->view('pages/travelling/travelling_view',$id);
		}
		public function search()
		{	$result['datas']="";
			
			$data['city'] = $this->input->post('city');
			$data['type'] = $this->input->post('type');
			$result['msearch']=null;
 			if($data['city'] == $data['type']){
			$this->session->set_flashdata('message','Pickup and Destination must be different.');
			}else{
			$result['datas'] = $this->BasicModel->travelling_search($data);
		if($result['datas']==NULL){
 			$this->session->set_flashdata('message','Data not found, Please check related data.');
 			}
			//pagination if query returns empty results
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."Travelling/travel";
			$config["per_page"] = 5;
			$config["num_links"] = 5;
			$config["total_rows"] = $this->db->get('travelling')->num_rows();
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
			}
			$result['template'] = "travelling";
			$this->load->view('pages/mainpage',$result);
			
		}
		public function sort($val){
		
			if($val=="AES"){
				$query="SELECT * FROM travelling ORDER BY price ASC";
			$data= $this->db->query($query)->result_array();
			}elseif ($val=="DESC"){
				$query="SELECT * FROM travelling ORDER BY price DESC";
				$data= $this->db->query($query)->result_array();
			}else{
				echo false;die();
			}
echo json_encode($data);die();	
 		}

		
	}
?>