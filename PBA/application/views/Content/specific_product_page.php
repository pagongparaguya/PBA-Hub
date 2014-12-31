     <!--- START OF PRODUCT NAME CONTENT -->
    <div class="row">
      <div class="row row-content">
        <div class="large-12 columns">
            <h1><?php echo $product->PROD_NAME;?></h1>
        </div>
      </div>
    </div>
    <!--- END OF PRODUCT NAME CONTENT -->
    
	<!--- START PRODUCT INFO-->
	<div class="row row-content">
      <ul class="team-row small-block-grid-1 medium-block-grid-1 large-block-grid-1 teams">
          <!--<li>
            <img style="border:3px solid blue;" src="<?php echo base_url().'assets/img/coach/'.$product->COACH_PORTRAIT_PHOTO;?>" alt="<?php echo $product->COACH_FULLNAME;?>-portrait" />
         </li>--> 
          <li>
            <p>Username: <a href="<?php echo base_url().'account_controller/view_otherUser/'.$user->USER_ID;?>"><?php echo $user->USERNAME;?></a></p>
      			<p>Product Description:<?php echo $product->PROD_DES;?></p>
            <p>Product Age:<?php echo $product->PROD_AGE_VAL.' '.$product->PROD_AGE_NAME.'\s';?></p>
      			<p>Product Category:<?php echo $product->PROD_CAT;?></p>
      			<p>Product Status:<?php echo $product->PROD_STAT;?></p>
      			<p>Starting Bid:<?php echo $product->START_BID;?></p>
      			<p>Current Bid:</p>
          </li>
      </ul>
    </div>
    <!--- END PRODUCT INFO-->