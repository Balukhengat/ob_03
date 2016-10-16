<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Help extends CI_Controller
	{
		public function index()
		{
			$this->load->view('pages/helpandfaq/helpview.php');
		}
		public function terms(){
			$this->load->view('pages/helpandfaq/terms.php');
		}
		public function privacy(){
			$this->load->view('pages/helpandfaq/privacy.php');
		}
		public function faq(){
			$this->load->view('pages/helpandfaq/faqmain.php');
		}
		public function howwework(){
			$this->load->view('pages/helpandfaq/howwework.php');
		}
	}
?>