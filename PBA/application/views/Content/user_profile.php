</div>
<!--- START USER INFO-->
<div class="page-content">
    <hr class="hr-dotted" />
      <div class="small-10 small-centered medium-10 medium-centered large-7 large-centered columns">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 profile-elem-content text-center">
            <li>
              <img class="frame" src="<?php echo $info->USER_IMAGE;?>" width="200" height="200" alt="<?php echo $info->USERNAME;?>-portrait" /><br/>            
              <h1 class="user-name"><?php echo $info->FIRST_NAME;?> <?php echo $info->LAST_NAME;?></h1>  
            </li>
            <li class="user-elem-info user-elem-panel">            
              <p><strong>Username</strong> <span class="profile-elem-bar">|</span> <?php echo $info->USERNAME;?></p>
              <p><strong>Contact Number</strong> <span class="profile-elem-bar">|</span> <?php echo $info->CONTACT_NUMBER;?></p>
              <p><strong>Address</strong> <span class="profile-elem-bar">|</span> <?php echo $info->ADDRESS;?></p>
            </li>
        </ul>
      </div>
    <hr class="hr-dotted" />    
<!--- END USER INFO-->
    
      <!--- START USER PRODUCTS-->
      <div class="row">
        <a href="#" data-reveal-id="addProductModal" class="radius button">Add product</a>
        <div class="right">
        <a href="#" data-reveal-id="questionProfileModal" class="radius button">Edit profile</a>
        <a href="#" data-reveal-id="passwordModal" class="radius button">Change password</a>
      </div>
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
            
            <div class"individualProduct text-center">
              <input type="hidden" class="prod_id" value="<?php echo $product->PROD_ID;?>"/>
              <div class="product-element">
                <img class="profile-elem-img" src="<?php echo $product->IMAGE1;?>" />
              </div>
              <h4 class="user-prof-product-name">
                <?php
                  $append="";
                  if(strlen($product->PROD_NAME)>25){
                    $append="...";
                  }
                echo substr($product->PROD_NAME, 0,20).$append;?>
              </h4>
              <button class="button small disabled radius"><strong>Starting bid</strong> <span class="profile-elem-bar">|</span> <?php echo $product->START_BID;?></button>
              <?php if($product->PROD_STAT=='Closed'){?>
               <button class="button radius alert disabled"><strong>Status</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_STAT;?></button>
              <?php }else if($product->PROD_STAT=='On-going'){?>
                <button class="button radius success disabled"><strong>Status</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_STAT;?></button>
              <?php }else{?>
                <button class="button small radius disabled"><strong>Status</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_STAT;?></button>
              <?php }?>
              <div>
                <button onclick="window.location='<?php echo base_url().'auction_controller/view_product/'.$product->PROD_ID;?>'" class="button small radius">View</button>
                <button class="button small alert deleteProduct radius" data-reveal-id="deleteProdModal">Delete</button>
              </div>
            </div>
          <?php endforeach; echo "</div>";}?>
        </div>
      </div>
      <!-- END USER PRODUCTS-->
    
      <!--- START USER NOTIFICATIONS-->
      <div class="row">
        <div class="large-12 columns header notifs-block">     
            <h2 class="header-content">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Notifications</span>
            </h2>
        </div>
      </div>
      <div class="row row-content notifs" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <?php if(empty($notification)){?>
            <h1>No Notifications To Display</h1>                  
          <?php }else{foreach($notification as $notif):?>
            <div class="panel user-profile-notif-panel">
              <span><strong><?php echo $notif->MESSAGE;?></strong> <span class="profile-elem-bar">|</span> <?php echo date('F j,Y h:m:s A', strtotime($notif->TIMESTAMP));?></span>
            </div>
          <?php endforeach;}?>
        </div>
      </div>
      <!--- END USER NOTIFICATIONS-->  
</div>      

<!--- START QUESTON USER-->
 <div id="questionProfileModal" class="reveal-modal medium text-center" data-reveal>
    <h2>Please supply the correct answer to your secret question.</h2>
    <hr class="hr-dotted">
        <p class="secret-question form-text"><?php echo $info->SECRET_QUESTION;?></p> 
        <div class="small-11 small-centered medium-12 medium-centered large-9 large-centered columns">
          <p class="form-notif" id="notif"></p>
          <input class="text-center user-profile-answer-field" type="password" id="answer" name="answer" placeholder="Answer" aria-label="Answer" maxlength="20" required />
          <div class="verify-btn">
              <button id="answerButton" class="button expand small">Submit</button>
          </div>
        </div>  
    <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END QUESTION USER -->

<!--- START EDIT USER-->
<div id="editProfileModal" class="reveal-modal small" data-reveal>
  <form id="ep" action="<?php echo base_url();?>account_controller/edit_user" method="post" enctype='multipart/form-data'>       
      <div class="small-12 medium-12 large-12 columns form-text">
        <h2>Personal Information</h2>
        <hr class="hr-dotted" />
        <label>
          First name
          <input type="text" name="fname" value="<?php echo $info->FIRST_NAME;?>" aria-label="First Name" required pattern=".{4,40}" title="4 to 40 Characters" maxlength="40"/>
        </label>
        <label>
          Last name
          <input type="text" name="lname" value="<?php echo $info->LAST_NAME;?>" aria-label="Last Name" required pattern=".{4,30}" title="4 to 30 Characters" maxlength="30"/>
        </label>
        <label>
          Contact number
          <input type="text" name="contact" value="<?php echo $info->CONTACT_NUMBER;?>" aria-label="Contact Number" required pattern="[0][9][0-9]{9}" title="11 Characters" maxlength="11"/>
        </label>
        <label>
          Address
          <input type="text" name="address" value="<?php echo $info->ADDRESS;?>" aria-label=" Address" required maxlength="100"/>
        </label>

        <label>
          Profile photo <span>(only accepts jpeg/jpg/png files)</span>
          <input type="file" accept="image/jpg, image/jpeg, image/png" name="userfile" value="Change Photo" class="panel-orange extend form-button button [tiny small large]"/>
        </label>
      </div>  
      <hr class="hr-dotted" />                   
      <div class="small-12 medium-12 large-12 columns">  
        <div class="btn">
          <button type="submit" class="expand form-button button">Submit</button>  
        </div>   
      </div>       
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END EDIT USER -->

<!--- START CHANGE PASSWORD USER-->
<div id="passwordModal" class="reveal-modal small medium-12 medium-centered columns" data-reveal>
  <form action="<?php echo base_url();?>account_controller/edit_userPassword" method="post" enctype='multipart/form-data'>      
      <div class="signup-account-info">
        <h2>Account Information</h2>
        <hr class="hr-dotted" />
        <label>
          Current Password
          <input class="text-center" type="password" name="oldpass"  aria-label="Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
        </label>
        <label>
          New Password
          <input class="text-center" type="password" name="pass" id="pass" aria-label="Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
        </label>
        <label>
          Confirm Password
          <input class="text-center" type="password" name="cpass" id="cpass" aria-label="Confirm Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
        </label>
      </div>                    
      <div class="submit-btn">
        <button type="submit" class="expand form-button button">Submit</button>  
      </div>   
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END CHANGE PASSWORD USER -->

<!--- START ADD PRODUCT-->
<div id="addProductModal" class="reveal-modal" data-reveal>
  <form id="aprod" action="<?php echo base_url();?>auction_controller/addProduct" method="post" enctype='multipart/form-data'>
      <h2>Product Information</h2>
      <hr class="hr-dotted">
      <div class="large-11 large-centered columns">
            <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-2 form-text">
                  <li>
                        <label>
                          Product Name
                          <input type="text" name="pname" required maxlength="40" pattern=".{4,40}" title="4 to 40 Characters"/>
                        </label>
                        <label for="">
                          Description
                          <textarea name="pdesc" required maxlength="200" rows="5"></textarea>
                        </label>
                        
                        <div class="small-5 medium-5 large-5 columns">
                          <label>
                              Product type
                              <select name="pcat">
                                  <option value="Jersey">Jersey</option>
                                  <option value="Shoes">Shoes</option>
                                  <option value="Shorts">Shorts</option>
                                  <option value="Socks">Socks</option>
                                  <option value="Accessories">Accessories</option>
                              </select>
                          </label>
                        </div>
                        
                        <div class="small-7 medium-7 large-7 columns">
                          <label>
                              Age Of Product 
                              <ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2">                         
                                  <li>
                                    <input type="number" name="page" required min="1"/>
                                  </li>
                                  <li class="small-block-grid-1 medium-block-grid-1 large-block-grid-1">
                                      <select name="pagename" class="product-age-cat">
                                        <option value="Day">day(s)</option>
                                        <option value="Week">week(s)</option>
                                        <option value="Month">month(s)</option>
                                        <option value="Year">year(s)</option>
                                      </select>
                                  </li>                      
                              </ul>
                          </label>
                        </div>
                  </li>
                  <li class="text-center">                    
                    <div class="small-12 medium-12 large-12 columns">
                        <div class="small-8 small-centered medium-8 medium-centered large-8 large-centered columns">
                          <label>
                            Starting bid      
                            <input type="number" name="pbid" required min="1"/>
                          </label>
                        </div>
                        <label>
                            5 product images <span>(only accepts jpeg/jpg/png files)</span>                  
                                <input id="test1" type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="panel-orange choose-img-panel mfile1"/>
                                <input id="test2" type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="panel-orange choose-img-panel mfile2"/>
                                <input id="test3" type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="panel-orange choose-img-panel mfile"/>
                                <input id="test4" type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="panel-orange choose-img-panel mfile"/>
                                <input id="test5" type="file" name="userfile[]"  accept="image/jpg, image/jpeg, image/png" class="panel-orange choose-img-panel mfile"/>
                        </label>
                    </div>
                  </li>
                </ul>  
                <hr class="hr-dotted" />
                <div class="small-12 large-12 medium-12 columns">
                  <center> 
                    <button type="submit" class="form-button button [tiny small large] add-btn">Add</button> 
                    <button id="cancelButton" class="alert button [tiny small large] cancel-btn">Cancel</button>  
                  </center>
                </div>
      </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END ADD PRODUCT -->

<!--- START QUESTON USER DELETE PRODUCT-->
<div id="deleteProdModal" class="reveal-modal small text-center lower-bid-modal" data-reveal>
  <input type="hidden" name="prodIdModal" id="prodIdModal"/>
  <p>Are you sure you want to delete <strong id="delProdName"></strong>?</p> 
  <button id="yesButton" class="button small">Yes</button>
  <button id="noButton" class="button small alert">No</button>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END QUESTION USER DELETE PRODUCT-->

<script>
$(document).ready(function(){
  $(".notifs-block").click(function(){
    $(".notifs").slideToggle(1500);
  });

  $('#answerButton').click(function(){
    $.getJSON("<?php echo base_url();?>account_controller/check_answer/",{answer:$("#answer").val()},success=function(data){
      if(data=="1"){
        $("#notif").html("");
        $('#editProfileModal').foundation('reveal', 'open');
      }else{
        $("#notif").html("Invalid answer. Please try again.");
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
    $("#delProdName").text($(this).parent().siblings(".user-prof-product-name").text());
    $("#prodIdModal").val($(this).parent().siblings(".prod_id").val());
  });

  $("#noButton").click(function(){
    $('#deleteProdModal').foundation('reveal', 'close');
  });

  $("#yesButton").click(function(){
    $.ajax({
      url:'<?php echo base_url();?>auction_controller/delProduct/',
      type:'post',
      data:{'id':$(this).siblings("#prodIdModal").val()},
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

  $(".add-btn").click(function(){
    $( "#aprod" ).validate({
      rules: {
        "userfile[]": { 
          accept: "image/png, image/jpg, image/jpeg"
        }
      },

      messages:{
        "userfile[]": { 
          accept: "Only accepts png / jpg / jpeg files"
        }
      } 
    });
  });

  $( "#ep" ).validate({
    rules: {
      field: {
        required: true,
        accept: "image/png, image/jpg, image/jpeg"
      }
    },
    messages:{
      userfile: { 
        accept: "Only accepts png / jpg / jpeg files"
      }
    } 
  });

});
</script>