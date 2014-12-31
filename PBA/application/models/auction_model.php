<?php
class Auction_model extends CI_Model{

	public function insertProduct($data){
		if($this->db->insert('product',$data)){
			return true;
		}else{
			return false;
		}
	}	

	public function getAllProducts(){
		$this->db->order_by('PROD_ID','desc');
		$d=$this->db->get('product');
		return $d->result();
	}

	public function getProductInfo($id){
		$this->db->where('PROD_ID',$id);
		$d=$this->db->get('product');
		return $d->row();
	}

	public function getProductInfoWithUserId($id,$userid){
		$this->db->where('PROD_ID',$id);
		$this->db->where('USER_ID',$userid);
		$d=$this->db->get('product');
		return $d->row();
	}

	public function deleteProduct($prodid,$userid){
		$this->db->where('PROD_ID',$prodid);
		$this->db->where('USER_ID',$userid);
		if($this->db->delete('product')){
			return true;
		}else{
			return false;
		}
	}

	public function deleteProductAdmin($prodid){
		$this->db->where('PROD_ID',$prodid);
		if($this->db->delete('product')){
			return true;
		}else{
			return false;
		}
	}

	public function insertImage($data,$prodid){
		$this->db->where('PROD_ID',$prodid);
		$this->db->update('product',$data);
	}
	public function set_notifications($data){
		$this->db->insert('notification',$data);
	}
}
?>