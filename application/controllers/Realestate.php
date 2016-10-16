<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Realestate extends CI_Controller{
		public function index(){
			
		}
		public function real(){
			$category['template'] = "realestate";
			$category['datas']="";
			$this->load->view('pages/mainpage',$category);
		}
		public function manage_view($realid)
		{
		  $id['realid']=$realid;
			$this->load->view('pages/realestate/realestate_view',$id);
		}
		public function search()
		{
			$data['city'] = $this->input->post('city');
			$data['type'] = $this->input->post('type');
			$data['price'] = $this->input->post('price');
			
			$result['datas'] = $this->BasicModel->real_search($data);
			
			$result['template'] = "realestate";
			$this->load->view('pages/mainpage',$result);
		}
	}
?>