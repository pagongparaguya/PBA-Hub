<div class="page-content profile-page"> 
  <!--- START PRODUCT IMAGES-->
    <meta http-equiv="refresh" content="30">
      <div class="row row-content">
          <ul class="team-row small-block-grid-1 medium-block-grid-1 large-block-grid-1 teams">
            <li>
              <div class="imageProduct">
                <div><img width="400" src="<?php echo $product->IMAGE1;?>" alt="1-portrait" /></div>
                <div><img width="400" src="<?php echo $product->IMAGE2;?>" alt="2-portrait" /></div>
                <div><img width="400" src="<?php echo $product->IMAGE3;?>" alt="3-portrait" /></div>
                <div><img width="400" src="<?php echo $product->IMAGE4;?>" alt="4-portrait" /></div>
                <div><img width="400" src="<?php echo $product->IMAGE5;?>" alt="5-portrait" /></div>
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
              $userInfo=$this->account_model->get_user($this->session->userdata('username'));
              if($this->auction_model->getProductInfoWithUserId($product->PROD_ID,$userInfo->USER_ID)){
                if($product->PROD_STAT=='Closed'){?>
                  <button class="button tiny alert disabled">Status:Closed</button>
                <?php }else if($product->PROD_STAT=='On-going'){?>
                  <button class="button tiny success closeBid" data-reveal-id="changeStatClModal">Bid is on-going, Close Bid?</button>
                <?php }else{//pending?>
                  <button class="button startBid" data-reveal-id="changeStatOnModal">Start Bid?</button>
                <?php }?>
              <?php 
                }else{
                if($product->PROD_STAT=='Closed'){?>
                  <button class="button tiny alert disabled">Status:Closed</button>
                <?php }else if($product->PROD_STAT=='On-going'&&!empty($this->session->userdata('username'))){?>
                  <button class="button tiny success disabled">On going, place your bid.</button>
                <?php }else if($product->PROD_STAT=='On-going'&&empty($this->session->userdata('username'))){?>
                <button class="button tiny success disabled">On going, please login to place your bid.</button>
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
            <h5>Begin bidding for <b id="prodOnName"></b></h5> 
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
            <h5>Accept the latest bid for <b id="prodClName"></b>?</h5> 
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
          <input type="type" name="bidId" id="bidId"/>
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


    $("#individualProductBid").on("click",".deleteBid",function(){
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

    
  });
  </script>