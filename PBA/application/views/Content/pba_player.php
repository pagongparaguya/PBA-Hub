</div> <!--- closing tag for the container -->
<div class="page-content profile-page">
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
    <!--- START PLAYER INFO-->
      <div class="row row-content">
          <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3 profile-elem-content text-center">
              <li>
                <img class="frame" src="<?php echo base_url().'assets/img/player/'.$info->PLAYER_PORTRAIT_PHOTO;?>" alt="<?php echo $info->PLAYER_FULLNAME;?>-portrait" />
                <h1><?php echo $info->PLAYER_FULLNAME;?></h1>
              </li>
              <li>
                <p><strong>Birth date</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_BDATE;?></p>
                <p><strong>Age</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_AGE;?></p>
                <p><strong>Jersey Number</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_JERSEY_NO;?></p>
                <p><strong>Latest team</strong> <span class="profile-elem-bar">|</span> from <span id="teamTime"></span></p>
                <p id="currentTeam"></p>
              </li>
              <li>
                <p><strong>Position</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_POSITION;?></p>
                <p><strong>Status</strong> <span class="profile-elem-bar">|</span> <?php  if($info->PLAYER_STAT==1){echo "Active";}else{echo "Retired";}?></p>
                <p><strong>Year drafted on PBA</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_YEARSTARTED;?></p>
                <p><strong>Years played</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_YEARS_PLAYED;?></p>
                <p><strong>Height</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_HEIGHT;?></p>
                <p><strong>Weight</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_WEIGHT;?></p>
              </li>
          </ul>
      </div>
    <!--- END PLAYER INFO-->
  
    <!--- START PLAYER ACHIEVEMENTS-->      
      <div class="row">
            <div class="large-12 columns header achievement-block" >
              <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
                <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
                <span>Achievements</span>
              </h2>
            </div>
      </div>
      <div class="row row-content achievement" style="display:none;">
        <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1 text-center">
            <li>
              <p><strong>Playoffs appearance</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_PLAYOFF_APPEAR;?></p>
              <p><strong>Finals appearance</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_FINALS_APPEAR;?></p>
              <p><strong>Allstar appearance</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_ALLSTAR_APPEAR;?></p>
  
              <?php if(!empty($award)){?>
                <p><strong><span class="profile-elem-bar">o</span> <strong>AWARDS WON</strong> <span class="profile-elem-bar">o</span></strong></p>
              <?php }?>
              
                <?php foreach($award as $award):?>
                  <p><strong><?php echo $award->AWARD_NAME;?></strong> <span class="profile-elem-bar">|</span> <?php echo $award->AWARD_YEAR;?> <br/>
                <?php endforeach;?>
    
              <?php if(!empty($champ)){?>
                <p><strong><span class="profile-elem-bar">o</span> <strong>CHAMPIONSHIPS WON</strong> <span class="profile-elem-bar">o</span></strong></p>
              <?php }?>
  
                <?php foreach($champ as $champ):?>
                  <p><strong><?php echo $champ->LEAGUE_NAME;?></strong> <span class="profile-elem-bar">|</span> <?php echo $champ->YEAR_WON;?><br/>
                <?php endforeach;?>
            </li>
        </ul>
      </div>
    <!-- END PLAYER ACHIEVEMENTS-->
  
    <!--- START PLAYER STATISTICS-->
      <div class="row">
            <div class="large-12 columns header stat-block">
              <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
                <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
                <span>Career Statistics</span>
              </h2>
            </div>
      </div>

      <div class="row row-content stat" style="display:none;">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-2 text-center">
            <li>
              <p><strong>Average points per game</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_PPG;?></p>
              <p><strong>Average assists per game</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_APG;?></p>
              <p><strong>Average rebounds per game</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_RPG;?></p>
              <p><strong>Average blocks per game</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_BPG;?></p>
              <p><strong>Average steals per game</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_SPG;?></p>
            </li>
            <li>
              <p><strong>Average turnovers per game</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_TPG;?></p>
              <p><strong>Average fouls per game</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_FPG;?></p>
              <p><strong>Free throw percentage</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_FTP;?></p>
              <p><strong>Field goal percentage</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_FGP;?></p>
              <p><strong>Three point percentage</strong> <span class="profile-elem-bar">|</span> <?php echo $info->PLAYER_TPP;?></p>
            </li>
        </ul>
      </div>
    <!--- END PLAYER STATISTICS-->
  
    <!--- START PLAYER PAST TEAMS-->
      <div class="row">
          <div class="large-12 columns header pastteam-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Past Teams</span>
            </h2>
          </div>
      </div>
      <div class="row row-content pastteam" style="display:none;">
        <ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-3 text-center" id="pastTeam">
        </ul>
      </div>
    <!--- END PLAYER PAST TEAMS-->
</div>

	<script>
	$(document).ready(function(){
    var past="";
    var present="";
    var presentTime="";
		$(".achievement-block").click(function(){
			$(".achievement").slideToggle(1500);
		});
		$(".stat-block").click(function(){
			$(".stat").slideToggle(1500);
		});
		$(".pastteam-block").click(function(){
			$(".pastteam").slideToggle(1500);
		});
    <?php foreach($team_bridge as $team):?>
      
      <?php if($team->TYPE=='PRESENT'){?>
        present+='<a href="<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>"><img src="<?php echo base_url().'assets/img/team/'.$team->TEAM_ID;?>.png" width="200" height="200"/></a>';
        presentTime='<?php echo $team->YEAR.'-'.$team->TYPE;?>';
      
      <?php }else if($team->TYPE=='PAST'){?>
        past+='<li><a href="<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>"><img src="<?php echo base_url().'assets/img/team/'.$team->TEAM_ID;?>.png" alt="past team"/></a><header class="team-name profile-elem-teamdur"><?php echo $team->YEAR;?></header></li>';
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