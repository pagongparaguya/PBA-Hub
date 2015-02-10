<!--- START USER INFO-->

<div class="page-content">
    <div class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 large-centered profile-content">
        <div class="left-content">
          <img style="border:3px solid black;" src="<?php echo $info->USER_IMAGE;?>" width="250" height="200" alt="<?php echo $info->USERNAME;?>-portrait" /><br/>
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" /><br/>
          <h2 style="color:white;">HALL OF FAME</h2>
          <a href="#" data-reveal-id="addProductModal" class="radius button">Add Product</a>
        </div>
        <div class="right-content">
          <a href="#" data-reveal-id="questionProfileModal" class="radius button">Customize Profile</a>
          <a href="#" data-reveal-id="passwordModal" class="radius button">Change Password</a>
            <div class="profile-text">
              <h4 style="color:white;">Username:  <?php echo $info->USERNAME;?></h4>
              <h4 style="color:white;">Full Name:  <?php echo $info->FIRST_NAME;?> <?php echo $info->LAST_NAME;?></h4>
              <h4 style="color:white;">Contact Number: <?php echo $info->CONTACT_NUMBER;?></h4>
              <h4 style="color:white;">Address: <?php echo $info->ADDRESS;?></h4>
            </div>
        </div>
    </div>
<!--- END USER INFO-->
    
      <!--- START USER PRODUCTS-->
      <div class="row">
        <div class="large-12 columns header">     
            <h2 class="header-content">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Products</span>
            </h2>
        </div>
      </div>          
      <div class="row row-content">
        <div class="large-12 columns">
          <?php if(empty($products)){?>
            <h1>No Products To Display</h1>                
          <?php }else{ echo "<div class='panel' id='productPanel'>"; foreach($products as $product):?>
            
            <div class"individualProduct">
              <input type="hidden" class="prod_id" value="<?php echo $product->PROD_ID;?>"/>
              <div class="product-element">
                <img style="margin:5px auto;" src="<?php echo $product->IMAGE1;?>" width="200" height="120"/>
              </div>
              <h2 class="product-name">
                <?php
                  $append="";
                  if(strlen($product->PROD_NAME)>25){
                    $append="...";
                  }
                echo substr($product->PROD_NAME, 0,20).$append;?>
              </h2>
              <button class="button tiny disabled round">Starting Bid:<?php echo $product->START_BID;?></button>
              <?php if($product->PROD_STAT=='Closed'){?>
               <button class="button tiny round alert disabled">Status:<?php echo $product->PROD_STAT;?></button>
              <?php }else if($product->PROD_STAT=='On-going'){?>
                <button class="button tiny round success disabled">Status:<?php echo $product->PROD_STAT;?></button>
              <?php }else{?>
                <button class="button tiny round disabled">Status:<?php echo $product->PROD_STAT;?></button>
              <?php }?>
              <div>
                <button onclick="window.location='<?php echo base_url().'auction_controller/view_product/'.$product->PROD_ID;?>'" class="button tiny">View</button>
                <button class="button tiny alert deleteProduct" data-reveal-id="deleteProdModal">Delete</button>
              </div>
            </div>
          <?php endforeach; echo "</div>";}?>
        </div>
      </div>
      <!-- END USER PRODUCTS-->
    
      <!--- START USER NOTIFICATIONS-->
      <div class="row">
        <div class="large-12 columns header">     
            <h2 class="header-content">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Notifications</span>
            </h2>
        </div>
      </div>
      <div class="row row-content">
        <div class="large-12 columns">
          <?php if(empty($notification)){?>
            <h1>No Notifications To Display</h1>                  
          <?php }else{foreach($notification as $notif):?>
            <div class="panel">
              <h4><?php echo $notif->MESSAGE;?><br/><?php echo date('F j,Y h:m:s A', strtotime($notif->TIMESTAMP));?></h4>
            </div>
          <?php endforeach;}?>
        </div>
      </div>
      <!--- END USER NOTIFICATIONS-->  
</div>      

  <!--- START QUESTON USER-->
   <div id="questionProfileModal" class="reveal-modal small" data-reveal>
    <h2>Answer Of Your Secret Question <?php echo $this->session->userdata('username');?>!</h2>
    <div class="small-8 large-centered columns">
          <center> 
              <h5><?php echo $info->SECRET_QUESTION;?></h5> 
              <center><span style="color:red;" id="notif"></span></center>
              <br> 
              <input type="password" id="answer" name="answer" placeholder="Answer" aria-label="Answer" maxlength="20" required>
          </center>
          <div class="verify-btn">
            <button id="answerButton" class="expand button [tiny small large]">Answer</button>
          </div>
    </div>
    <a class="close-reveal-modal">&#215;</a>
  </div>
  <!--- END QUESTION USER -->

<!--- START EDIT USER-->
<div id="editProfileModal" class="reveal-modal small" data-reveal>
  <form action="<?php echo base_url();?>account_controller/edit_user" method="post" enctype='multipart/form-data'>      
    <fieldset>
      <legend style="color:blue;">Edit Profile</legend>  
      <div class="small-12 large-12 medium-12 columns">
        <h2>Personal Information</h2>
        <b>First Name: </b><input type="text" name="fname" value="<?php echo $info->FIRST_NAME;?>" aria-label="First Name" required pattern=".{4,40}" title="4 to 40 Characters" maxlength="40"/>
        <b>Last Name: </b><input type="text" name="lname" value="<?php echo $info->LAST_NAME;?>" aria-label="Last Name" required pattern=".{4,30}" title="4 to 30 Characters" maxlength="30"/>
        <b>Contact Number: </b><input type="text" name="contact" value="<?php echo $info->CONTACT_NUMBER;?>" aria-label="Contact Number" required pattern=".{11}" title="11 Characters" maxlength="11"/>
        <b>Address: </b><input type="text" name="address" value="<?php echo $info->ADDRESS;?>" aria-label=" Address" required maxlength="100"/>
        <label style="color:black;font-weight:700;font-size:16px;">Profile Photo File: (Only Accepts jpeg/jpg/png files)</label>
        <input type="file" accept="image/jpg, image/jpeg, image/png" name="userfile" value="Change Photo" class="extend form-button button [tiny small large]"/>
      </div>                     
    </fieldset>
    <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
      <div class="btn">
        <button type="submit" class="expand form-button button [tiny small large]">Submit</button>  
      </div>   
    </div>       
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END EDIT USER -->



<!--- START CHANGE PASSWORD USER-->
<div id="passwordModal" class="reveal-modal small small-12 medium-12 columns" data-reveal>
  <form action="<?php echo base_url();?>account_controller/edit_userPassword" method="post" enctype='multipart/form-data'>      
    <fieldset>
      <legend style="color:blue;">Change Password</legend>  
      <div class="small-12 large-12 medium-12 columns signup-account-info">
        <h2>Account Information</h2>
        <b>Current Password: </b><input type="password" name="oldpass"  aria-label="Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
        <b>New Password: </b><input type="password" name="pass" id="pass" aria-label="Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
        <b>Confirm Password: </b><input type="password" name="cpass" id="cpass" aria-label="Confirm Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
      </div>                    
    </fieldset>
    <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
      <div class="submit-btn">
        <button type="submit" class="expand form-button button [tiny small large]">Submit</button>  
      </div>   
    </div>       
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END CHANGE PASSWORD USER -->


<!--- START ADD PRODUCT-->
<div id="addProductModal" class="reveal-modal" data-reveal>
  <form id="aprod" action="<?php echo base_url();?>auction_controller/addProduct" method="post" enctype='multipart/form-data'>
    <h2>Product Information</h2>
    <div class="small-12 large-6 medium-6 columns">
      <b>Product Name </b><input type="text" name="pname" required maxlength="40" pattern=".{4,40}" title="4 to 40 Characters"/>
      <b>Description </b><textarea name="pdesc" required maxlength="200" rows="5"></textarea>
      <b>Category </b>
      <select name="pcat">
        <option value="Jersey">Jersey</option>
        <option value="Shoes">Shoes</option>
        <option value="Shorts">Shorts</option>
        <option value="Socks">Socks</option>
        <option value="Accessories">Accessories</option>
      </select>
      
      <div class="small-12 medium-6 large-12">
            <div style="display: inline-flex">
            
                  <b>Age Of Product </b><div><input type="number" name="page" required min="1"/> </div>        
               
                  <div class="small-6 medium-3 large-6">
                      <select name="pagename">
                        <option value="Day">Day/s</option>
                        <option value="Week">Week/s</option>
                        <option value="Month">Month/s</option>
                        <option value="Year">Year/s</option>
                      </select>
                  </div>
            </div>
      </div>
    </div>
    <div class="small-12 large-6 medium-6 columns">
      <b>Starting Bid </b><input type="number" name="pbid" required min="1"/>
      <label style="color:black;font-weight:700;font-size:16px;">5 Product Photo Files (Only Accepts jpeg/jpg/png files)</label>
      <input type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
      <input type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
      <input type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
      <input type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
      <input type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
    </div>  
    <div class="small-12 large-12 medium-12 columns">
      <center> 
        <button type="submit" class="form-button button [tiny small large] add-btn">Add</button> 
        <button id="cancelButton" class="alert button [tiny small large] cancel-btn">Cancel</button>  
      </center>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END ADD PRODUCT -->

  <!--- START QUESTON USER DELETE PRODUCT-->
  <div id="deleteProdModal" class="reveal-modal tiny" data-reveal>
    <div class="small-8 large-centered columns">
      <input type="hidden" name="prodIdModal" id="prodIdModal"/>
      <center> 
        <h5>Delete Product <b id="delProdName"> </b>?</h5> 
        <button id="yesButton" class="button tiny">Yes</button>
        <button id="noButton" class="button tiny alert">No</button>
      </center>
    </div>
    <a class="close-reveal-modal">&#215;</a>
  </div>
  <!--- END QUESTION USER DELETE PRODUCT-->

  <script>
  $(document).ready(function(){
    $('#answerButton').click(function(){
      $.getJSON("<?php echo base_url();?>account_controller/check_answer/",{answer:$("#answer").val()},success=function(data){
        if(data=="1"){
          $("#notif").html("");
          $('#editProfileModal').foundation('reveal', 'open');
        }else{
          $("#notif").html("Wrong Answer!");
        }
      });
    });

    $('.submit-btn').click(function(event){
      if($('#pass').val()!=$('#cpass').val()){
        alert("Password/Confirm Password Doesn't Match");
        event.preventDefault();
      }
    });

    $('#cancelButton').click(function(){
      $('#addProductModal').foundation('reveal', 'close');
    });

    $("#productPanel").on('click','.deleteProduct',function(){
      $("#delProdName").text($(this).parent().siblings(".product-name").text());
      $("#prodIdModal").val($(this).parent().siblings(".prod_id").val());
    });

    $("#noButton").click(function(){
      $('#deleteProdModal').foundation('reveal', 'close');
    });

    $("#yesButton").click(function(){
      $.ajax({
        url:'<?php echo base_url();?>auction_controller/delProduct/',
        type:'post',
        data:{'id':$(this).parent().siblings("#prodIdModal").val()},
        success:function(data,status){
          alert(data);
          window.location.reload(true);
        }
      });
    });

    $('#productPanel').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
    });

    
    $( "#aprod" ).validate({
      rules: {
        field: {
          required: true,
          accept: "image/png, image/jpg, image/jpeg"
        }
      }
    });

  });
  </script>