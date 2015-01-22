<!--- START USER INFO-->
<div class="site-content">
  <div class="user-profile-content">
    <div class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 profile-content">
        <div class="left-content">
          <img style="border:3px solid black;" src="<?php echo $info->USER_IMAGE;?>" width="250" height="200" alt="<?php echo $info->USERNAME;?>-portrait" /><br/>
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" />
          <img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" /><br/>
          <h2 style="color:white;">HALL OF FAME</h2>
        </div>
        <div class="right-content">
            <div class="profile-text">
              <h3 style="color:white;">Username:<?php echo $info->USERNAME;?></h3>
              <h3 style="color:white;">Full Name:<?php echo $info->FIRST_NAME;?> <?php echo $info->LAST_NAME;?></h3>
              <h3 style="color:white;">Contact Number: <?php echo $info->CONTACT_NUMBER;?></h3>
              <h3 style="color:white;">Address: <?php echo $info->ADDRESS;?></h3>
            </div>
        </div>
    </div>
          <!--- END USER INFO-->
    
          <!--- START USER PRODUCTS-->
      <div class="row">
        <div class="large-12 columns header">     
            <h1 class="header-content">
              <img class="header-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Products</span>
            </h1>
        </div>
      </div>          
      <div class="row row-content">
        <div class="large-12 columns">
          <?php if(empty($products)){?>
            <h1>No Products To Display</h1>                
          <?php }else{ echo "<div class='panel' id='productPanel'>"; foreach($products as $product):?>
            <div id="individualProduct" style="border:1px solid black;text-align:center;">
              <input type="hidden" id="prod_id" value="<?php echo $product->PROD_ID;?>"/>
              <a href="<?php echo base_url().'auction_controller/view_product/'.$product->PROD_ID;?>"><img style="margin:5px auto;" src="<?php echo $product->IMAGE1;?>" width="200" height="120"/></a>
              <h5 id="productName">
                <?php
                  $append="";
                  if(strlen($product->PROD_NAME)>25){
                    $append="...";
                  }
                  echo substr($product->PROD_NAME, 0,25).$append;?>
              </h5>
              <button class="button tiny disabled round">Starting Bid:<?php echo $product->START_BID;?></button>
              <?php if($product->PROD_STAT=='Closed'){?>
               <button class="button tiny round alert disabled">Status:<?php echo $product->PROD_STAT;?></button>
              <?php }else if($product->PROD_STAT=='On-going'){?>
                <button class="button tiny round success disabled">Status:<?php echo $product->PROD_STAT;?></button>
              <?php }else{?>
                <button class="button tiny round disabled">Status:<?php echo $product->PROD_STAT;?></button>
              <?php }?>
            </div>
          <?php endforeach; echo "</div>";}?>
        </div>
      </div>
          <!-- END USER PRODUCTS-->
  </div>
</div>
<script>
$(document).ready(function(){
  $('#productPanel').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
});
</script>