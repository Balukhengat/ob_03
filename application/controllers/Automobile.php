<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Automobile extends CI_Controller{
		public function index(){
			
		}
		public function auto(){
			$category['template'] = "automobile";
			$category['datas']=null;
			
			//pagination
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."Automobile/auto";
			$config["per_page"] = 5;
			$config["num_links"] = 5;
			$config["total_rows"] = $this->db->get('automobile')->num_rows();
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
		public function manage_view($autoid)
		{
		  $id['autoid']=$autoid;
			$this->load->view('pages/automobile/automobile_view',$id);
		}
		public function search()
		{	
			
			$data['city'] = $this->input->post('city');
			$data['type'] = $this->input->post('type');
			$result['datas'] = $this->BasicModel->automobile_search($data);
			//pagination if query returns empty results
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."Automobile/auto";
			$config["per_page"] = 5;
			$config["num_links"] = 5;
			$config["total_rows"] = $this->db->get('automobile')->num_rows();
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
			$result['template'] = "automobile";
			$this->load->view('pages/mainpage',$result);
		}
		
	}
?>