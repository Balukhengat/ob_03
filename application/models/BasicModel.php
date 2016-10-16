<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BasicModel extends CI_Model{
	public function index(){
		
	}
	public function real_search($data){
		$city = $data['city'];
		$type = $data['type'];
		$price = $data['price'];
		$where="city='$city' AND type='$type' AND 	price <='$price'";
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from('realestate');
		return $this->db->get()->result_array();
	
	}
	
}
?>