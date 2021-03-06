<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Other extends CI_Controller{
		public function index(){
			
		}
		public function others(){
			$category['template'] = "other";
			$category['datas']=null;
			$category['msearch']=null;
			//pagination
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Other/others";
			$config["per_page"] = 5;
			$config["num_links"] = 5;
			$config["total_rows"] = $this->db->get('other')->num_rows();
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
		public function manage_view($otherid)
		{
		  $id['otherid']=$otherid;
			$this->load->view('pages/other/other_view',$id);
		}
		public function search()
		{	
			
			$data['city'] = $this->input->post('city');
			$data['type'] = $this->input->post('type');
			$result['msearch']=null;
			$result['datas'] = $this->BasicModel->other_search($data);
			//pagination if query returns empty results
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Other/search";
			$config["per_page"] = 5;
			$config["num_links"] = 5;
			$config["total_rows"] = $this->db->get('other')->num_rows();
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
			$result['template'] = "other";
			$this->load->view('pages/mainpage',$result);
		}
		
	}
?>