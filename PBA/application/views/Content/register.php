 <!--- START OF FORMS -->
    <div class="row">
        <form action="<?php echo base_url();?>account_controller/register" method="post" enctype='multipart/form-data'>      
                <fieldset>
                    <legend>ACCOUNT CREATION</legend>  
                    <center><span style="color:white;"><?php echo $message;?></span></center>
                    <br>
                        <div class="small-12 large-6 medium-6 columns">
                            <h2>Personal Information</h2>
                            <input type="text" name="fname" placeholder="First Name" <?php if(!empty($fname)){?>value="<?php echo $fname?>" <?php } ?> aria-label="First Name" required pattern=".{4,40}" title="4 to 40 Characters" maxlength="40"/>
                            <input type="text" name="lname" placeholder="Last Name" <?php if(!empty($lname)){?>value="<?php echo $lname?>" <?php } ?> aria-label="Last Name" required pattern=".{4,30}" title="4 to 30 Characters" maxlength="30"/>
                            <input type="text" name="contact" placeholder="Contact Number" <?php if(!empty($contact)){?>value="<?php echo $contact?>" <?php } ?> aria-label="Contact Number" required maxlength="11" pattern=".{11}" title="11 Characters"/>
                            <input type="email" name="email" placeholder="Email Address" <?php if(!empty($email)){?>value="<?php echo $email?>" <?php } ?> aria-label="Email Address" required maxlength="50"/>
                            <input type="text" name="address" placeholder="Address" <?php if(!empty($address)){?>value="<?php echo $address?>" <?php } ?> aria-label=" Address" required maxlength="100"/>
                            <label>Birthday:</label>
                            <div class="panel">
                                <input type="date" name="birthday" class="span2" <?php if(!empty($birthday)){?>value="<?php echo $birthday?>" <?php } ?> placeholder="mm-dd-yyyy" id="dp1" />
                            </div>

                            <label>Choose a Secret Question
                              <select name="question" required/>
                              <option value="" disabled default selected>Select Question</option>
                                <option value="Who is your favorite PBA player?">Who is your favorite PBA player?</option>
                                <option value="Who is your favorite PBA team?">Which is your favorite PBA team?</option>
                                <option value="Who is your favorite PBA coach?">Who is your favorite PBA coach?</option>
                              </select>
                            </label>
                            <input type="text" name="answer" placeholder="Answer to Question" <?php if(!empty($answer)){?>value="<?php echo $answer?>" <?php } ?> aria-label="Answer to Question" required maxlength="20"/>
                            <label style="color:white;">Profile Photo File: (Only Accepts jpeg/jpg/png files)</label>
                            <input type="file" name="userfile" value="Upload Photo" class="extend form-button button [tiny small large]"/>
                        </div>

                          <div class="small-12 large-6 medium-6 columns signup-account-info">
                            <h2>Account Information</h2>
                            <input type="text" name="user" placeholder="Username" aria-label="Username" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
                            <input type="password" name="pass" id="pass" placeholder="Password" aria-label="Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
                            <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" aria-label="Confirm Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
                            <input type="text" name="captcha" id="captcha" placeholder="Input Code Below" aria-label="Input Code Below" required maxlength="6"/>
                            <?php echo $image;?>
                          </div>                      
                </fieldset>
            
            <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
                <div class="login-btn submit-btn">
                    <button type="submit" class="expand form-button button [tiny small large]">Submit</button>  
        </form>  
                </div>              
            </div>         
    </div>      
    <script>
    $(document).ready(function(){
        $('.submit-btn').click(function(event){
        var captcha="<?php echo $this->session->userdata('captcha')?>";
            if($('#captcha').val()!=captcha && $('#pass').val()!=$('#cpass').val()){
                alert("Password/Confirm Password and Captcha Doesn't Match");
                event.preventDefault();
            }else if($('#pass').val()!=$('#cpass').val()){
                alert("Password/Confirm Password Doesn't Match");
                event.preventDefault();
            }else if($('#captcha').val()!=captcha){
                alert("Captcha Doesn't Match");
                event.preventDefault();
            }
        });        
    });
    </script>
    <!--- END OF FORMS -->