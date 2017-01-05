<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Realestate extends CI_Controller{
		public function index(){
			
		}
		public function real(){
			$category['template'] = "realestate";
			$category['datas']=null;
			$category['msearch']=null;
			//pagination
			$this->load->library('pagination');
			$config = array();
			$config["base_url"] = base_url()."index.php/Realestate/real";
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
//			$data['query'] = $this->db->get('realestate',$config['per_page'],$this->uri->segment(3));
			$this->load->view('pages/mainpage',$category);
		}
		public function manage_view($realid)
		{
		  $id['realid']=$realid;
			$this->load->view('pages/realestate/realestate_view',$id);
		}
		public function search()
		{	
			$config = array();
			$config["per_page"] = 5;
			//$data1['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['city'] = $this->input->post('city');
			$data['type'] = $this->input->post('type');
			$data['price'] = $this->input->post('price');
			$result['msearch']=null;
			$result['datas'] = $this->BasicModel->real_search($data);
			//$sum=count($result['datas']);echo $sum;die();
			//print_r($result['datas']);die();
			//pagination if query returns empty results
			$config["base_url"] = base_url()."Realestate/search";
			$config["uri_segment"] = 3;
			$config["total_rows"] = count($result['datas']);//$this->db->get('realestate')->num_rows();
			$config["num_links"] = floor($config["total_rows"]/$config["per_page"]);
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
			$this->load->library('pagination',$config);
			$this->pagination->initialize($config);
			$result['pagination'] = $this->pagination->create_links();
			$result['template'] = "realestate";
			$this->load->view('pages/mainpage',$result);
		}
		
	}
?>