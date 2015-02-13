</div>
<!--- START OF LOGIN FORM -->
  <div class="small-12 medium-8 medium-centered large-6 large-centered columns">
      <form action="<?php echo base_url();?>account_controller/login" method="post">      
          <div class="medium-11 medium-10 medium-centered large-9 large-centered columns">                      
              <div class="form-elems">
                <h4 class="login-wlcm-msg">Welcome to <span>PBA Hub</span></h4>
                <hr />   
                  
                <?php if(!empty($message)): ?>
                  <div data-alert class="alert-box alert login-error">
                    <?php echo $message;?>
                    <a href="#" class="close">&times;</a>
                  </div>
                <?php endif; ?>

                <label for="username">Username</label>
                <input class="text-center" id="username" class="login-input-flds" type="text" name="user" aria-label="Username" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20" />
                
                <div class="pword-field">
                  <label for="password">Password</label>                
                  <input class="text-center" id="password" class="login-input-flds pwor d-field" type="password" name="pass" aria-label="Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20" />
                </div>
                
                <a href="#" class="fget-pword" data-reveal-id="forgotModal">Forgot Password?</a>
                <button type="submit" class="login-btn expand form-button button">Login</button> 
              </div>
          </div>
      </form>
  </div>   
<!--- END OF LOGIN FORM -->
<!--- MODAL FOR CODE -->
<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Verify Your Account, <?php echo $user;?>!</h2>
    <div class="small-6 large-centered columns">
      <form action="<?php echo base_url();?>account_controller/check_code" method="post">
        <center> 
          <fieldset>
            <legend style="color:blue;">ACCOUNT VERIFICATION</legend> 
            <center><span style="color:red;"><?php echo $verification;?></span></center>
            <br> 
            <input type="hidden" name="user" value="<?php echo $user;?>" placeholder="Username" aria-label="Username">
            <input type="text" name="code" placeholder="Code" maxlength="6" required pattern=".{6}" title="6 Characters" aria-label="Code">
          </fieldset>
        </center>
        <div class="verify-btn">
          <button type="submit" class="expand form-button button [tiny small large]">Verify</button>
        </div>
      </form>
      <a class="close-reveal-modal">&#215;</a>
    </div>  
</div>
<!--- END MODAL FOR CODE -->
<!--- MODAL FOR FORGOT PASSWORD -->
<div id="forgotModal" class="reveal-modal medium" data-reveal>
  <div class="small-12 small-centered medium-12 medium-centered large-8 large-centered columns text-center">    
    <form action="<?php echo base_url();?>account_controller/forgot_password" method="post">
            
            <h2>Password Resend</h2>
            <hr class="hr-dotted">
            <center><span style="color:red;" id="notif"></span></center>
            <?php if(!empty($message)): ?>
                <div data-alert class="alert-box alert login-error">
                  <?php echo $message;?>
                  <a href="#" class="close">&times;</a>
                </div>
            <?php endif; ?> 
            <label for="email">Email address</label>            
            <input class="email-input" type="email" name="email" id="email" maxlength="50" required aria-label="Email Address" />
            <div class="forgot-btn">
              <button id="forgotButton" class="expand button [tiny small large]">Send new password</button>
            </div>          
    </form>  
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>
<!--- END MODAL FOR FORGOT PASSWORD -->
<script>
$(document).ready(function(){
  <?php if('check_code'==$status && empty($this->session->userdata('username'))){ ?>
    $(window).load(function(){
      $('#myModal').foundation('reveal', 'open');
    });
  <?php }?>
});
</script>
<!--- END MODAL FOR CODE -->