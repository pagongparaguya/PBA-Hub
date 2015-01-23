<?php
class Account_controller extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('account_model');
		$this->load->model('auction_model');
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
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
			$data['message']='Successfully Registered!';
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

	public function view_adminUsers(){
		if(empty($this->session->userdata('admin'))){
			redirect('account_controller/view_user_profile');
		}else{
			$data['title']='Admin User Panel';
			$data['users']=$this->account_model->get_allUsers($this->session->userdata('username'));
			$this->load->view('Template/header',$data);
			$this->load->view('Content/admin_users',$data);
			$this->load->view('Template/login_footer');
		}
	}

	public function view_adminProducts(){
		if(empty($this->session->userdata('admin'))){
			redirect('account_controller/view_user_profile');
		}else{
			$data['title']='Admin Product Panel';
			$data['products']=$this->auction_model->getAllProducts();
			$this->load->view('Template/header',$data);
			$this->load->view('Content/admin_products',$data);
			$this->load->view('Template/login_footer');
		}
	}
	

	public function login(){
		if(empty($this->session->userdata('username'))){
			$user=$this->input->post('user');
			$pass=do_hash($this->input->post('pass'),'md5');
			$result=$this->account_model->login_check($user,$pass);
			if(!empty($result)){
				if($result->STATUS!='Active'&&$result->STATUS!='Deleted'){
					$data['title']='Login';
					$data['status']='check_code';
					$data['user']=$user;
					$data['message']='';
					$data['verification']='';
					$this->load->view('Template/header',$data);
					$this->load->view('Content/login',$data);
					$this->load->view('Template/login_footer');
				}else if($result->STATUS=='Deleted'){
					$data['title']='Login';
					$data['status']='no_check';
					$data['message']='Your Account has been blocked, please email pba.hub@gmail.com for information.';
					$this->load->view('Template/header',$data);
					$this->load->view('Content/login',$data);
					$this->load->view('Template/login_footer');
				}else{
					if($result->ACCOUNT_TYPE=='Admin'){
						$this->session->set_userdata('admin',$result->USER_ID);
					}
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
		if(empty($this->session->userdata('username'))&&$this->input->post('code')){
			$code=$this->input->post('code');
			$user=$this->input->post('user');
			$result=$this->account_model->code_check($user,$code);
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
				$this->account_model->update_status($data,$user,$code);
				$this->session->set_userdata('username',$user);
				redirect('account_controller/view_user_profile');
			}
		}else{
			redirect('account_controller/view_login');
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
			$image="http://localhost/PBA/assets/default_images/defaultuser12345.jpg";
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
			if($this->account_model->add_user($data)){
				//uploading
				if(!empty($_FILES['userfile']['name'])){//if na add ang user then naay file
					if(!$this->upload->do_upload()){//if not image ang file
						$this->account_model->delete_user($user);
						redirect('account_controller/view_register2');
					}else{//if image ang file
						$file_data=$this->upload->data();
						$image=base_url().'assets/user_images/'.$file_data['file_name'];
						$dat=array('USER_IMAGE'=>$image);
						$this->account_model->update_user($user,$dat);
						$this->sendmail($email,$code);
					}
				}else{//if na add ang user then walay image
					$this->sendmail($email,$code);
				}
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
			$data['info']=$this->account_model->get_user($this->session->userdata('username'));
			$data['products']=$this->account_model->getUserProducts($data['info']->USER_ID);
			$data['notification']=$this->account_model->get_notifications($this->session->userdata('username'));
			$this->load->view('Template/header',$data);
			$this->load->view('Content/user_profile',$data);
			$this->load->view('Template/footer');
		}else{
			redirect('pages_controller/view_home');
		}
	}

	public function view_otherUser($userid){
		if(!empty($this->session->userdata('username'))){
			$data['info']=$this->account_model->get_user2($userid);
			if(!empty($data['info'])){
				$data['title']=$data['info']->USERNAME."'s Profile";
				$data['products']=$this->account_model->getUserProducts($data['info']->USER_ID);
				$this->load->view('Template/header',$data);
				$this->load->view('Content/other_user',$data);
				$this->load->view('Template/login_footer');
			}else{
				redirect('auction_controller/view_products');
			}
		}else{
			redirect('pages_controller/view_home');
		}
	}


	public function check_answer(){
		if(!empty($this->session->userdata('username'))&&$this->input->get("answer",true)){
			$d=$this->account_model->answer_check($this->session->userdata('username'),$this->input->get("answer",true));
			$value="1";
			if(empty($d)){
				$value="0";
			}
			echo json_encode($value);
		}else{
			redirect('account_controller/view_login');
		}
	}


	public function edit_user(){
		if(!empty($this->session->userdata('username'))&&$this->input->post('fname')){
			//upload config
			$config['upload_path']="./assets/user_images/";
			$config['allowed_types']='jpg|jpeg|png';
			$config['file_name']=$this->session->userdata('username');
			$config['overwrite'] = TRUE;
			$this->load->library('upload',$config);
			$data=array('FIRST_NAME'=>$this->input->post('fname'),
				'LAST_NAME'=>$this->input->post('lname'),
				'CONTACT_NUMBER'=>$this->input->post('contact'),
				'ADDRESS'=>$this->input->post('address'));
			$this->account_model->update_user($this->session->userdata('username'),$data);
			if(!empty($_FILES['userfile']['name'])){
				if(!$this->upload->do_upload()){
					echo "<script>alert('Successfully Changed Your profile except the image(Not an image file)!');</script>";
				}else{
					$file_data=$this->upload->data();
					$image=base_url().'assets/user_images/'.$file_data['file_name'];
					$dat=array('USER_IMAGE'=>$image);
					$this->account_model->update_image($dat,$this->session->userdata('username'));
					echo "<script>alert('Successfully Made Changes!');</script>";
				}
			}else{
				echo "<script>alert('Successfully Made Changes!');</script>";
			}
		}
		echo "<script>window.location='".base_url()."account_controller/view_user_profile'</script>";
		
	}


	public function edit_userPassword(){
		if(!empty($this->session->userdata('username'))&&$this->input->post('oldpass')){
			$data=array('PASSWORD'=>do_hash($this->input->post('pass'),'md5'));
			if($this->account_model->check_userPassword($this->session->userdata('username'),do_hash($this->input->post('oldpass'),'md5'))){
				$this->account_model->update_user($this->session->userdata('username'),$data);
				echo "<script>alert('Changing your password successful!');</script>";		
			}else{
				echo "<script>alert('Changing your password because current password is incorrect!');</script>";
			}
		}
		echo "<script>window.location='".base_url()."account_controller/view_user_profile'</script>";
	}

	public function edit_otherUser(){
		if(!empty($this->session->userdata('admin')&&$this->input->post('type'))){
			$data=array('ACCOUNT_TYPE'=>$this->input->post('type'),'STATUS'=>$this->input->post('status'));
			$user=$this->input->post('user');
			if($this->account_model->update_user($user,$data)){
				echo "<script>alert('Successfully changed information');</script>";
			}else{
				echo "<script>alert('Failed to change information');</script>";
			}
			echo "<script>window.location='".base_url()."account_controller/view_adminUsers'</script>";
			//$this->view_adminUsers();
		}else{
			redirect('account_controller/view_user_profile');
		}
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
		$this->email->message('Verify your account with the six letter verification code "'.$code.'" to gain access in PBA HUB.');
		$this->email->send();
		return $this->email->print_debugger();
	}

	//Sends mail through gmail
	public function sendPassword($email,$pass){
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
		$this->email->subject('New Password');
		$this->email->message('Login your account with the six letter password "'.$pass.'" to gain access in PBA HUB and change it directly.');
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

	public function forgot_password(){
		if($this->input->post('email')){
			$res=$this->account_model->get_user3($this->input->post('email'));
			if(empty($res)){
				echo "<script>alert('No Such Email!');</script>";
			}else{
				$pass=random_string('alnum',6);
				$this->sendPassword($this->input->post('email'),$pass);
				$data=array('PASSWORD'=>do_hash($pass,'md5'));
				$this->account_model->update_user($res->USERNAME,$data);
				echo "<script>alert('Email Sent!');</script>";
			}
			echo "<script>window.location='".base_url()."account_controller/view_login'</script>";
		}else{
			redirect('account_controller/view_login');
		}
	}

}
?>