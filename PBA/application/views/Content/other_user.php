</div>
<!--- START USER INFO-->
<div class="page-content">
    <hr class="hr-dotted" />
      <div class="small-10 small-centered medium-10 medium-centered large-7 large-centered columns">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 profile-elem-content text-center">
            <li>
              <img class="frame pages-elem-img" src="<?php echo $info->USER_IMAGE;?>" width="200" height="200" alt="<?php echo $info->USERNAME;?>-portrait" /><br/>            
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
            <div class="individualProduct text-center" >
              <input type="hidden" id="prod_id" value="<?php echo $product->PROD_ID;?>"/>
              <a href="<?php echo base_url().'auction_controller/view_product/'.$product->PROD_ID;?>"><img class="profile-elem-img" src="<?php echo $product->IMAGE1;?>" /></a>
              <h4 class="other-user-prod-name">
                <?php
                  $append="";
                  if(strlen($product->PROD_NAME)>25){
                    $append="...";
                  }
                  echo substr($product->PROD_NAME, 0,25).$append;?>
              </h4>
              <button class="button small disabled radius bground-brown"><strong class="green-text shadow">Starting bid</strong> <span class="profile-elem-bar">|</span> <?php echo $product->START_BID;?></button><br />
              <?php if($product->PROD_STAT=='Closed'){?>
               <button class="button small disabled radius alert form-button"><strong class="shadow">Status</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_STAT;?></button>
              <?php }else if($product->PROD_STAT=='On-going'){?>
                <button class="button small disabled radius success form-button"><strong class="shadow">Status</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_STAT;?></button>
              <?php }else{?>
                <button class="button small disabled radius form-button"><strong class="shadow">Status</strong> <span class="profile-elem-bar">|</span> <?php echo $product->PROD_STAT;?></button>
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