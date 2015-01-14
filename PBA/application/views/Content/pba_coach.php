<!--- START OF SLIDER -->
       <div class="row row-content">
         <div class="small-12 medium-12 large-12 columns">
               <ul data-orbit>
                <li>
                  <img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE1;?>" alt="slide 1" />
                  <div class="orbit-caption">
                  </div>
                </li>
                <li class="active">
                  <img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE2;?>" alt="slide 2" />
                  <div class="orbit-caption">
                  </div>
                </li>
                <li>
                  <img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE3;?>" alt="slide 3" />
                  <div class="orbit-caption">
                  </div>
                </li>
                <li>
                  <img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE4;?>" alt="slide 4" />
                  <div class="orbit-caption">
                  </div>
                </li>
                <li>
                  <img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE5;?>" alt="slide 5" />
                  <div class="orbit-caption">
                  </div>
                </li>
              </ul>
         </div>
       </div>
    <!--- END OF SLIDER -->   

    <!--- START OF COACH NAME CONTENT -->
    <div class="row">
      <div class="row row-content">
        <div class="large-12 columns">
            <h1><?php echo $info->COACH_FULLNAME;?></h1>
        </div>
      </div>
    </div>
    <!--- END OF COACH NAME CONTENT -->
    
	<!--- START COACH INFO-->
	<div class="row row-content">
      <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams">
          <li>
            <img style="border:3px solid blue;" src="<?php echo base_url().'assets/img/coach/'.$info->COACH_PORTRAIT_PHOTO;?>" alt="<?php echo $info->COACH_FULLNAME;?>-portrait" />
          </li>
          <li>
      			<p>Birth Date:<?php echo $info->COACH_BDATE;?></p>
            <p>Birth Place:<?php echo $info->COACH_BIRTHPLACE;?></p>
      			<p>Age:<?php echo $info->COACH_AGE;?></p>
      			<p>Current Team:</p>
      			<p id="currentTeam"></p>
      			<p id="teamTime"></p>
          </li>
          <li>
            <p>Coach Status:<?php  if($info->COACH_STAT==1){echo "Active";}else{echo "Retired";}?></p>
            <p>Years Started:<?php echo $info->COACH_YEARSTARTED;?></p>
            <p>Career Wins:<?php echo $info->COACH_CAREERWINS;?></p>
          </li>
      </ul>
    </div>
    <!--- END COACH INFO-->

    <!--- START COACH ACHIEVEMENTS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams achievement-block" style="background-color:#4A5052;color:white;">ACHIEVEMENTS</h1>
      </div>
    </div>
    <div class="row row-content achievement">
      <ul class="team-row small-block-grid-2 medium-block-grid-1 large-block-grid-1 teams">
          <li>
            <p>Coach Playoff Appear:<?php echo $info->COACH_PLAYOFF_APPEAR;?></p>
            <p>Coach Finals Appear:<?php echo $info->COACH_FINALS_APPEAR;?></p>

            <?php if(!empty($award)){?>
            <b>Award:</b>
            <?php }?>

            <?php foreach($award as $award):?>
      			<p><?php echo $award->AWARD_NAME;?><br/>
      			Year: <?php echo $award->YEAR_AWARDED;?></p>
      			<?php endforeach;?>


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
	<!-- END COACH ACHIEVEMENTS-->

	<!--- START COACH PAST TEAMS-->
    <div class="row">
      <div class="large-12 columns">
          <h1 class="current-teams pastteam-block" style="background-color:#4A5052;color:white;">PAST TEAMS</h1>
      </div>
    </div>
    <div class="row row-content pastteam">
      <ul class="team-row small-block-grid-2 medium-block-grid-3 large-block-grid-3 teams" id="pastTeam">
      </ul>
    </div>
	<!--- END COACH PAST TEAMS-->

	<script>
	$(document).ready(function(){
    var past="";
    var present="";
    var presentTime="";
		$(".achievement-block").click(function(){
			$(".achievement").slideToggle(2000);
		});
		$(".pastteam-block").click(function(){
			$(".pastteam").slideToggle(2000);
		});

    <?php foreach($team_bridge as $team):?>
      <?php if($team->TYPE=='PRESENT'){?>
        present+='<a href="<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>"><img src="<?php echo base_url().'assets/img/team/'.$team->TEAM_ID;?>.png" width="200" height="200"/></a>';
        presentTime='<?php echo $team->YEAR.'-'.$team->TYPE;?>';
      <?php }else if($team->TYPE=='PAST'){?>
        past+='<li><a href="<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>"><img src="<?php echo base_url().'assets/img/team/'.$team->TEAM_ID;?>.png" alt="past team"/></a><header class="team-name">Year:<?php echo $team->YEAR;?></header></li>';
      <?php }?>
    <?php endforeach;?>

    if(past==''){
      past='<h1>No Data To Display</h1>';
    }

    $("#pastTeam").html(past);
    $("#teamTime").append(presentTime);
    $("#currentTeam").append(present);
	});
	</script>