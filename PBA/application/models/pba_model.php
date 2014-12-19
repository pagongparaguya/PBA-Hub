<?php
class Pba_model extends CI_Model{

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
		$this->db->update('user',$data);
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

	public function get_notifications($user){
		$this->db->where('USERNAME',$user);
		$this->db->order_by('TIMESTAMP','desc');
		$d=$this->db->get('notification');
		return $d->result();
	}

	//players
	public function get_allPlayers(){
		$d=$this->db->get('player');
		return $d->result();
	}

	public function get_playerInfo($id){
		$this->db->where('player_id',$id);
		$d=$this->db->get('player');
		return $d->row();
	}

	public function get_playerAward($id){
		$this->db->where('player_id',$id);
		$d=$this->db->get('player_award_won');
		return $d->result();
	}

	public function get_playerChampionship($id){
		$this->db->where('player_id',$id);
		$d=$this->db->get('player_championship_won');
		return $d->result();
	}

	public function get_playerTeamBridge($id){
		$this->db->where('player_id',$id);
		$d=$this->db->get('team_player_bridge');
		return $d->result();
	}

	public function get_playerCarousel($id){
		$this->db->where('player_id',$id);
		$d=$this->db->get('player_carousel_image');
		return $d->row();
	}

	public function get_playerLetter($letter){
		$this->db->LIKE('PLAYER_FULLNAME',$letter,'after');
		$d=$this->db->get('player');
		return $d->result();
	}
	//teams
	public function get_allTeams(){
		$d=$this->db->get('team');
		return $d->result();
	}

	public function get_teamInfo($id){
		$this->db->where('team_id',$id);
		$d=$this->db->get('team');
		return $d->row();
	}

	public function get_teamChampionship($id){
		$this->db->where('team_id',$id);
		$d=$this->db->get('team_championship_won');
		return $d->result();
	}

	public function get_teamPlayerBridge($id){
		$this->db->where('team_id',$id);
		$d=$this->db->get('team_player_bridge');
		return $d->result();
	}

	public function get_teamCoachBridge($id){
		$this->db->where('team_id',$id);
		$d=$this->db->get('team_coach_bridge');
		return $d->result();
	}

	public function get_teamCarousel($id){
		$this->db->where('team_id',$id);
		$d=$this->db->get('team_carousel_image');
		return $d->row();
	}

	public function get_teamLetter($letter){
		$this->db->LIKE('TEAM_NAME',$letter,'after');
		$d=$this->db->get('team');
		return $d->result();
	}
	//coaches
	public function get_allCoaches(){
		$d=$this->db->get('coach');
		return $d->result();
	}
	public function get_coachInfo($id){
		$this->db->where('coach_id',$id);
		$d=$this->db->get('coach');
		return $d->row();
	}

	public function get_coachAward($id){
		$this->db->where('coach_id',$id);
		$d=$this->db->get('coach_award_won');
		return $d->result();
	}

	public function get_coachChampionship($id){
		$this->db->where('coach_id',$id);
		$d=$this->db->get('coach_championship_won');
		return $d->result();
	}

	public function get_coachCarousel($id){
		$this->db->where('coach_id',$id);
		$d=$this->db->get('coach_carousel_image');
		return $d->row();
	}
	public function get_coachTeamBridge($id){
		$this->db->where('coach_id',$id);
		$d=$this->db->get('team_coach_bridge');
		return $d->result();
	}

	public function get_coachLetter($letter){
		$this->db->LIKE('COACH_FULLNAME',$letter,'after');
		$d=$this->db->get('coach');
		return $d->result();
	}

}

?>