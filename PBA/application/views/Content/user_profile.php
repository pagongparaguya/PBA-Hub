<!--- START USER INFO-->
<div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams" style="background-color:blue;color:white;">USER PROFILE</h1>
      </div>
    </div>
<div class="row row-content">
  <ul class="team-row small-block-grid-2 medium-block-grid-2 large-block-grid-2 teams">
      <li>
        <img style="border:3px solid black;" src="<?php echo $info->USER_IMAGE;?>" width="250" height="200" alt="<?php echo $info->USERNAME;?>-portrait" /><br/>
        <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
        <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
        <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
        <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
        <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" /><br/>
        <h2 style="color:white;">HALL OF FAME</h2>
        <a href="#" data-reveal-id="addProductModal" class="radius button">ADD PRODUCT</a>
      </li>
      <li>
      <a href="#" data-reveal-id="questionProfileModal" class="radius button">CUSTOMIZE PROFILE</a>
      <h3 style="color:white;"><?php echo $info->LAST_NAME;?>,<?php echo $info->FIRST_NAME;?></h3>
   	  <h3 style="color:white;">Contact Number: <?php echo $info->CONTACT_NUMBER;?></h3>
   	   <h3 style="color:white;">Address: <?php echo $info->ADDRESS;?></h3>
   	   <h1 id="try"></h1>
      </li>
  </ul>
</div>
<!--- END USER INFO-->

<!--- START USER PRODUCTS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams" style="background-color:blue;color:white;">PRODUCTS</h1>
      </div>
    </div>
    <div class="row row-content">
      <ul class="team-row small-block-grid-4 medium-block-grid-4 large-block-grid-4 teams">
      	<div class="panel">
      		<h1>No Products To Display</h1>
      	</div>
      </ul>
    </div>
	<!-- END USER PRODUCTS-->

	<!--- START USER NOTIFICATIONS-->
	<div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams" style="background-color:blue;color:white;">NOTIFICATIONS</h1>
      </div>
    </div>
    <div class="row row-content">
      <ul class="team-row small-block-grid-4 medium-block-grid-4 large-block-grid-4 teams">
      </ul>
    </div>
    <!--- END USER NOTIFICATIONS-->

	<!--- START QUESTON USER-->
	 <div id="questionProfileModal" class="reveal-modal large" data-reveal>
	  <h2>Answer Of Your Secret Question <?php echo $this->session->userdata('username');?>!</h2>
	  <div class="small-6 large-centered columns">
	        <center> 
	          <fieldset>
	            <legend style="color:blue;"><?php echo $info->SECRET_QUESTION;?></legend> 
	            <center><span style="color:red;" id="notif"></span></center>
	            <br> 
	            <input type="text" id="answer" name="answer" placeholder="Answer" aria-label="Answer" maxlength="20" required>
	          </fieldset>
	        </center>
	        <div class="verify-btn">
	          <button id="answerButton" class="expand button [tiny small large]">Answer</button>
	        </div>
      </div>
	  <a class="close-reveal-modal">&#215;</a>
	</div>
	<!--- END QUESTION USER -->

	<!--- START EDIT USER-->
 	<div id="editProfileModal" class="reveal-modal large" data-reveal>
  		<form action="<?php echo base_url();?>account_controller/edit_user" method="post" enctype='multipart/form-data'>      
            <fieldset>
                <legend style="color:blue;">Edit Profile</legend>  
                <br>
                <div class="small-12 large-6 medium-6 columns">
                    <h2>Personal Information</h2>
                    <b>First Name: </b><input type="text" name="fname" value="<?php echo $info->FIRST_NAME;?>" aria-label="First Name" required maxlength="40"/>
                    <b>Last Name: </b><input type="text" name="lname" value="<?php echo $info->LAST_NAME;?>" aria-label="Last Name" required maxlength="30"/>
                    <b>Contact Number: </b><input type="text" name="contact" value="<?php echo $info->CONTACT_NUMBER;?>" aria-label="Contact Number" required maxlength="11"/>
                    <b>Address: </b><input type="text" name="address" value="<?php echo $info->ADDRESS;?>" aria-label=" Address" required maxlength="100"/>
                    <input type="file" name="userfile" value="Change Photo" class="extend form-button button [tiny small large]"/>
                </div>
	        	<div class="small-12 large-6 medium-6 columns signup-account-info">
                    <h2>Account Information</h2>
                    <b>New Password: </b><input type="password" name="pass" id="pass" placeholder="New Password" aria-label="Password" required maxlength="20"/>
                    <b>Confirm Password: </b><input type="password" name="cpass" id="cpass" placeholder="Confirm Password" aria-label="Confirm Password" required maxlength="20"/>
                </div>                      
            </fieldset>
            
            <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
                <div class="login-btn submit-btn">
                    <button type="submit" class="expand form-button button [tiny small large]">Submit</button>  
        </form>  
                </div>              
            </div> 
		<a class="close-reveal-modal">&#215;</a>
	</div>
	<!--- END EDIT USER -->


	<script>
	$(document).ready(function(){
		$("#answerButton").click(function(){
			$.getJSON("<?php echo base_url();?>account_controller/check_answer/"+$("#answer").val(),success=function(data){
				if(data=="1"){
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
	});
	</script>
