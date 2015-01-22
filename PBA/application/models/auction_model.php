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

	public function deleteComment($prodid){
		$this->db->where('PROD_ID',$prodid);
		$this->db->delete('product_comment');
	}

	public function deleteBid($prodid){
		$this->db->where('PROD_ID',$prodid);
		$this->db->delete('product_bid');
	}

	public function insertImage($data,$prodid){
		$this->db->where('PROD_ID',$prodid);
		$this->db->update('product',$data);
	}

	public function set_notifications($data){
		$this->db->insert('notification',$data);
	}
	
	public function updateProduct($data,$prodid){
		$this->db->where('PROD_ID',$prodid);
		if($this->db->update('product',$data)){
			return true;
		}else{
			return false;
		}
	}

	public function getBid($prodid){
		$this->db->where('PROD_ID',$prodid);
		$this->db->order_by('BID_AMT','desc');
		$d=$this->db->get('product_bid');
		return $d->result();
	}

	public function getMaxBid($prodid){
		$this->db->select_max('BID_AMT');
		$this->db->where('PROD_ID',$prodid);
		$d = $this->db->get('product_bid');
		return $d->row();
	}

	public function getMaxBidder($prodid){
		$d=$this->getMaxBid($prodid);
		$this->db->where('BID_AMT',$d->BID_AMT);
		$this->db->where('PROD_ID',$prodid);
		$ret=$this->db->get('product_bid');
		return $ret->row();
	}

	public function getComment($prodid){
		$this->db->where('PROD_ID',$prodid);
		$this->db->order_by('TIMESTAMP','desc');
		$d=$this->db->get('product_comment');
		return $d->result();
	}

	public function insertBid($data){
		if($this->db->insert('product_bid',$data)){
			return true;
		}else{
			return false;
		}
	}

	public function getSpecificBid($bidid){
		$this->db->where("BID_ID",$bidid);
		$d=$this->db->get('product_bid');
		return $d->row();
	}

	public function deleteSpecificBid($bidid){
		$this->db->where("BID_ID",$bidid);
		$this->db->delete('product_bid');
	}

}
?>