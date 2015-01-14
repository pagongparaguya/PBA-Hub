<?php
class Auction_controller extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('auction_model');
		$this->load->model('account_model');
		header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
	}

	public function index(){
		redirect('auction_controller/view_products');
	}

	public function view_products(){
		if(!empty($this->session->userdata('username'))){
			$data['title']='Products Page';
			$data['products']=$this->auction_model->getAllProducts();
			$this->load->view('Template/header',$data);
			$this->load->view('Content/products_page',$data);
			$this->load->view('Template/login_footer');
		}else{
			echo "<script>alert('Login First!');</script>";
			echo "<script>window.location='".base_url()."account_controller/view_login'</script>";
		}
	}

	public function view_product($productid){
		if(!empty($this->session->userdata('username'))){
			$data['product']=$this->auction_model->getProductInfo($productid);
			if(!empty($data['product'])){
				$data['title']=$data['product']->PROD_NAME;
				$data['user']=$this->account_model->get_user2($data['product']->USER_ID);
				$data['bid']=$this->auction_model->getBid($productid);
				$data['comment']=$this->auction_model->getComment($productid);
				$this->load->view('Template/header',$data);
				$this->load->view('Content/specific_product_page',$data);
				$this->load->view('Template/footer');
			}else{
				redirect('auction_controller/view_products');
			}
		}else{
			redirect('account_controller/view_login');
		}
	}

	public function addProduct(){
		if(!empty($this->session->userdata('username'))&&$this->input->post('pname')){
			$user=$this->account_model->get_user($this->session->userdata('username'));
			$data=array('USER_ID'=>$user->USER_ID,'START_BID'=>$this->input->post('pbid'),'PROD_NAME'=>$this->input->post('pname'),'PROD_DES'=>$this->input->post('pdesc'),'PROD_CAT'=>$this->input->post('pcat'),'PROD_AGE_NAME'=>$this->input->post('pagename'),'PROD_AGE_VAL'=>$this->input->post('page'));
			
			if($this->auction_model->insertProduct($data)){
				$prodID=mysql_insert_id();
				if(!empty($_FILES['userfile']['name'][0])){
					$arr=array("http://localhost/PBA/assets/product_images/sample.jpg","http://localhost/PBA/assets/product_images/sample.jpg","http://localhost/PBA/assets/product_images/sample.jpg","http://localhost/PBA/assets/product_images/sample.jpg","http://localhost/PBA/assets/product_images/sample.jpg");
					$config=array('upload_path'=>'./assets/product_images/','allowed_types'=>'jpeg|jpg|png');
					$this->load->library('upload',$config);
				    $files = $_FILES;
				    $cpt = count($_FILES['userfile']['name']);
				    $count=0;
				    for($i=0; $i<$cpt; $i++){
				    	if($i<5){
					        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
					        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
					        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
					        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
					        $_FILES['userfile']['size']= $files['userfile']['size'][$i];

						    if($this->upload->do_upload()){
						    	$dat = $this->upload->data();
						    	$arr[$count]=base_url().'assets/product_images/'.$dat['file_name'];
						    	$count++;
						    }else{
						    	echo "<script>alert('File ".$files['userfile']['name'][$i]." is not an image.')</script>";
						    }
					    }else{
					    	echo "<script>alert('More than 5 files selected');</script>";
					    }
				    }

			    	$img=array('IMAGE1'=>$arr[0],'IMAGE2'=>$arr[1],'IMAGE3'=>$arr[2],'IMAGE4'=>$arr[3],'IMAGE5'=>$arr[4]);
			    	$this->auction_model->insertImage($img,$prodID);
				}

				echo "<script>alert('Add Product Successful!');</script>";
			}else{
				echo "<script>alert('Add Product Failed!');</script>";
			}
			echo "<script>window.location='".base_url()."account_controller/view_user_profile'</script>";
			//$this->view_products(); or to user profile
		}else{
			echo "<script>window.location='".base_url()."account_controller/view_user_profile'</script>";
		}
	}


	public function delProduct($prodid){
		if(!empty($this->session->userdata('username'))){
			$user=$this->account_model->get_user($this->session->userdata('username'));
			
			if(!empty($this->auction_model->getProductInfoWithUserId($prodid,$user->USER_ID))){
				$product=$this->auction_model->getProductInfo($prodid);
				$arr=array($product->IMAGE1,$product->IMAGE2,$product->IMAGE3,$product->IMAGE4,$product->IMAGE5);
				if($this->auction_model->deleteProduct($prodid,$user->USER_ID)){
					$this->auction_model->deleteComment($prodid);
					$this->auction_model->deleteBid($prodid);
					for($i=0;$i<5;$i++){
						$this->deleteFile(str_replace("http://localhost/PBA/assets/product_images/", '', $arr[$i]));
					}
					//send notification to bidders
					echo json_encode("1");
				}else{
					echo json_encode("0");
				}
			}else{
				echo "<script>window.location='".base_url()."account_controller/view_user_profile'</script>";
			}
		}else{
			redirect('pages_controller/view_home');
		}
	}

	public function delProductAdmin($prodid){
		if(!empty($this->session->userdata('admin'))){
			if(!empty($this->auction_model->getProductInfo($prodid))){
				$product=$this->auction_model->getProductInfo($prodid);
				$arr=array($product->IMAGE1,$product->IMAGE2,$product->IMAGE3,$product->IMAGE4,$product->IMAGE5);
				if($this->auction_model->deleteProductAdmin($prodid)){
					$this->auction_model->deleteComment($prodid);
					$this->auction_model->deleteBid($prodid);
					for($i=0;$i<5;$i++){
						$this->deleteFile(str_replace("http://localhost/PBA/assets/product_images/", '', $arr[$i]));
					}
					//send notification to bidders
					echo json_encode("1");
				}else{
					echo json_encode("0");
				}
			}else{
				echo "<script>window.location='".base_url()."account_controller/view_adminProducts'</script>";
			}
		}else{
			redirect('account_controller/view_user_profile');
		}
	}

	public function deleteFile($pa){
		if($pa!='sample.jpg'){
			$path = realpath(APPPATH . '../assets/product_images/'.$pa);
			unlink($path);
		}
	}

	public function sendNotification($username,$message){
		date_default_timezone_set('Asia/Singapore');
		$data=array('USERNAME'=>$username,'MESSAGE'=>$message,'TIMESTAMP'=>date("Y-m-d H:i:s"));
		$this->auction_model->set_notifications($data);
	}

	public function changeOngoing(){
		if(!empty($this->session->userdata('username'))){
			$user=$this->account_model->get_user($this->session->userdata('username'));
			$prodid=$this->input->post('id');
			if(!empty($this->auction_model->getProductInfoWithUserId($prodid,$user->USER_ID))){
				$d=$this->auction_model->getProductInfoWithUserId($prodid,$user->USER_ID);
				if($d->PROD_STAT=='Pending'){
					$data=array("PROD_STAT"=>'On-going');
					if($this->auction_model->updateProduct($data,$prodid)){
						print "Change to On-going Successful!";
					}else{
						print "Change to On-going Failure!";
					}
				}else{
					print "Change to On-going Failure!!";
				}
			}else{
				echo "<script>window.location='".base_url()."account_controller/view_user_profile'</script>";
			}
		}else{
			redirect('pages_controller/view_home');
		}
	}

	public function changeClosed(){
		if(!empty($this->session->userdata('username'))){
			$user=$this->account_model->get_user($this->session->userdata('username'));
			$prodid=$this->input->post('id');
			if(!empty($this->auction_model->getProductInfoWithUserId($prodid,$user->USER_ID))){
				$d=$this->auction_model->getProductInfoWithUserId($prodid,$user->USER_ID);
				if($d->PROD_STAT=='On-going'){
					$data=array("PROD_STAT"=>'Closed');
					if($this->auction_model->updateProduct($data,$prodid)){
						//send notification to bidders (winner and losers)
						echo "Change to Closed Successful!";
					}else{
						echo "Change to Closed Failure!";
					}
				}else{
					echo "Change to Closed Failure!!";
				}
			}else{
				echo "<script>window.location='".base_url()."account_controller/view_user_profile'</script>";
			}
		}else{
			redirect('pages_controller/view_home');
		}
	}

	public function getMaximumBid(){
		if(!empty($this->session->userdata('username'))&&$this->input->post('id')){
			$bid=$this->auction_model->getMaxBid($this->input->post('id'));
			echo $bid->BID_AMT;
		}else{
			redirect('account_controller/view_user_profile');
		}
	}

	public function addBid(){
		if(!empty($this->session->userdata('username'))&&$this->input->post('prodId')){//user should be logged in
			$product=$this->auction_model->getProductInfo($this->input->post('prodId'));
			if(!empty($product)&&$product->PROD_STAT=='On-going'){//if the product exist and the product should be on going to place a bid
				$bid=$this->auction_model->getMaxBid($product->PROD_ID);
				if($bid->BID_AMT==''){
					$max=$product->START_BID-1;
				}else{
					$max=$bid->BID_AMT;
				}
				if($this->input->post('bidValue')>$max){//bid should be greater than the latest bid
					date_default_timezone_set('Asia/Singapore');
					$user=$this->account_model->get_user($this->session->userdata('username'));
					$data=array("PROD_ID"=>$product->PROD_ID,"USER_ID"=>$user->USER_ID,"BID_AMT"=>$this->input->post('bidValue'),"DATE_TIME_ADDED"=>date("Y-m-d H:i:s"));
					$this->auction_model->insertBid($data);
					echo "<script>alert('Bid Successful!');</script>";
				}else{//if bid is not greater than the latest bid
					echo "<script>alert('Cant bid lower than latest/starting bid please refresh.');</script>";
				}
				echo "<script>window.location='".base_url()."auction_controller/view_product/".$product->PROD_ID."'</script>";
			}else{//if there is no product or is not ongoing
				echo "<script>alert('Cant add bid because it is not bidding time or product is already deleted.');</script>";
			}
			echo "<script>window.location='".base_url()."auction_controller/view_products/'</script>";
		}else{
			redirect('account_controller/view_user_profile');
		}
	}

	public function deleteBid(){
		if(!empty($this->session->userdata('username'))&&$this->input->post('id')){
			$user=$this->account_model->get_user($this->session->userdata('username'));
			$bid=$this->auction_model->getSpecificBid($this->input->post('id'));
			if(!empty($bid)&&$bid->USER_ID==$user->USER_ID){//if the bid is there and the bid is the user's
				$product=$this->auction_model->getProductInfo($bid->PROD_ID);
				if(!empty($product)&&$product->PROD_STAT=='On-going'){//if the product exist and is on going
					$this->auction_model->deleteSpecificBid($bid->BID_ID);
					echo "Delete Bid Successful!";
				}else{
					echo "Cant delete bid because it is not bidding time or product is already deleted.";	
				}
			}else{
				echo "Your Bid doesn't exist.";
			}
		}else{
			redirect('account_controller/view_user_profile');
		}
	}
}
?>