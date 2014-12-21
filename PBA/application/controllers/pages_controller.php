<?php
class Pages_controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('page_model');
	}

	public function index(){
		$this->view_home();
	}


	public function view_home(){
		$data['title']='Home';
		$this->load->view('Template/header',$data);
		$this->load->view('Content/pba_league');
		$this->load->view('Template/footer');
	}

	public function view_player($id){
		$data['info']=$this->page_model->get_playerInfo($id);
		$data['title']=$data['info']->PLAYER_FULLNAME."'s Profile";
		$data['award']=$this->page_model->get_playerAward($id);
		$data['champ']=$this->page_model->get_playerChampionship($id);
		$data['team_bridge']=$this->page_model->get_playerTeamBridge($id);
		$data['image']=$this->page_model->get_playerCarousel($id);
		$this->load->view('Template/header',$data);
		$this->load->view('Content/pba_player',$data);
		$this->load->view('Template/footer');
	}

	public function view_team($id){
		$data['info']=$this->page_model->get_teamInfo($id);
		$data['title']=$data['info']->TEAM_NAME."'s Profile";
		$data['champ']=$this->page_model->get_teamChampionship($id);
		$data['player_bridge']=$this->page_model->get_teamPlayerBridge($id);
		$data['coach_bridge']=$this->page_model->get_teamCoachBridge($id);
		$data['image']=$this->page_model->get_teamCarousel($id);
		$this->load->view('Template/header',$data);
		$this->load->view('Content/pba_team',$data);
		$this->load->view('Template/footer');
	}

	public function view_coach($id){
		$data['info']=$this->page_model->get_coachInfo($id);
		$data['title']=$data['info']->COACH_FULLNAME."'s Profile";
		$data['award']=$this->page_model->get_coachAward($id);
		$data['champ']=$this->page_model->get_coachChampionship($id);
		$data['image']=$this->page_model->get_coachCarousel($id);
		$data['team_bridge']=$this->page_model->get_coachTeamBridge($id);
		$this->load->view('Template/header',$data);
		$this->load->view('Content/pba_coach',$data);
		$this->load->view('Template/footer');
	}

	//public function view_search(){
	//	$data['title']="Search";
	//	$data['player']=$this->page_model->get_allPlayers();
	//	$data['team']=$this->page_model->get_allTeams();
	//	$data['coach']=$this->page_model->get_allCoaches();
	//	$this->load->view('Template/header',$data);
	//	$this->load->view('Content/search',$data);
	//	$this->load->view('Template/login_footer');
	//}

	public function get_coachName($id){
		$d=$this->page_model->get_coachInfo($id);
		echo json_encode($d->COACH_FULLNAME);
	}

	public function view_teamPage(){
		$data['title']="Team Page";
		$data['team']=$this->page_model->get_allTeams();
		$this->load->view('Template/header',$data);
		$this->load->view('Content/team_page',$data);
		$this->load->view('Template/login_footer');
	}

	//public function view_teamLetter($letter){
	//	$d=$this->page_model->get_teamLetter($letter);
	//	$arr=array();
	//	foreach($d as $d){
	//		array_push($arr,$d->TEAM_ID);
	//		array_push($arr,$d->TEAM_NAME);
	//	}
	//	echo json_encode($arr);
	//}

	public function view_playerPage(){
		$data['title']="Player Page";
		$data['player']=$this->page_model->get_allPlayers();
		$this->load->view('Template/header',$data);
		$this->load->view('Content/player_page',$data);
		$this->load->view('Template/login_footer');
	}

	//public function view_playerLetter($letter){
	//	$d=$this->page_model->get_playerLetter($letter);
	//	$arr=array();
	//	foreach($d as $d){
	//		array_push($arr,$d->PLAYER_ID);
	//		array_push($arr,$d->PLAYER_FULLNAME);
	//	}
	//	echo json_encode($arr);
	//}

	public function view_coachPage(){
		$data['title']="Coach Page";
		$data['coach']=$this->page_model->get_allCoaches();
		$this->load->view('Template/header',$data);
		$this->load->view('Content/coach_page',$data);
		$this->load->view('Template/login_footer');
	}

	//public function view_coachLetter($letter){
	//	$d=$this->page_model->get_coachLetter($letter);
	//	$arr=array();
	//	foreach($d as $d){
	//		array_push($arr,$d->COACH_ID);
	//		array_push($arr,$d->COACH_FULLNAME);
	//	}
	//	echo json_encode($arr);
	//}

}?>