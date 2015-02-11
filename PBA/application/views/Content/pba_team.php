</div> <!--- closing tag for the container -->
<div class="page-content profile-page">
   <!--- START OF SLIDER -->
     <div class="row row-content">
       <div class="small-12 medium-12 large-12 columns">
             <ul data-orbit>
              <li>
                <img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE1;?>" alt="slide 1" />
                <div class="orbit-caption">
                </div>
              </li>
              <li class="active">
                <img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE2;?>" alt="slide 2" />
                <div class="orbit-caption">
                </div>
              </li>
              <li>
                <img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE3;?>" alt="slide 3" />
                <div class="orbit-caption">
                </div>
              </li>
              <li>
                <img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE4;?>" alt="slide 4" />
                <div class="orbit-caption">
                </div>
              </li>
              <li>
                <img src="<?php echo base_url().'assets/img/teamcarousel/'.$image->IMAGE5;?>" alt="slide 5" />
                <div class="orbit-caption">
                </div>
              </li>
            </ul>
       </div>
     </div>
   <!--- END OF SLIDER -->   
  
    <!--- START OF TEAM NAME CONTENT -->
      <div class="row">
        <div class="row row-content">
          <div class="small-12 medium-12 large-12 columns columns">
              <hr class="hr-dotted" />
              <h1><?php echo $info->TEAM_NAME;?></h1>
              <hr class="hr-dotted" />
          </div>
        </div>
      </div>
    <!--- END OF TEAM NAME CONTENT -->
  
    <!--- START TEAM INFO-->
      <div class="row row-content">
          <ul class="team-row small-block-grid-2 medium-block-grid-2 large-block-grid-2 teams">
              <li>
                <img class="frame" src="<?php echo base_url().'assets/img/team/'.$info->TEAM_LOGO;?>" alt="<?php echo $info->TEAM_NAME;?>-photo"/>
              </li>
              <li>
                <p>Year Started:<?php echo $info->TEAM_YEARSTARTED;?></p>
                <p id="currentCoach">Latest Head Coach: </p>
                <p>Career Wins:<?php echo $info->TEAM_CAREERWINS;?></p>
                <p>Career Losses:<?php echo $info->TEAM_CAREERLOSSES;?></p>
              </li>
          </ul>
      </div>
    <!--- END TEAM INFO-->
  
    <!--- START OF HISTORY CONTENT -->
       <div class="row">
          <div class="large-12 columns header history-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img"  src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>History</span>
            </h2>
          </div>
      </div>  
      <div class="row row-content history-team" style="display:none;">      
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
            <div class="panel">
              <p><?php echo $info->TEAM_HISTORY;?></p>
            </div>
        </div>
      </div>
    <!--- END OF HISTORY CONTENT -->
  
    <!--- START TEAM ACHIEVEMENTS-->
      <div class="row">
          <div class="large-12 columns header achievement-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Achievements</span>
            </h2>
          </div>
      </div>  
      <div class="row row-content achievement-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="team-row small-block-grid-1 medium-block-grid-1 large-block-grid-1 teams">
              <li>
                <p>Number of Playoffs Appearance:<?php echo $info->TEAM_PLAYOFF_APPEAR?></p>
                <p>Number of Finals Appearance:<?php echo $info->TEAM_FINALS_APPEAR;?></p>
    
                <?php if(!empty($champ)){?>
                  <b>Championship:</b>
                <?php }?>
                
                <?php foreach($champ as $champ):?>
                <p>League: <?php echo $champ->LEAGUE_NAME;?><br/>
                Year: <?php echo $champ->YEAR_WON;?></p>
                <?php endforeach;?>
              </li>
          </ul>
        </div>
      </div>
    <!--- END TEAM ACHIEVEMENT-->
  
    <!--- START TEAM CURRENT PLAYERS-->
      <div class="row">
          <div class="large-12 columns header currentplayers-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Current Players</span>
            </h2>
          </div>
      </div>
      <div class="row row-content currentplayers-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="currentplayers">
          </ul>
        </div>
      </div>
    <!--- END TEAM CURRENT PLAYERS-->
  
    <!--- START TEAM PAST PLAYERS-->
      <div class="row">
          <div class="large-12 columns header pastplayers-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Past Players</span>
            </h2>
          </div>
      </div>
      <div class="row row-content pastplayers-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="pastplayers">
          </ul>
        </div>
      </div>
    <!--- END TEAM PAST PLAYERS-->
  
    <!--- START TEAM NOTABLE PLAYERS-->
      <div class="row">
          <div class="large-12 columns header notableplayers-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Notable Players</span>
            </h2>
          </div>
      </div>
      <div class="row row-content notableplayers-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="notableplayers">
          </ul>
        </div>
      </div>
    <!--- END TEAM NOTABLE PLAYERS-->

    <!--- START TEAM NOTABLE PLAYERS-->
      <div class="row">
          <div class="large-12 columns header pastcoach-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Past Head Coaches</span>
            </h2>
          </div>
      </div>
      <div class="row row-content pastcoach-team" style="display:none;">
        <div class="small-11 small-centered medium-11 medium-centered large-11 large-centered columns">
          <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="pastcoaches">
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
      present+='<li><a href="<?php echo base_url().'pages_controller/view_player/'.$player_bridge->PLAYER_ID;?>"><img src="<?php echo base_url().'assets/img/player/'.$player_bridge->PLAYER_ID;?>.jpg" width="200" height="200" alt="past team"/></a><header class="team-name"><?php echo $teamplayer->PLAYER_FULLNAME;?></header><span><?php echo $player_bridge->YEAR,'-PRESENT';?></span></li>';
    <?php }else if($player_bridge->TYPE=='PAST'){?>
      past+='<li><a href="<?php echo base_url().'pages_controller/view_player/'.$player_bridge->PLAYER_ID;?>"><img src="<?php echo base_url().'assets/img/player/'.$player_bridge->PLAYER_ID;?>.jpg" width="200" height="200" alt="past team"/></a><header class="team-name"><?php echo $teamplayer->PLAYER_FULLNAME;?></header><span><?php echo $player_bridge->YEAR;?></span></li>';
    <?php }else if($player_bridge->TYPE=='NOTABLE'){?>
      notable+='<li><a href="<?php echo base_url().'pages_controller/view_player/'.$player_bridge->PLAYER_ID;?>"><img src="<?php echo base_url().'assets/img/player/'.$player_bridge->PLAYER_ID;?>.jpg" width="200" height="200" alt="past team"/></a><header class="team-name"><?php echo $teamplayer->PLAYER_FULLNAME;?></header><span><?php echo $player_bridge->YEAR;?></span></li>';
    <?php }?>
  <?php endforeach;?>

  <?php foreach($coach_bridge as $coach_bridge):?>
    <?php if($coach_bridge->TYPE=='PRESENT'){?>
      coachID=<?php echo $coach_bridge->COACH_ID;?>;
      $.getJSON("<?php echo base_url();?>pages_controller/get_coachName/"+coachID,success=function(data){
        coach='<a href="<?php echo base_url();?>pages_controller/view_coach/'+coachID+'">'+data+'</a>';
        $("#currentCoach").append(coach);
      });
    <?php }else{?>
      pastCoaches+='<li><a href="<?php echo base_url().'pages_controller/view_coach/'.$coach_bridge->COACH_ID;?>"><img src="<?php echo base_url().'assets/img/coach/'.$coach_bridge->COACH_ID;?>.jpg" alt="past team"/></a><header class="team-name"><?php echo $coach_bridge->YEAR;?></header></li>';
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
});
</script>