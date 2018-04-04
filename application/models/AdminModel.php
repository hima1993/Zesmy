<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	// Get category list
	public function getCategoryList() {
		try {
			$result = $this->db->get('personType');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get men categary
	public function getCategoryMen() {
		try {
			$this->db->where('persontypeId',1);
			$result = $this->db->get('category');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get women categary
	public function getCategoryWomen() {
		try {
			$this->db->where('persontypeId',2);
			$result = $this->db->get('category');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get kids categary
	public function getCategoryKids() {
		try {
			$this->db->where('persontypeId',3);
			$result = $this->db->get('category');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Search item
	public function search($keyword ,$category) {
		if($category == 0){
			$this->db->like('name', $keyword);
			$this->db->or_like('description', $keyword);
			$query = $this->db->get('item_view');
			return $query->result();
		}else{
			$this->db->like('persontypeId', $category);
			$this->db->or_like('description', $keyword);
			$query = $this->db->get('item_view');
			return $query->result();
		}
		
	}

}
