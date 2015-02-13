<!--- START OF FORMS -->
<div class="row">
    <form id="reg" action="<?php echo base_url();?>account_controller/register" method="post" enctype='multipart/form-data'>      
            <fieldset class="form-elems form-signup"> 
                <center><span style="color:white;"><?php echo $message;?></span></center>
                <br>
                    <div class="small-12 large-6 medium-6 columns">
                        <h2>Personal Information</h2>
                        <hr class="hr-dotted" />
                        <label>
                            First name                            
                            <input class="text-center" type="text" name="fname" <?php if(!empty($fname)){?>value="<?php echo $fname?>" <?php } ?> aria-label="First name" required pattern=".{4,40}" title="4 to 40 Characters" maxlength="40"/>
                        </label>
                        <label>
                            Last name
                        <input class="text-center" type="text" name="lname" <?php if(!empty($lname)){?>value="<?php echo $lname?>" <?php } ?> aria-label="Last name" required pattern=".{4,30}" title="4 to 30 Characters" maxlength="30"/>
                        </label>    
                        <label>
                            Contact number
                        <input class="text-center" type="text" name="contact" <?php if(!empty($contact)){?>value="<?php echo $contact?>" <?php } ?> aria-label="contact Number" required maxlength="11" pattern="[0][9][0-9]{9}" title="11 Characters in 09********* format"/>
                        </label>
                        <label>
                            Email address
                        <input class="text-center" type="email" name="email" <?php if(!empty($email)){?>value="<?php echo $email?>" <?php } ?> aria-label="Email address" required maxlength="50"/>
                        </label>
                        <label>
                            Address                        
                        <input class="text-center" type="text" name="address" <?php if(!empty($address)){?>value="<?php echo $address?>" <?php } ?> aria-label="Address" required maxlength="100"/>
                        </label>
                        <label>
                            Birthday
                            <div class="panel panel-orange">
                                <input id="date" class="text-center" type="date" name="birthday" class="span2" <?php if(!empty($birthday)){?>value="<?php echo $birthday?>" <?php } ?> required placeholder="mm-dd-yyyy" id="dp1" />
                            </div>
                        </label>

                        <label>Choose a Secret Question
                          <select class="text-center" name="question" required>
                            <option value="" disabled default selected>Select Question</option>
                            <option value="Who is your favorite PBA player?">Who is your favorite PBA player?</option>
                            <option value="Who is your favorite PBA team?">Which is your favorite PBA team?</option>
                            <option value="Who is your favorite PBA coach?">Who is your favorite PBA coach?</option>
                          </select>
                          <input class="text-center secret-answer" type="text" name="answer" placeholder="Answer to question" <?php if(!empty($answer)){?>value="<?php echo $answer?>" <?php } ?> aria-label="Answer to Question" required maxlength="20"/>
                        </label>
                        
                        <label>
                            Choose profile photo <span>(accepted file formats: jpeg/jpg/png)</span>
                            <div class="panel panel-orange">
                                <input class="text-center" type="file" name="userfile" accept="image/jpg, image/jpeg, image/png" value="Upload Photo" />
                            </div>
                        </label>
                    </div>

                    <div class="small-12 large-6 medium-6 columns signup-account-info">
                        <h2>Account Information</h2>
                        <hr class="hr-dotted" />
                        <label>
                            Username
                            <input class="text-center" type="text" name="user" aria-label="Username" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
                        </label>
                        <label>
                            Password
                            <input class="text-center" type="password" name="pass" id="pass" aria-label="Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
                        </label>
                        <label>
                            Confirm password
                            <input class="text-center" type="password" name="cpass" id="cpass" aria-label="Confirm Password" required pattern=".{4,20}" title="4 to 20 Characters" maxlength="20"/>
                        </label>
                        <label>
                            Captcha code
                            <input class="text-center" type="text" name="captcha" id="captcha" placeholder="Input code below" aria-label="Input code below" required maxlength="6" pattern=".{6}" title="6 Characters"/>
                            <br/>
                            <div class="input-topmargin-small captcha-img"><?php echo $image;?></div><img id="refresh" src="<?php echo base_url();?>assets/img/refresh.png" width="100" height="80"/>
                        </label>
                    </div>
                    <hr class="hr-dotted" />
                    <div class="small-12 medium-12 large-12 columns">
                        <div class="small-12 medium-6 medium-centered large-6 large-centered columns">  
                                <button type="submit" class="expand form-button button [tiny small large]" id="1">Submit</button>  
                        </div>
                    </div>                               
            </fieldset>                            
    </form>  
</div>      
<script>
$(document).ready(function(){
    var captcha="<?php echo $this->session->userdata('captcha')?>";

    $("#refresh").click(function(){
        $.ajax({
            url:'<?php echo base_url();?>account_controller/refresh_captcha',
            success:function(data,status){
                var res=data.split("%");
                $(".captcha-img").html(res[0]);
                captcha=res[1];
            }
        });
    });

    $('#1').click(function(event){
        var todaysDate = new Date();
        formatDate = (todaysDate.getFullYear() -18) + '-' + 
                         (todaysDate.getMonth() + 1) + '-' + 
                         todaysDate.getDate();
        if($('#captcha').val()!=captcha && $('#pass').val()!=$('#cpass').val()){
            alert("Password/confirm password and Captcha code don't match");
            event.preventDefault();
        }else if($('#pass').val()!=$('#cpass').val()){
            alert("Password/confirm password don't match");
            event.preventDefault();
        }else if($('#captcha').val()!=captcha){
            alert("Captcha code does not match the image");
            event.preventDefault();
        }else if(formatDate<$('#date').val()){
            alert("You must be atleast 18 years old to register");
            event.preventDefault();
        }else{
            $( "#reg" ).validate({
                rules: {
                    field: {
                        required: true,
                        accept: "image/png, image/jpg, image/jpeg"
                    }
                }
            });
        }
    });     
});
</script>
<!--- END OF FORMS -->