<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class img extends CI_Controller{
		public function index()
		{
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'C:\Users\Balu\Desktop\239634.jpg';
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 75;
			$config['height']       = 50;
			
			$this->load->library('image_lib', $config);
			
			$this->image_lib->resize();
		}
		
	}
	?>