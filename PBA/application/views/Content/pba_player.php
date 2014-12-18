<!--- START OF SLIDER -->
       <div class="row row-content">
         <div class="small-12 medium-12 large-12 columns">
               <ul data-orbit>
                <li>
                  <img src="<?php echo base_url().'assets/img/playercarousel/'.$image->IMAGE1;?>" alt="slide 1" />
                  <div class="orbit-caption">
                  </div>
                </li>
                <li class="active">
                  <img src="<?php echo base_url().'assets/img/playercarousel/'.$image->IMAGE2;?>" alt="slide 2" />
                  <div class="orbit-caption">
                  </div>
                </li>
                <li>
                  <img src="<?php echo base_url().'assets/img/playercarousel/'.$image->IMAGE3;?>" alt="slide 3" />
                  <div class="orbit-caption">
                  </div>
                </li>
                <li>
                  <img src="<?php echo base_url().'assets/img/playercarousel/'.$image->IMAGE4;?>" alt="slide 4" />
                  <div class="orbit-caption">
                  </div>
                </li>
                <li>
                  <img src="<?php echo base_url().'assets/img/playercarousel/'.$image->IMAGE5;?>" alt="slide 5" />
                  <div class="orbit-caption">
                  </div>
                </li>
              </ul>
         </div>
       </div>
    <!--- END OF SLIDER -->   

    <!--- START OF PLAYER NAME CONTENT -->
    <div class="row">
      <div class="row row-content">
        <div class="large-12 columns">
            <h1><?php echo $info->PLAYER_FULLNAME;?></h1>
        </div>
      </div>
    </div>
    <!--- END OF PLAYER NAME CONTENT -->
    
	<!--- START PLAYER INFO-->
	<div class="row row-content">
      <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams">
          <li>
            <img style="border:3px solid blue;" src="<?php echo base_url().'assets/img/player/'.$info->PLAYER_PORTRAIT_PHOTO;?>" alt="<?php echo $info->PLAYER_FULLNAME;?>-portrait" />
          </li>
          <li>
      			<p>Birth Date:<?php echo $info->PLAYER_BDATE;?></p>
      			<p>Age:<?php echo $info->PLAYER_AGE;?></p>
      			<p>Player Jersey No:<?php echo $info->PLAYER_JERSEY_NO;?></p>
      			<p>Current Team:</p>
      			<p id="currentTeam"></p>
      			<p><?php echo $info->PLAYER_TEAMTIME;?></p>
          </li>
          <li>
            <p>Player Position:<?php echo $info->PLAYER_POSITION;?></p>
            <p>Player Status:<?php  if($info->PLAYER_STAT==1){echo "Active";}else{echo "Retired";}?></p>
            <p>Year Drafted on PBA:<?php echo $info->PLAYER_YEARSTARTED;?></p>
            <p>Years Played:<?php echo $info->PLAYER_YEARS_PLAYED;?></p>
            <p>Height:<?php echo $info->PLAYER_HEIGHT;?></p>
            <p>Weight:<?php echo $info->PLAYER_WEIGHT;?></p>
          </li>
      </ul>
    </div>
    <!--- END PLAYER INFO-->

    <!--- START PLAYER ACHIEVEMENTS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams achievement-block" style="background-color:blue;color:white;">ACHIEVEMENTS</h1>
      </div>
    </div>
    <div class="row row-content achievement">
      <ul class="team-row small-block-grid-2 medium-block-grid-1 large-block-grid-1 teams">
          <li>
            <p>Player Playoff Appear:<?php echo $info->PLAYER_PLAYOFF_APPEAR;?></p>
            <p>Player Finals Appear:<?php echo $info->PLAYER_FINALS_APPEAR;?></p>
            <p>Player Allstar Appear:<?php echo $info->PLAYER_ALLSTAR_APPEAR;?></p>
            <b>Award:</b>
            <?php foreach($award as $award):?>
      			<p><?php echo $award->AWARD_NAME;?><br/>
      			Year: <?php echo $award->AWARD_YEAR;?></p>
      			<?php endforeach;?>
  
            <b>Championship:</b>
      			<?php foreach($champ as $champ):?>
      			<p>League: <?php echo $champ->LEAGUE_NAME;?><br/>
      			Year: <?php echo $champ->YEAR_WON;?></p>
      			<?php endforeach;?>
          </li>
      </ul>
    </div>
	<!-- END PLAYER ACHIEVEMENTS-->

	<!--- START PLAYER STATISTICS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams stat-block" style="background-color:blue;color:white;">CAREER STATISTICS</h1>
      </div>
    </div>
    <div class="row row-content stat">
      <ul class="team-row small-block-grid-2 medium-block-grid-2 large-block-grid-2 teams">
          <li>
      			<p>Player PPG:<?php echo $info->PLAYER_PPG;?></p>
      			<p>Player APG:<?php echo $info->PLAYER_APG;?></p>
      			<p>Player RPG:<?php echo $info->PLAYER_RPG;?></p>
      			<p>Player BPG:<?php echo $info->PLAYER_BPG;?></p>
      			<p>Player SPG:<?php echo $info->PLAYER_SPG;?></p>
          </li>
          <li>
      			<p>Player TPG:<?php echo $info->PLAYER_TPG;?></p>
      			<p>Player FPG:<?php echo $info->PLAYER_FPG;?></p>
      			<p>Player FTP:<?php echo $info->PLAYER_FTP;?></p>
      			<p>Player FGP:<?php echo $info->PLAYER_FGP;?></p>
      			<p>Player TPP:<?php echo $info->PLAYER_TPP;?></p>
          </li>
      </ul>
    </div>
	<!--- END PLAYER STATISTICS-->

	<!--- START PLAYER PAST TEAMS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams pastteam-block" style="background-color:blue;color:white;">PAST TEAMS</h1>
      </div>
    </div>
    <div class="row row-content pastteam">
      <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="pastTeam">
      </ul>
    </div>
	<!--- END PLAYER PAST TEAMS-->

	<script>
	$(document).ready(function(){
    var past="";
    var present="";
		$(".achievement-block").click(function(){
			$(".achievement").slideToggle(2000);
		});
		$(".stat-block").click(function(){
			$(".stat").slideToggle(2000);
		});
		$(".pastteam-block").click(function(){
			$(".pastteam").slideToggle(2000);
		});
    <?php foreach($team_bridge as $team):?>
      <?php if($team->TYPE=='PRESENT'){?>
        present+='<a href="<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>"><img src="<?php echo base_url().'assets/img/team/'.$team->TEAM_ID;?>.png" width="200" height="200"/></a>';
      <?php }else if($team->TYPE=='PAST'){?>
        past+='<li><a href="<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>"><img src="<?php echo base_url().'assets/img/team/'.$team->TEAM_ID;?>.png" alt="past team"/></a><header class="team-name">Year:<?php echo $team->YEAR;?></header></li>';
      <?php }?>
    <?php endforeach;?>
    $("#pastTeam").append(past);
    $("#currentTeam").append(present);
	});
	</script>