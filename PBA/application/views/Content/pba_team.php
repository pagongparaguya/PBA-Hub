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
        <div class="large-12 columns">
            <h1><?php echo $info->TEAM_NAME;?></h1>
        </div>
      </div>
    </div>
    <!--- END OF TEAM NAME CONTENT -->

	<!--- START TEAM INFO-->
	<div class="row row-content">
      <ul class="team-row small-block-grid-2 medium-block-grid-2 large-block-grid-2 teams">
          <li>
            <img style="border:3px solid blue;" src="<?php echo base_url().'assets/img/team/'.$info->TEAM_LOGO;?>" alt="<?php echo $info->TEAM_NAME;?>-photo"/>
          </li>
          <li>
      			<p>Year Started:<?php echo $info->TEAM_YEARSTARTED;?></p>
            <p id="currentCoach">Current Head Coach: </p>
            <p>Career Wins:<?php echo $info->TEAM_CAREERWINS;?></p>
            <p>Career Losses:<?php echo $info->TEAM_CAREERLOSSES;?></p>
          </li>
      </ul>
    </div>
    <!--- END TEAM INFO-->

    <!--- START OF HISTORY CONTENT -->
      <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams history-block" style="background-color:blue;color:white;">HISTORY</h1>
      </div>
    </div>

    <div class="row row-content history-team">      
      <div class="small-12 columns">
          <div class="panel">
            <p><?php echo $info->TEAM_HISTORY;?></p>
            </div>
      </div>
    </div>
    <!--- END OF HISTORY CONTENT -->

	<!--- START TEAM ACHIEVEMENTS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams achievement-block" style="background-color:blue;color:white;">ACHIEVEMENT</h1>
      </div>
    </div>

    <div class="row row-content achievement-team">
      <ul class="team-row small-block-grid-1 medium-block-grid-1 large-block-grid-1 teams">
          <li>
      			<p>Number of Playoff Appearance:<?php echo $info->TEAM_PLAYOFF_APPEAR?></p>
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
	<!--- END TEAM ACHIEVEMENT-->

	<!--- START TEAM CURRENT PLAYERS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams currentplayers-block" style="background-color:blue;color:white;">CURRENT PLAYERS</h1>
      </div>
    </div>
    <div class="row row-content currentplayers-team">
      <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="currentplayers">
      </ul>
    </div>
	<!--- END TEAM CURRENT PLAYERS-->

  <!--- START TEAM PAST PLAYERS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams pastplayers-block" style="background-color:blue;color:white;">PAST PLAYERS</h1>
      </div>
    </div>
    <div class="row row-content pastplayers-team">
      <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="pastplayers">
      </ul>
    </div>
  <!--- END TEAM PAST PLAYERS-->

  <!--- START TEAM NOTABLE PLAYERS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams notableplayers-block" style="background-color:blue;color:white;">NOTABLE PLAYERS</h1>
      </div>
    </div>
    <div class="row row-content notableplayers-team">
      <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="notableplayers">
      </ul>
    </div>
  <!--- END TEAM NOTABLE PLAYERS-->

	<script>
	$(document).ready(function(){
    var present="";
    var past="";
    var notable="";
    var coach="";
    var coachID="";
		$(".history-block").click(function(){
			$(".history-team").slideToggle(2000);
		});
    $(".achievement-block").click(function(){
      $(".achievement-team").slideToggle(2000);
    });
		$(".currentplayers-block").click(function(){
			$(".currentplayers-team").slideToggle(2000);
		});
		$(".pastplayers-block").click(function(){
			$(".pastplayers-team").slideToggle(2000);
		});
    $(".notableplayers-block").click(function(){
      $(".notableplayers-team").slideToggle(2000);
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
      <?php }?>
    <?php endforeach;?>

    $.getJSON("<?php echo base_url();?>pages_controller/get_coachName/"+coachID,success=function(data){
      coach='<a href="<?php echo base_url();?>pages_controller/view_coach/'+coachID+'">'+data+'</a>';
      $("#currentCoach").append(coach);
    });
    
    $("#currentplayers").append(present);
    $("#pastplayers").append(past);
    $("#notableplayers").append(notable);
  });
	</script>
     
