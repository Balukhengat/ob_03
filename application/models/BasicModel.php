<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BasicModel extends CI_Model{
	public function index(){
		
	}
	public function real_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$price = $data['price'];
		
		$this->db->select('*')
				 ->where('city',$city)
				 ->where('type',$type)
				 ->where('price',$price)
				 ->from('realestate');
		$result = $this->db->get()->result_array();
		
	}
	
}
?>