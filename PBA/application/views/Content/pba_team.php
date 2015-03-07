</div> <!--- closing tag for the container -->
<div class="page-content profile-page">    
    <!-- OWL CAROUSEL  -->
      <div id="carousel-elems">          
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE1;?>" alt="slide 1" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE2;?>" alt="slide 2" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE3;?>" alt="slide 3" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE4;?>" alt="slide 4" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE5;?>" alt="slide 5" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE6;?>" alt="slide 6" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE7;?>" alt="slide 7" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE8;?>" alt="slide 8" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE9;?>" alt="slide 9" /></div>
      </div> 
    <!-- END OF OWL CAROUSEL -->

    <!--- START OF TEAM INFO CONTENT -->
      <div class="row row-content">
        <div class="small-12 medium-10 medium-centered large-8 large-centered columns">
          <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 profile-elem-content text-center">              
              <li>
                  <img class="frame" src="<?php echo base_url().'assets/img/team/'.$info->TEAM_LOGO;?>" alt="<?php echo $info->TEAM_NAME;?>-photo"/>
                  <h1><?php echo $info->TEAM_NAME;?></h1>
              </li>
              <li class="profile-elem-right-content">
                    <p><strong>Year started</strong> <span class="profile-elem-bar">|</span> <?php echo $info->TEAM_YEARSTARTED;?></p>
                    <p id="currentCoach"><strong>Latest head coach</strong> <span class="profile-elem-bar">|</span> </p>
                    <p><strong>Career wins</strong> <span class="profile-elem-bar">|</span> <?php echo $info->TEAM_CAREERWINS;?></p>
                    <p><strong>Career losses</strong> <span class="profile-elem-bar">|</span> <?php echo $info->TEAM_CAREERLOSSES;?></p>
              </li>
          </ul>
        </div>
      </div>
    <!--- END OF TEAM INFO CONTENT -->

    <!--- START OF HISTORY CONTENT -->
       <div class="row">
          <div class="small-12 columns header history-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img"  src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>History</span>
            </h2>
          </div>
      </div>  
      <div class="row row-content history-team profile-page" style="display:none;">      
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
              <p><?php echo $info->TEAM_HISTORY;?></p>
        </div>
      </div>
    <!--- END OF HISTORY CONTENT -->
  
    <!--- START TEAM ACHIEVEMENTS-->
      <div class="row">
          <div class="small-12 columns header achievement-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Achievements</span>
            </h2>
          </div>
      </div>  
      <div class="row row-content achievement-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered text-center profile-page">
                <p><strong>Number of playoffs appearance</strong> <span class="profile-elem-bar">|</span> <?php echo $info->TEAM_PLAYOFF_APPEAR?></p>
                <p><strong>Number of finals appearance</strong> <span class="profile-elem-bar">|</span> <?php echo $info->TEAM_FINALS_APPEAR;?></p>
    
                
                  <strong><span class="profile-elem-bar">|</span> <strong>Championships won</strong> <span class="profile-elem-bar">|</span></strong>
                <?php if(empty($champ)){?>
                  <h1>No Championships To Display</h1>
                <?php }?>
                
                <?php foreach($champ as $champ):?>
                <p><strong>League</strong> <span class="profile-elem-bar">|</span> <?php echo $champ->LEAGUE_NAME;?><br/>
                <strong>Year</strong> <span class="profile-elem-bar">|</span> <?php echo $champ->YEAR_WON;?></p>
                <?php endforeach;?>
          </div>
        </div>
      </div>
    <!--- END TEAM ACHIEVEMENT-->
  
    <!--- START TEAM CURRENT PLAYERS-->
      <div class="row">
          <div class="small-12 columns header currentplayers-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Current Players</span>
            </h2>
          </div>
      </div>
      <div class="row row-content currentplayers-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3 text-center" id="currentplayers">
          </ul>
        </div>
      </div>
    <!--- END TEAM CURRENT PLAYERS-->
  
    <!--- START TEAM PAST PLAYERS-->
      <div class="row">
          <div class="small-12 columns header pastplayers-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Past Players</span>
            </h2>
          </div>
      </div>
      <div class="row row-content pastplayers-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 text-center" id="pastplayers">
          </ul>
        </div>
      </div>
    <!--- END TEAM PAST PLAYERS-->
  
    <!--- START TEAM NOTABLE PLAYERS-->
      <div class="row">
          <div class="small-12 columns header notableplayers-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Notable Players</span>
            </h2>
          </div>
      </div>
      <div class="row row-content notableplayers-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 text-center" id="notableplayers">
          </ul>
        </div>
      </div>
    <!--- END TEAM NOTABLE PLAYERS-->

    <!--- START TEAM NOTABLE PLAYERS-->
      <div class="row">
          <div class="small-12 columns header pastcoach-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Past Head Coaches</span>
            </h2>
          </div>
      </div>
      <div class="row row-content pastcoach-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3 text-center" id="pastcoaches">
          </ul>
        </div>
      </div>
    <!--- END TEAM NOTABLE PLAYERS-->
</div>
<script>
$(document).ready(function(){
  var present="";
  var past="";
  var notable="";
  var coach="";
  var coachID="";
  var pastCoaches="";
  $(".history-block").click(function(){
    $(".history-team").slideToggle(1500);
  });
  $(".achievement-block").click(function(){
    $(".achievement-team").slideToggle(1500);
  });
  $(".currentplayers-block").click(function(){
    $(".currentplayers-team").slideToggle(1500);
  });
  $(".pastplayers-block").click(function(){
    $(".pastplayers-team").slideToggle(1500);
  });
  $(".notableplayers-block").click(function(){
    $(".notableplayers-team").slideToggle(1500);
  });

  $(".pastcoach-block").click(function(){
    $(".pastcoach-team").slideToggle(1500);
  });

  <?php foreach($player_bridge as $player_bridge):?>
  <?php $teamplayer=$this->page_model->get_playerInfo($player_bridge->PLAYER_ID);?>
    <?php if($player_bridge->TYPE=='PRESENT'){?>
      present+='<li><a href="<?php echo base_url().'pages_controller/view_player/'.$player_bridge->PLAYER_ID;?>"><img class="profile-elem-img" src="<?php echo base_url().'assets/img/player/'.$teamplayer->PLAYER_PORTRAIT_PHOTO;?>" width="200" height="200" alt="past team"/></a><header class="team-name"><?php echo $teamplayer->PLAYER_FULLNAME;?></header><span><?php echo $player_bridge->YEAR,'-PRESENT';?></span></li>';
    <?php }else if($player_bridge->TYPE=='PAST'){?>
      past+='<li><a href="<?php echo base_url().'pages_controller/view_player/'.$player_bridge->PLAYER_ID;?>"><img class="profile-elem-img" src="<?php echo base_url().'assets/img/player/'.$teamplayer->PLAYER_PORTRAIT_PHOTO;?>" width="200" height="200" alt="past team"/></a><header class="team-name"><?php echo $teamplayer->PLAYER_FULLNAME;?></header><span><?php echo $player_bridge->YEAR;?></span></li>';
    <?php }else if($player_bridge->TYPE=='NOTABLE'){?>
      notable+='<li><a href="<?php echo base_url().'pages_controller/view_player/'.$player_bridge->PLAYER_ID;?>"><img class="profile-elem-img" src="<?php echo base_url().'assets/img/player/'.$teamplayer->PLAYER_PORTRAIT_PHOTO;?>" width="200" height="200" alt="past team"/></a><header class="team-name"><?php echo $teamplayer->PLAYER_FULLNAME;?></header><span><?php echo $player_bridge->YEAR;?></span></li>';
    <?php }?>
  <?php endforeach;?>

  <?php foreach($coach_bridge as $coach_bridge):?>
    <?php if($coach_bridge->TYPE=='PRESENT'){?>
      coachID=<?php echo $coach_bridge->COACH_ID;?>;
      $.getJSON("<?php echo base_url();?>pages_controller/get_coachName/"+coachID,success=function(data){
        coach='<strong><a href="<?php echo base_url();?>pages_controller/view_coach/'+coachID+'">'+data+'</a></strong>';
        $("#currentCoach").append(coach);
      });
    <?php }else{
      $coachInfo=$this->page_model->get_coachInfo($coach_bridge->COACH_ID);
      ?>
      pastCoaches+='<li><a href="<?php echo base_url().'pages_controller/view_coach/'.$coach_bridge->COACH_ID;?>"><img class="profile-elem-img" src="<?php echo base_url().'assets/img/coach/'.$coachInfo->COACH_PORTRAIT_PHOTO;?>" alt="past team"/></a><header class="team-name"><?php echo $coachInfo->COACH_FULLNAME;?></header><span><?php echo $coach_bridge->YEAR;?></span></li>';
    <?php }?>
  <?php endforeach;?>

  if(notable==''){
    notable='<h1>No Data To Display</h1>';
  }

  if(past==''){
    past='<h1>No Data To Display</h1>';
  }

  if(present==''){
    present='<h1>No Data To Display</h1>';
  }

  if(pastCoaches==''){
    pastCoaches='<h1>No Data To Display</h1>';
  }
  
  $("#currentplayers").html(present);
  $("#pastplayers").html(past);
  $("#notableplayers").html(notable);
  $("#pastcoaches").html(pastCoaches);

  $("#carousel-elems").owlCarousel({
      autoPlay: 5000, //Set AutoPlay to 5 seconds
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
  });
});
</script>