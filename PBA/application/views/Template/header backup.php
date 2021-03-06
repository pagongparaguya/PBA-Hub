<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PBA Hub | <?php echo $title?></title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" />
    <link rel="icon" href="<?php echo base_url();?>assets/img/basketball.png"/>
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/foundation.min.js"></script>
  </head>

  <body>
    <!--- START OF NAVBAR -->
    <div class="row row-content">
      <div class="small-12 columns">
        <div class="fixed">
          <nav class="top-bar topbar-content" data-topbar role="navigation">
            <ul class="title-area">
              <li class="name pbahub-logo">
                <h1 class="site-title"><img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" /><span>PBA Hub</span></h1>
              </li>
               <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
              <li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
              </li>
            </ul>

                  <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right topbar-content">
                        <li><a href="<?php echo base_url();?>pages_controller/view_home">Home</a></li>
                        <li><a href="#">Players</a></li>
                        <li><a href="#">Coaches</a></li>
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Search</a></li>
                        <li class="has-dropdown">
                          <?php if(empty($this->session->userdata('username'))){?>
                          <a href="#">Account</a>
                          <ul class="dropdown topbar-content">
                            <li><a href="<?php echo base_url();?>account_controller/view_login">Login</a></li>
                            <li><a href="<?php echo base_url();?>account_controller/view_register">Sign Up</a></li>
                          <?php }else{?>
                          <a href="#"><?php echo $this->session->userdata('username')?></a>
                          <ul class="dropdown topbar-content">
                            <li><a href="<?php echo base_url();?>account_controller/view_user_profile">Profile</a></li>
                            <li><a href="<?php echo base_url();?>account_controller/logout">Logout</a></li>
                          <?php }?>
                          </ul>
                        </li>
                    </ul>                    
                  </section>
          </nav>
        </div>
      </div>
    </div>
    <!--- END OF NAVBAR -->