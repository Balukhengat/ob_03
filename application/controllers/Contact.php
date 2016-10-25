<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Contact extends CI_Controller
	{
		public function index()
		{
			$this->load->view('pages/helpandfaq/contactview.php');
		}
		public function feedback()
		{
			
			$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
			$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
			if($this->form_validation->run()==FALSE){
				$this->load->view('pages/helpandfaq/helpview');
			}else
			{
				$data['name']=$this->input->post('name');
				$data['email']=$this->input->post('email');
				$data['message']=$this->input->post('message');
				$this->db->insert('feedback',$data);
				$this->session->set_flashdata('message','Feedback sent Successfully');
				redirect(base_url().'Help');
			}
		}
	}
?>