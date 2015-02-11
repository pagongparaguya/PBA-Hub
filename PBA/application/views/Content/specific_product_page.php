<div class="page-content profile-page"> 
  <!--- START PRODUCT IMAGES-->
    <meta http-equiv="refresh" content="30">
      <div class="row row-content">
          <ul class="team-row small-block-grid-1 medium-block-grid-1 large-block-grid-1 teams">
            <li>
              <div class="imageProduct">
                <div><img width="400" src="<?php echo $product->IMAGE1;?>" alt="1-portrait" /><?php if($this->session->userdata('username')){
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r1" class="btn" data-reveal-id="replaceProdModal1">Replace</button><?php }}?></div>
                <div><img width="400" src="<?php echo $product->IMAGE2;?>" alt="2-portrait" /><?php if($this->session->userdata('username')){  
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r2" class="btn" data-reveal-id="replaceProdModal2">Replace</button><?php }}?></div>
                <div><img width="400" src="<?php echo $product->IMAGE3;?>" alt="3-portrait" /><?php if($this->session->userdata('username')){  
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r3" class="btn" data-reveal-id="replaceProdModal3">Replace</button><?php }}?></div>
                <div><img width="400" src="<?php echo $product->IMAGE4;?>" alt="4-portrait" /><?php if($this->session->userdata('username')){  
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r4" class="btn" data-reveal-id="replaceProdModal4">Replace</button><?php }}?></div>
                <div><img width="400" src="<?php echo $product->IMAGE5;?>" alt="5-portrait" /><?php if($this->session->userdata('username')){  
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r5" class="btn" data-reveal-id="replaceProdModal5">Replace</button><?php }}?></div>
              </div>
            </li>
          </ul>
      </div>
      <!--- END PRODUCT IMAGES-->
    
      <!--- START OF PRODUCT NAME CONTENT -->
      <div class="row">
        <div class="row row-content">
          <div class="large-12 columns" style="text-align:center;">
              <h1 class="productName"><?php echo $product->PROD_NAME;?></h1>
              <input type="hidden" class="prod_id" value="<?php echo $product->PROD_ID;?>"/>
              <?php 
              if(!empty($this->session->userdata('username'))){
                $userInfo=$this->account_model->get_user($this->session->userdata('username'));
                if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){
                  if($product->PROD_STAT=='Closed'){?>
                    <button class="button tiny alert disabled">Status:Closed</button>
                  <?php }else if($product->PROD_STAT=='On-going'&&!empty($bid)){?>
                    <button class="button tiny round success closeBid" data-reveal-id="changeStatClModal">Bid is on-going, Close Bid?</button>
                  <?php }else if($product->PROD_STAT=='On-going'&&empty($bid)){?>
                    <button class="button tiny round success disabled">Cant Close Auction Because There Is No Bid.</button>
                  <?php }else{//pending?>
                    <button class="button startBid" data-reveal-id="changeStatOnModal">Start Bid?</button>
                  <?php }?>
                <?php 
                  }else{
                  if($product->PROD_STAT=='Closed'){?>
                    <button class="button tiny alert disabled">Status:Closed</button>
                  <?php }else if($product->PROD_STAT=='On-going'){?>
                    <button class="button tiny success disabled">On going, place your bid.</button>
                  <?php }else{//pending?>
                    <button class="button tiny alert disabled">Not Ready</button>
                  <?php }?>
                <?php }
                  }else{
                    if($product->PROD_STAT=='Closed'){?>
                      <button class="button tiny alert disabled">Status:Closed</button>
                    <?php }else if($product->PROD_STAT=='On-going'){?>
                      <button class="button tiny success disabled">Please login to place your bid.</button>
                    <?php }else{//pending?>
                      <button class="button tiny alert disabled">Not Ready</button>
                    <?php }?>


                  <?php }?>
          </div>
        </div>
      </div>
      <!--- END OF PRODUCT NAME CONTENT -->
    
      <!--- START PRODUCT INFO-->
      <div class="row row-content">
        <ul class="team-row small-block-grid-1 medium-block-grid-2 large-block-grid-2 teams">
          <li>
            <p>Owner:  <a href="<?php echo base_url().'account_controller/view_otherUser/'.$user->USER_ID;?>"><?php echo $user->USERNAME;?></a></p>
            <p>Product Description:  <?php echo $product->PROD_DES;?></p>
            <p>Product Age:  <?php echo $product->PROD_AGE_VAL.' '.$product->PROD_AGE_NAME.'/s';?></p>
          </li>
          <li>
            <p>Product Category:  <?php echo $product->PROD_CAT;?></p>
            <p>Product Status:  <?php echo $product->PROD_STAT;?></p>
            <p>Starting Bid:  <?php echo $product->START_BID;?></p>
          </li>
        </ul>
      </div>
        <!--- END PRODUCT INFO-->
    
        <!--- START PRODUCT BID-->
        <div class="row">
          <div class="large-12 columns">
              <?php if($product->PROD_STAT=='On-going'&&!empty($this->session->userdata('username'))&&$user->USERNAME!=$this->session->userdata('username')){?>
              <button class="success addBid">Add Bid</button>
              <form action="<?php echo base_url();?>auction_controller/addBid" method="post">
                <input type="hidden" name="prodId" id="forMax" value="<?php echo $product->PROD_ID;?>"/>
                <div class="addBidPanel"></div>
              </form>
              <?php }?>

              <div class="row">
                <div class="large-12 columns header">
                  <h2 class="header-content">
                    <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
                    <span>Product Bids</span>
                  </h2>
                </div>
              </div>
          </div>          
        </div>

        <!-- START REPLACE IMAGE MODAL -->
        <div id="replaceProdModal1" class="reveal-modal small small-12 medium-12 columns" data-reveal>
          <form id="rp" action="<?php echo base_url();?>auction_controller/replace_prodImage" method="post" enctype='multipart/form-data'>      
            <fieldset>
              <legend style="color:blue;">Replace Image</legend>  
              <div class="small-12 large-12 medium-12 columns signup-account-info">
                <h2>Select an image (png/jpg/jpeg)</h2>
                <input type="hidden" value="IMAGE1" name="imgnum"/>
                <input type="hidden" value="<?php echo $product->PROD_ID;?>" name="prodid"/>
                <input type="file" name="userfile"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
              </div>                    
            </fieldset>
            <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
              <div class="submit-btn">
                <button type="submit" class="expand form-button button [tiny small large]" >Submit</button>  
              </div>   
            </div>       
          </form>
          <a class="close-reveal-modal">&#215;</a>
        </div>
        <!-- END REPLACE IMAGE MODAL -->

        <!-- START REPLACE IMAGE MODAL -->
        <div id="replaceProdModal2" class="reveal-modal small small-12 medium-12 columns" data-reveal>
          <form id="rp" action="<?php echo base_url();?>auction_controller/replace_prodImage" method="post" enctype='multipart/form-data'>      
            <fieldset>
              <legend style="color:blue;">Replace Image</legend>  
              <div class="small-12 large-12 medium-12 columns signup-account-info">
                <h2>Select an image (png/jpg/jpeg)</h2>
                <input type="hidden" value="IMAGE2" name="imgnum"/>
                <input type="hidden" value="<?php echo $product->PROD_ID;?>" name="prodid"/>
                <input type="file" name="userfile"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
              </div>                    
            </fieldset>
            <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
              <div class="submit-btn">
                <button type="submit" class="expand form-button button [tiny small large]" >Submit</button>  
              </div>   
            </div>       
          </form>
          <a class="close-reveal-modal">&#215;</a>
        </div>
        <!-- END REPLACE IMAGE MODAL -->

        <!-- START REPLACE IMAGE MODAL -->
        <div id="replaceProdModal3" class="reveal-modal small small-12 medium-12 columns" data-reveal>
          <form id="rp" action="<?php echo base_url();?>auction_controller/replace_prodImage" method="post" enctype='multipart/form-data'>      
            <fieldset>
              <legend style="color:blue;">Replace Image</legend>  
              <div class="small-12 large-12 medium-12 columns signup-account-info">
                <h2>Select an image (png/jpg/jpeg)</h2>
                <input type="hidden" value="IMAGE3" name="imgnum"/>
                <input type="hidden" value="<?php echo $product->PROD_ID;?>" name="prodid"/>
                <input type="file" name="userfile"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
              </div>                    
            </fieldset>
            <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
              <div class="submit-btn">
                <button type="submit" class="expand form-button button [tiny small large]" >Submit</button>  
              </div>   
            </div>       
          </form>
          <a class="close-reveal-modal">&#215;</a>
        </div>
        <!-- END REPLACE IMAGE MODAL -->

        <!-- START REPLACE IMAGE MODAL -->
        <div id="replaceProdModal4" class="reveal-modal small small-12 medium-12 columns" data-reveal>
          <form id="rp" action="<?php echo base_url();?>auction_controller/replace_prodImage" method="post" enctype='multipart/form-data'>      
            <fieldset>
              <legend style="color:blue;">Replace Image</legend>  
              <div class="small-12 large-12 medium-12 columns signup-account-info">
                <h2>Select an image (png/jpg/jpeg)</h2>
                <input type="hidden" value="IMAGE4" name="imgnum"/>
                <input type="hidden" value="<?php echo $product->PROD_ID;?>" name="prodid"/>
                <input type="file" name="userfile"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
              </div>                    
            </fieldset>
            <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
              <div class="submit-btn">
                <button type="submit" class="expand form-button button [tiny small large]" >Submit</button>  
              </div>   
            </div>       
          </form>
          <a class="close-reveal-modal">&#215;</a>
        </div>
        <!-- END REPLACE IMAGE MODAL -->

        <!-- START REPLACE IMAGE MODAL -->
        <div id="replaceProdModal5" class="reveal-modal small small-12 medium-12 columns" data-reveal>
          <form id="rp" action="<?php echo base_url();?>auction_controller/replace_prodImage" method="post" enctype='multipart/form-data'>      
            <fieldset>
              <legend style="color:blue;">Replace Image</legend>  
              <div class="small-12 large-12 medium-12 columns signup-account-info">
                <h2>Select an image (png/jpg/jpeg)</h2>
                <input type="hidden" value="IMAGE5" name="imgnum"/>
                <input type="hidden" value="<?php echo $product->PROD_ID;?>" name="prodid"/>
                <input type="file" name="userfile"  accept="image/jpg, image/jpeg, image/png" class="extend form-button button [tiny small large]"/>
              </div>                    
            </fieldset>
            <div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">  
              <div class="submit-btn">
                <button type="submit" class="expand form-button button [tiny small large]" >Submit</button>  
              </div>   
            </div>       
          </form>
          <a class="close-reveal-modal">&#215;</a>
        </div>
        <!-- END REPLACE IMAGE MODAL -->

        <div class="row">
          <div class="large-12 columns">
            <?php if(empty($bid)){?>
              <h1>No Bid To Display</h1>
            <?php }else{ echo "<div class='panel' id='bidPanel' style='height:190px;'>"; $count=0; foreach($bid as $bid):
              $userBid=$this->account_model->get_user2($bid->USER_ID);
              $count++;
            ?>
              <div id="individualProductBid">
                <input type="hidden" class="bid_id" value="<?php echo $bid->BID_ID;?>"/>
                <center>
                  <a href="<?php echo base_url().'account_controller/view_otherUser/'.$userBid->USER_ID;?>"><img src="<?php echo $userBid->USER_IMAGE;?>" width="70"/></a>
                </center>
                <h4 class="userName">Bidder <?php echo $count;?>:<?php echo $userBid->USERNAME;?></h4>
                <button class="button tiny disabled">Bid:<b class="bidAmount"><?php echo $bid->BID_AMT;?></b></button>
                <?php if($userBid->USERNAME==$this->session->userdata('username')&&$product->PROD_STAT=='On-going'){?>
                  <button class="button tiny alert deleteBid" data-reveal-id="deleteBidModal">Delete</button>
                <?php }?>
              </div>
            <?php endforeach; echo "</div>";}?>
         </div>
        </div>
      <!-- END PRODUCT BID-->
    
       <!-- START PRODUCT COMMENT
          <div class="row">
              <div class="large-12 columns header comment-block">
                    <h2 class="header-content">
                      <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
                      <span>Product Comments</span>
                    </h2>
              </div>
          </div>
        
        <div class="row row-content prodcomment">
          <div class="large-12 columns">
            <?php if(empty($comment)){?>
              <h1>No Comments To Display</h1>                  
            <?php }else{foreach($comment as $comment):
              $userComment=$this->account_model->get_user2($comment->USER_ID);
              ?>
              <div class="panel">
                <input type="hidden" class="comment_id" value="<?php echo $comment->COMMENT_ID;?>"/>
                <p><b><?php echo $userComment->USERNAME;?>: </b><?php echo $comment->COMMENT;?> <?php echo $comment->TIMESTAMP;?></p><?php if($userComment->USERNAME==$this->session->userdata('username')){?><b>Edit </b><b>Delete</b><?php }?>
              </div>
            <?php endforeach;}?>
          <textarea rows="4" placeholder="Comment..." maxlength="100"></textarea>
          <button>Add Comment</button>
          </div>
        </div>
      END PRODUCT COMMENT-->
    
      <!--- START QUESTON CHANGE ONGOING STATUS PRODUCT-->
      <div id="changeStatOnModal" class="reveal-modal tiny" data-reveal>
        <div class="small-8 large-centered columns">
          <input type="hidden" name="prodIdOnModal" id="prodIdOnModal"/>
          <center> 
            <h5>Begin bidding for <b id="prodOnName"></b>?</h5> 
            <button id="yesOnButton" class="button tiny">Yes</button>
            <button id="noOnButton" class="button tiny alert">No</button>
          </center>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <!--- END QUESTION CHANGE ONGOING STATUS PRODUCT-->
    
      <!--- START QUESTON CHANGE CLOSED STATUS PRODUCT-->
      <div id="changeStatClModal" class="reveal-modal tiny" data-reveal>
        <div class="small-8 large-centered columns">
          <input type="hidden" name="prodIdClModal" id="prodIdClModal"/>
          <center> 
            <h5>Accept the latest bid for <b id="prodClName"></b><b id="highestBidder"></b>?</h5> 
            <button id="yesClButton" class="button tiny">Yes</button>
            <button id="noClButton" class="button tiny alert">No</button>
          </center>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <!--- END QUESTION CHANGE CLOSED STATUS PRODUCT-->
    
      <!--- START QUESTON DELETE BID-->
      <div id="deleteBidModal" class="reveal-modal tiny" data-reveal>
        <div class="small-8 large-centered columns">
          <input type="hidden" name="bidId" id="bidId"/>
          <center> 
            <h5>Delete bid with <b id="bidName"></b> value?</h5> 
            <button id="yesBidButton" class="button tiny">Yes</button>
            <button id="noBidButton" class="button tiny alert">No</button>
          </center>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <!--- END QUESTION DELETE BID-->
</div>
  <script>
  $(document).ready(function(){
    var max=0;
    $(".comment-block").click(function(){
      $(".prodcomment").slideToggle(1500);
    });

    $(".addBid").click(function(){
      $.ajax({
        url: '<?php echo base_url();?>auction_controller/getMaximumBid/',
        type: 'post',
        data: {'id': $(this).siblings().children("#forMax").val()},
        success: function(data, status) {
          if(data==""){
            max=<?php echo $product->START_BID;?>;
          }else{
            max=++data;
          }
          $(".addBidPanel").html("");
          $(".addBidPanel").append("<div id='bids' class='yourbid'><input type='number' name='bidValue' required placeholder='Your Bid' min='"+max+"'/><button type='submit'>Submit</button><button class='alert cBid'>Cancel</button></div>");
        }
      });
    });

    $(".addBidPanel").on('click','.cBid',function(){
      $("#bids").remove();
    });


    $("#bidPanel").on("click",".deleteBid",function(){
      $("#bidName").text($(this).siblings().children(".bidAmount").text());
      $("#bidId").val($(this).siblings(".bid_id").val());
    });


    $("#yesBidButton").click(function(){
      $.ajax({
        url: '<?php echo base_url();?>auction_controller/deleteBid/',
        type: 'post',
        data: {'id': $(this).parent().siblings("#bidId").val()},
        success: function(data, status) {
          alert(data);
          window.location.reload(true);
        }
      });
    });

    $("#noBidButton").click(function(){
      $('#deleteBidModal').foundation('reveal', 'close');
    });
    


    $(".startBid").click(function(){
      $("#prodOnName").text($(this).siblings(".productName").text());
      $("#prodIdOnModal").val($(this).siblings(".prod_id").val());
    });

    $("#yesOnButton").click(function(){
      $.ajax({
        url: '<?php echo base_url();?>auction_controller/changeOngoing/',
        type: 'post',
        data: {'id': $(this).parent().siblings("#prodIdOnModal").val()},
        success: function(data, status) {
          alert(data);
          window.location.reload(true);
        }
      });
    });

    $("#noOnButton").click(function(){
      $('#changeStatOnModal').foundation('reveal', 'close');
    });



    $(".closeBid").click(function(){
      $("#prodClName").text($(this).siblings(".productName").text());
      $("#prodIdClModal").val($(this).siblings(".prod_id").val());
      $.ajax({
        url: '<?php echo base_url();?>auction_controller/getMaximumBidder/',
        type: 'post',
        data: {'prodid': $(this).siblings(".prod_id").val()},
        success: function(data, status) {
          if(data==""){
            alert('No Bid Yet!');
            window.location.reload(true);
          }else{
            var x = data.toString();
            var res=x.split("%-.");
            $("#highestBidder").text(" from "+res[0]+" with a bid of "+res[1]);
          }
        }
      });
    });

    $("#yesClButton").click(function(){
      $.ajax({
        url: '<?php echo base_url();?>auction_controller/changeClosed/',
        type: 'post',
        data: {'id': $(this).parent().siblings("#prodIdClModal").val()},
        success: function(data, status) {
          alert(data);
          window.location.reload(true);
        }
      });
    });

    $("#noClButton").click(function(){
      $('#changeStatClModal').foundation('reveal', 'close');
    });

    $('.imageProduct').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
    });

    $('#bidPanel').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $( "#rp" ).validate({
      rules: {
        field: {
          required: true,
          accept: "image/png, image/jpg, image/jpeg"
        }
      }
    });

    
  });
  </script>