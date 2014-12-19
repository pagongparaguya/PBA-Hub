<?php
class Account_controller extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('pba_model');
	}

	public function index(){
		redirect('pages_controller/view_home');
	}

	//Basic Login
	public function view_login(){
		if(empty($this->session->userdata('username'))){
			$data['title']='Login';	
			$data['message']='';
			$data['status']='no_check';
			$this->load->view('Template/header',$data);
			$this->load->view('Content/login',$data);
			$this->load->view('Template/login_footer');
		}else{
			redirect('pages_controller/view_home');
		}
	}

	//View for login if register is successful
	public function view_login2(){
		if(empty($this->session->userdata('username'))){
			$data['title']='Login';	
			$data['message']='Successfully Registered';
			$data['status']='no_check';
			$this->load->view('Template/header',$data);
			$this->load->view('Content/login',$data);
			$this->load->view('Template/login_footer');
		}else{
			redirect('pages_controller/view_home');
		}
	}

	public function view_register(){
		if(empty($this->session->userdata('username'))){
			$data['title']='Sign Up';
			$data['image']=$this->make_captcha();
			$data['message']='';
			$this->load->view('Template/header',$data);
			$this->load->view('Content/register',$data);
			$this->load->view('Template/footer');
		}else{
			redirect('pages_controller/view_home');
		}
	}
	
	public function view_register2(){
		if(empty($this->session->userdata('username'))){
			$data['title']='Register';
			$data['image']=$this->make_captcha();
			$data['message']='File Not an Image File!';
			$this->load->view('Template/header',$data);
			$this->load->view('Content/register',$data);
			$this->load->view('Template/footer');
		}else{
			redirect('pages_controller/view_home');
		}
	}
	

	public function login(){
		if(empty($this->session->userdata('username'))){
			$user=$this->input->post('user');
			$pass=do_hash($this->input->post('pass'),'md5');
			$result=$this->pba_model->login_check($user,$pass);
			if(!empty($result)){
				if($result->STATUS!='Active'){
					$data['title']='Login';
					$data['status']='check_code';
					$data['user']=$user;
					$data['message']='';
					$data['verification']='';
					$this->load->view('Template/header',$data);
					$this->load->view('Content/login',$data);
					$this->load->view('Template/login_footer');
				}else{
					$this->session->set_userdata('username',$user);
					redirect('account_controller/view_user_profile');
				}
			}else{
				$data['title']='Login';
				$data['message']='Username/Password is incorrect!';
				$data['status']='no_check';
				$this->load->view('Template/header',$data);
				$this->load->view('Content/login',$data);
				$this->load->view('Template/login_footer');
			}
		}else{
			redirect('pages_controller/view_home');
		}
	}


	public function check_code(){
		$code=$this->input->post('code');
		$user=$this->input->post('user');
		$result=$this->pba_model->code_check($user,$code);
		if(empty($result)){
			$data['title']='Login';
			$data['status']='check_code';
			$data['user']=$user;
			$data['message']='';
			$data['verification']='Verification is invalid, please recheck your email!';
			$this->load->view('Template/header',$data);
			$this->load->view('Content/login',$data);
			$this->load->view('Template/login_footer');
		}else{
			$data=array('STATUS'=>'Active');
			$this->pba_model->update_status($data,$user,$code);
			$this->session->set_userdata('username',$user);
			redirect('account_controller/view_user_profile');
		}
	}


	public function register(){
		if($this->input->post('fname')){
			$this->session->unset_userdata('captcha');
			$pass=do_hash($this->input->post('pass'),'md5');
			$code=random_string('alnum',6);
			$email=$this->input->post('email');
			$user=$this->input->post('user');

			//upload config
			$config['upload_path']="./assets/user_images/";
			$config['allowed_types']='jpg|jpeg|png';
			$config['file_name']=$user;
			$this->load->library('upload',$config);
			
			//image default value
			$image="http://localhost/PBA/assets/user_images/default123.jpg";
			$data=array(
						'FIRST_NAME'=>$this->input->post('fname'),
						'LAST_NAME'=>$this->input->post('lname'),
						'CONTACT_NUMBER'=>$this->input->post('contact'),
						'EMAIL_ADDRESS'=>$email,
						'ADDRESS'=>$this->input->post('address'),
						'BIRTHDAY'=>$this->input->post('birthday'),
						'SECRET_QUESTION'=>$this->input->post('question'),
						'SECRET_ANSWER'=>$this->input->post('answer'),
						'USERNAME'=>$this->input->post('user'),
						'PASSWORD'=>$pass,
						'STATUS'=>$code,
						'USER_IMAGE'=>$image);
			if($this->pba_model->add_user($data)){
				//uploading
				if(!empty($_FILES['userfile']['name'])){
					if(!$this->upload->do_upload()){
						$this->pba_model->delete_user($user);
						redirect('account_controller/view_register2');
					}else{
						$file_data=$this->upload->data();
						$image=base_url().'assets/user_images/'.$file_data['file_name'];
						$dat=array('USER_IMAGE'=>$image);
						$this->pba_model->update_image($dat,$user);
					}
				}
				$this->sendmail($email,$code);
				redirect('account_controller/view_login2');
			}else{
				$data = array(
							'title'=>'Sign Up',
							'image'=>$this->make_captcha(),
							'message'=>'Username/Email Address already taken!',
							'fname'=>$this->input->post('fname'),
							'lname'=>$this->input->post('lname'),
							'contact'=>$this->input->post('contact'),
							'email'=>$email,
							'address'=>$this->input->post('address'),
							'birthday'=>$this->input->post('birthday'),
							'answer'=>$this->input->post('answer'));
				$this->load->view('Template/header',$data);
				$this->load->view('Content/register',$data);
				$this->load->view('Template/footer');
			}
	  	}else{
			redirect('account_controller/view_register');
		}
	}
	


	//View User Profile
	public function view_user_profile(){
		if(!empty($this->session->userdata('username'))){
			$data['title']=$this->session->userdata('username')."'s Profile";
			$data['info']=$this->pba_model->get_user($this->session->userdata('username'));
			$data['notification']=$this->pba_model->get_notifications($this->session->userdata('username'));
			$this->load->view('Template/header',$data);
			$this->load->view('Content/user_profile',$data);
			$this->load->view('Template/footer');
		}else{
			redirect('pages_controller/view_home');
		}
	}


	public function check_answer($answer){
		$d=$this->pba_model->answer_check($this->session->userdata('username'),$answer);
		$value="1";
		if(empty($d)){
			$value="0";
		}
		echo json_encode($value);
	}


	//image nalang kuwang
	public function edit_user(){
		if($this->input->post('fname')){
			$pass=do_hash($this->input->post('pass'),'md5');
			$data=array('FIRST_NAME'=>$this->input->post('fname'),
				'LAST_NAME'=>$this->input->post('lname'),
				'CONTACT_NUMBER'=>$this->input->post('contact'),
				'ADDRESS'=>$this->input->post('address'),
				'PASSWORD'=>$pass);
			$this->pba_model->update_user($this->session->userdata('username'),$data);
			echo "<script>alert('Successfully Made Changes!');</script>";
		}	
		$this->view_user_profile();
	}

	//Destroys session and logs out
	public function logout(){
		$this->session->sess_destroy();
		redirect('pages_controller/view_home');
	}

	//Sends mail through gmail
	public function sendmail($email,$code){
		$config = array(
	        'protocol' => 'smtp',
	        'smtp_host' => 'ssl://smtp.googlemail.com',
	        'smtp_port' => 465,
	        'smtp_user' => 'pba.hub@gmail.com',
	        'smtp_pass' => '123456789Ten'
    	);
    	$this->load->library('email',$config);
		$this->email->from('pba.hub@gmail.com','PBA HUB MESSENGER');
		$this->email->to($email);
		$this->email->subject('Verification Code');
		$this->email->message('Verify your account with the six letter verification code"'.$code.'" to gain access in PBA HUB.');
		$this->email->send();
		return $this->email->print_debugger();
	}

	//Returns captcha image
	public function make_captcha(){
		$random=strtoupper(random_string('alnum',6));
		$captcha=array(
						'word'=>$random,
						'img_path'=>'./assets/captcha/',
						'img_url'=>base_url().'assets/captcha/',
						'font_path'=>'./assets/font/ostrich-black.ttf',
						'img_width'=>'200',
						'img_height'=>'80',
						'expiration'=>'3600');
		$this->session->set_userdata('captcha',$random);
		$img=create_captcha($captcha);
		return $img['image'];
	}


}
?>