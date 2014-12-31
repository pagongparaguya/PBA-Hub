<?php
class Account_model extends CI_Model{

	public function login_check($user,$pass){
		$this->db->where('USERNAME LIKE BINARY',$user);
		$this->db->where('PASSWORD',$pass);
		$res=$this->db->get('user');
		return $res->row();
	}

	public function add_user($data){
		if($this->db->insert('user',$data)){
			return true;
		}else{
			return false;
		}
	}

	public function code_check($user,$code){
		$this->db->where('STATUS LIKE BINARY',$code);
		$this->db->where('USERNAME',$user);
		$d=$this->db->get('user');
		return $d->row();
	}

	public function answer_check($user,$answer){
		$this->db->where('SECRET_ANSWER LIKE BINARY',$answer);
		$this->db->where('USERNAME',$user);
		$d=$this->db->get('user');
		return $d->row();
	}

	public function update_user($user,$data){
		$this->db->where('USERNAME',$user);
		if($this->db->update('user',$data)){
			return true;
		}else{
			return false;
		}
	}
	public function update_status($data,$user,$code){
		$this->db->where('STATUS',$code);
		$this->db->where('USERNAME',$user);
		$this->db->update('user',$data);
	}

	public function update_image($data,$user){
		$this->db->where('USERNAME',$user);
		$this->db->update('user',$data);
	}

	public function delete_user($user){
		$this->db->where('USERNAME',$user);
		$this->db->delete('user');
	}

	public function get_user($user){
		$this->db->where('USERNAME',$user);
		$d=$this->db->get('user');
		return $d->row();
	}

	public function get_user2($userid){
		$this->db->where('USER_ID',$userid);
		$d=$this->db->get('user');
		return $d->row();
	}

	public function get_notifications($user){
		$this->db->where('USERNAME',$user);
		$this->db->order_by('TIMESTAMP','desc');
		$d=$this->db->get('notification');
		return $d->result();
	}

	public function get_allUsers($user){
		$this->db->where('USERNAME !=',$user);
		$d=$this->db->get('user');
		return $d->result();
	}

	public function getUserProducts($userid){
		$this->db->where('USER_ID',$userid);
		$this->db->order_by('PROD_ID','desc');
		$d=$this->db->get('product');
		return $d->result();
	}

}
?>