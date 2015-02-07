<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PBA Hub | <?php echo $title?></title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/basketball.png"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/DataTable/media/css/dataTables.foundation.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/slick/slick.css"/>
    <!-- slideshow css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slideshow.css"/>
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/foundation.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick/slick.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick/jquery-migrate.js"></script>
    <script src="<?php echo base_url();?>assets/js/DataTable/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/DataTable/media/js/dataTables.foundation.js"></script>
    <script src="<?php echo base_url();?>assets/js/foundation/foundation.dropdown.js"></script>
    <!-- slideshow js -->
    <script src="<?php echo base_url();?>assets/js/modernizr.custom.86080.js"></script>
    
  </head>

  <body>
    <div class="site-content"> <!-- div container which will enclose the page to a 1100px width --> 
            <!--- START OF NAVBAR -->
            <div class="row row-content">
                    <div class="small-12">
                            <div class="fixed contain-to-grid">
                                <nav class="top-bar topbar-content" data-topbar role="navigation">
                                        <ul class="title-area">
                                          <li class="name pbahub-logo">
                                            <a href="<?php echo base_url();?>pages_controller/view_home"><h1 class="site-title"><img src="<?php echo base_url();?>assets/img/basketball.png" alt="PBA Hub Logo" /><span>PBA Hub</span></h1></a>
                                          </li>
                                           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                                          <li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
                                          </li>
                                        </ul>
                                        <section class="top-bar-section">
                                          <!-- Right Nav Section -->
                                              <ul class="right topbar-content">
                                                    <li><a href="<?php echo base_url();?>pages_controller/view_home">Home</a></li>
                                                    <li><a href="<?php echo base_url();?>pages_controller/view_playerPage">Players</a></li>
                                                    <li><a href="<?php echo base_url();?>pages_controller/view_coachPage">Coaches</a></li>
                                                    <li><a href="<?php echo base_url();?>pages_controller/view_teamPage">Teams</a></li>
                                                    <li><a href="<?php echo base_url();?>auction_controller/view_products">Products</a></li>
                                                    <?php if(!empty($this->session->userdata('admin'))){?>
                                                      <li class="has-dropdown">
                                                        <a href="#">Admin Panel</a>
                                                        <ul class="dropdown">
                                                          <li><a href="<?php echo base_url();?>account_controller/view_adminUsers">Users</a></li>
                                                          <li><a href="<?php echo base_url();?>account_controller/view_adminProducts">Products</a></li>
                                                        </ul>
                                                      </li>
                                                    <?php }?>
                                                    <li class="has-dropdown">                                                                              
                                                          <?php if(empty($this->session->userdata('username'))){?> 
                                                                  <a href="#">Account</a>
                                                                  <ul class="dropdown topbar-content">
                                                                    <li><a href="<?php echo base_url();?>account_controller/view_login">Login</a></li>
                                                                    <li><a href="<?php echo base_url();?>account_controller/view_register">Sign Up</a></li>
                                                                  </ul>
                                                          <?php }else{?>
                                                                  <a href="#"><?php echo $this->session->userdata('username')?></a>                                              
                                                                  <ul class="dropdown topbar-content">
                                                                    <li><a href="<?php echo base_url();?>account_controller/view_user_profile">Profile</a></li>
                                                                    <li><a href="<?php echo base_url();?>account_controller/logout">Logout</a></li>
                                                                  </ul>
                                                          <?php }?>                     
                                                    </li>
                                              </ul>                    
                                        </section>
                                  </nav>
                              </div>
                      </div>
                </div>
            <!--- END OF NAVBAR -->