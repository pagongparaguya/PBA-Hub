<!--- START OF FORMS -->
        <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">
            <form action="<?php echo base_url();?>account_controller/login" method="post">      
                <fieldset>
                  <legend>ACCOUNT LOGIN</legend>  
                  <center><span style="color: white;text-shadow: 1px 1px 0px #000000;"><?php echo $message;?></span></center>
                    <br>
                        <input type="text" name="user" placeholder="Username" aria-label="Username" maxlength="20" />
                        <input type="password" name="pass" placeholder="Password" aria-label="Password" maxlength="20" />
                </fieldset>
        
            <div class="small-12 large-6 columns fget-pword">    
              <a href="#">Forgot Password?</a>
            </div>

            <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">      
              <div class="login-btn">
                  <button type="submit" class="expand form-button button">Login</button>
              </div>
            </div>
            </form>
          </div>   
    <!--- END OF FORMS -->
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
            <input type="text" name="code" placeholder="Code" aria-label="Username">
          </fieldset>
        </center>
        <div class="verify-btn">
          <button type="submit" class="expand form-button button [tiny small large]">Verify</button>
        </div>
      </form>
    </div>
  <a class="close-reveal-modal">&#215;</a>
</div>
<script>
<?php if('check_code'==$status && empty($this->session->userdata('username'))){ ?>
  $(window).load(function(){
    $('#myModal').foundation('reveal', 'open');
  });
<?php }?>
</script>
<!--- END MODAL FOR CODE -->