<div class="page-content profile-page"> 
  <!--- START PRODUCT IMAGES-->
    <meta http-equiv="refresh" content="30">
      <div class="row row-content">
          <ul class="team-row small-block-grid-1 medium-block-grid-1 large-block-grid-1">
            <li>
              <div class="imageProduct">
                <div><img width="400" src="<?php echo $product->IMAGE1;?>" alt="1-portrait" />
                <?php if($this->session->userdata('username')){
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r1" class="button radius" data-reveal-id="replaceProdModal">Replace</button><?php }}?></div>
                <div><img width="400" src="<?php echo $product->IMAGE2;?>" alt="2-portrait" /><?php if($this->session->userdata('username')){  
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r2" class="button radius" data-reveal-id="replaceProdModal">Replace</button><?php }}?></div>
                <div><img width="400" src="<?php echo $product->IMAGE3;?>" alt="3-portrait" /><?php if($this->session->userdata('username')){  
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r3" class="button radius" data-reveal-id="replaceProdModal">Replace</button><?php }}?></div>
                <div><img width="400" src="<?php echo $product->IMAGE4;?>" alt="4-portrait" /><?php if($this->session->userdata('username')){  
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r4" class="button radius" data-reveal-id="replaceProdModal">Replace</button><?php }}?></div>
                <div><img width="400" src="<?php echo $product->IMAGE5;?>" alt="5-portrait" /><?php if($this->session->userdata('username')){  
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){?><button id="r5" class="button radius" data-reveal-id="replaceProdModal">Replace</button><?php }}?></div>
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
                    <button class="button small radius alert disabled"><strong>Status</strong> <span class="profile-elem-bar">|</span> Closed</button>
                  <?php }else if($product->PROD_STAT=='On-going'&&!empty($bid)){?>
                    <button class="button small radius success closeBid" data-reveal-id="changeStatClModal">Bidding is still ON-GOING, close bidding?</button>
                  <?php }else if($product->PROD_STAT=='On-going'&&empty($bid)){?>
                    <button class="button small radius success disabled">Can't close the bidding because there are no bids to accept.</button>
                  <?php }else{//pending?>
                    <button class="button radius success startBid" data-reveal-id="changeStatOnModal">Start bidding?</button>
                  <?php }?>
                <?php 
                  }else{
                  if($product->PROD_STAT=='Closed'){?>
                    <button class="button small radius alert disabled"><strong>Status</strong> <span class="profile-elem-bar">|</span> Closed</button>
                  <?php }else if($product->PROD_STAT=='On-going'){?>
                    <button class="button small radius success disabled"><strong>Bidding is ON-GOING</strong> <span class="profile-elem-bar">|</span> Place your bid.</button>
                  <?php }else{//pending?>
                    <button class="button small radius alert disabled">Not ready</button>
                  <?php }?>
                <?php }
              }else{
                if($product->PROD_STAT=='Closed'){?>
                  <button class="button small radius alert disabled"><strong>Status</strong> <span class="profile-elem-bar">|</span> Closed</button>
                <?php }else if($product->PROD_STAT=='On-going'){?>
                  <button class="button small radius success disabled">Please login to place your bid.</button>
                <?php }else{//pending?>
                  <button class="button small radius alert disabled">Not ready</button>
                <?php }?>
              <?php }?>
          </div>
        </div>
      </div>
      <!--- END OF PRODUCT NAME CONTENT -->
    
      <!--- START PRODUCT INFO-->
      <div class="row row-content">
        <div class="small-12 medium-12 large-10 large-centered columns">
            <ul class="team-row small-block-grid-1 medium-block-grid-3 large-block-grid-3 text-center">
              <li>
                <p><strong>Product status</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_STAT;?></p>                
                <p><strong>Owner</strong> <span class="profile-elem-bar">|</span> <a href="<?php echo base_url().'account_controller/view_otherUser/'.$user->USER_ID;?>"><?php echo $user->USERNAME;?></a></p>             
                <p><strong>Product age</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_AGE_VAL.' '.$product->PROD_AGE_NAME.'(s)';?></p>
              </li>
              <li>
                <p><strong>Starting bid</strong> <span class="profile-elem-bar">|</span> <span class="green-text"><?php echo $product->START_BID;?></span></p>
                <p><strong>Product category</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_CAT;?></p>
              </li>
              <li>
                <p><strong>Product description</strong> <span class="profile-elem-bar">|</span><br /><?php echo $product->PROD_DES;?></p>
              </li>
            </ul>
        </div>
      </div>
        <!--- END PRODUCT INFO-->
    
        <!--- START PRODUCT BID-->
        <div class="row">
          <div class="large-12 columns">
              <?php if($product->PROD_STAT=='On-going'&&!empty($this->session->userdata('username'))&&$user->USERNAME!=$this->session->userdata('username')){?>
              <button class="success radius addBid">Add Bid</button>
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

        <div class="row">
          <div class="large-12 columns">
            <?php if(empty($bid)){?>
              <h1>No Bids To Display</h1>
            <?php }else{ echo "<div class='panel' id='bidPanel'>"; $count=0; foreach($bid as $bid):
              $userBid=$this->account_model->get_user2($bid->USER_ID);
              $count++;
            ?>
              <div id="individualProductBid" class="text-center">
                <input type="hidden" class="bid_id" value="<?php echo $bid->BID_ID;?>"/>
                
                <a href="<?php echo base_url().'account_controller/view_otherUser/'.$userBid->USER_ID;?>"><img class="bidpage-bidder-img" src="<?php echo $userBid->USER_IMAGE;?>"/></a>
                
                <p><strong>Bidder <?php echo $count;?></strong> <span class="profile-elem-bar">|</span> <?php echo $userBid->USERNAME;?></p>
                <button class="button radius small success disabled"><strong>Bid amount</strong> <span class="profile-elem-bar">|</span> <span class="bidAmount"><?php echo $bid->BID_AMT;?></span></button>
                <?php if($userBid->USERNAME==$this->session->userdata('username')&&$product->PROD_STAT=='On-going'){?>
                  <button class="button radius small alert deleteBid" data-reveal-id="deleteBidModal">Cancel bid</button>
                <?php }?>
              </div>
            <?php endforeach; echo "</div>";}?>
         </div>
        </div>
      <!-- END PRODUCT BID-->

      <!--- START QUESTON CHANGE ONGOING STATUS PRODUCT-->
      <div id="changeStatOnModal" class="reveal-modal small" data-reveal>
        <div class="small-12 medium-12 large-7 large-centered columns text-center">
            <input type="hidden" name="prodIdOnModal" id="prodIdOnModal"/> 
            <span>Begin bidding for <b id="prodOnName"></b>?</span> 
            <div class="small-12 medium-12 large-12 columns">
              <button id="yesOnButton" class="button radius small">Yes</button>
              <button id="noOnButton" class="button radius small alert">No</button>
            </div>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <!--- END QUESTION CHANGE ONGOING STATUS PRODUCT-->
    
      <!--- START QUESTON CHANGE CLOSED STATUS PRODUCT-->
      <div id="changeStatClModal" class="reveal-modal small" data-reveal>
        <div class="small-12 medium-12 large-12 columns text-center">
          <input type="hidden" name="prodIdClModal" id="prodIdClModal"/> 
            <p>Accept the largest bid for <strong id="prodClName"></strong> <span id="highestBidder"></span>?</p> 
            <div class="small-12 medium-12 large-12 columns">
              <button id="yesClButton" class="button small radius">Yes</button>
              <button id="noClButton" class="button small radius alert">No</button>
            </div>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <!--- END QUESTION CHANGE CLOSED STATUS PRODUCT-->
    
      <!--- START QUESTON DELETE BID-->
      <div id="deleteBidModal" class="reveal-modal small" data-reveal>
        <div class="small-12 medium-12 large-12 columns text-center">
          <input type="hidden" name="bidId" id="bidId"/>
            <span>Cancel bid worth <strong id="bidName"></strong>?</span> 
            <div class="small-12 medium-12 large-12 columns">
              <button id="yesBidButton" class="button small radius">Yes</button>
              <button id="noBidButton" class="button small radius alert">No</button>
            </div>
        </div>
        <a class="close-reveal-modal">&#215;</a>
      </div>
      <!--- END QUESTION DELETE BID-->

      <!-- START REPLACE IMAGE MODAL -->
        <div id="replaceProdModal" class="reveal-modal medium" data-reveal>
          <form id="rp" action="<?php echo base_url();?>auction_controller/replace_prodImage" method="post" enctype='multipart/form-data'>       
              <div class="small-12 medium-12 large-8 large-centered columns">
                <input type="hidden" name="imgnum" id="imgnum"/>
                <input type="hidden" value="<?php echo $product->PROD_ID;?>" name="prodid"/>
                <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1">
                  <li class="user-profile-answer-field">
                    <label class="bidpage-replace-img">
                      Select an image <span>(png/jpg/jpeg)</span>
                      <input type="file" name="userfile" accept="image/jpg, image/jpeg, image/png" class="panel-orange form-button button small"/>
                    </label>
                  </li>
                  <li>
                    <div class="submit-btn">
                      <button type="submit" class="expand button [small small large]">Submit</button>  
                    </div>
                  </li>
                </ul>
              </div>                    
          </form>
          <a class="close-reveal-modal">&#215;</a>
        </div>
      <!-- END REPLACE IMAGE MODAL -->

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
          $(".addBidPanel").append("<div id='bids' class='yourbid'><input class='addBid-input' type='number' name='bidValue' required placeholder='Input your bid' min='"+max+"'/><button class='radius small' type='submit'>Submit</button><button class='alert small radius cBid'>Cancel</button></div>");
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

    $("#r1").click(function(){
      $("#imgnum").val("IMAGE1");
    });

    $("#r2").click(function(){
      $("#imgnum").val("IMAGE2");
    });

    $("#r3").click(function(){
      $("#imgnum").val("IMAGE3");
    });

    $("#r4").click(function(){
      $("#imgnum").val("IMAGE4");
    });

    $("#r5").click(function(){
      $("#imgnum").val("IMAGE5");
    });
  });
  </script>