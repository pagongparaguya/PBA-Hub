</div> <!--- closing tag for the container -->
<div class="page-content profile-page"> 
    <!-- OWL CAROUSEL  -->
      <div id="carousel-elems">          
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE1;?>" alt="slide 1" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE2;?>" alt="slide 2" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE3;?>" alt="slide 3" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE4;?>" alt="slide 4" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE5;?>" alt="slide 5" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE6;?>" alt="slide 6" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE7;?>" alt="slide 7" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE8;?>" alt="slide 8" /></div>
          <div class="item"><img src="<?php echo base_url().'assets/img/coachcarousel/'.$image->IMAGE9;?>" alt="slide 9" /></div>
      </div> 
    <!-- END OF OWL CAROUSEL -->       
    
    <!--- START COACH INFO-->
      <div class="row row-content">        
          <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-3 profile-elem-content text-center">  
            <li>
                <img class="frame" src="<?php echo base_url().'assets/img/coach/'.$info->COACH_PORTRAIT_PHOTO;?>" alt="<?php echo $info->COACH_FULLNAME;?>-portrait" />
                <h1><?php echo $info->COACH_FULLNAME;?></h1>
            </li>
          
            <li>
                <p><strong>Birth date <span class="profile-elem-bar">|</span> </strong> <?php echo $info->COACH_BDATE;?></p>
                <p><strong>Birth place</strong> <span class="profile-elem-bar">|</span> <?php echo $info->COACH_BIRTHPLACE;?></p>
                <p><strong>Age</strong> <span class="profile-elem-bar">|</span> <?php echo $info->COACH_AGE;?></p>
                <p><strong>Coach status</strong> <span class="profile-elem-bar">|</span> <?php  if($info->COACH_STAT==1){echo "Active";}else{echo "Retired";}?></p>
                <p><strong>Year started</strong> <span class="profile-elem-bar">|</span> <?php echo $info->COACH_YEARSTARTED;?></p>
                <p><strong>Career wins</strong> <span class="profile-elem-bar">|</span> <?php echo $info->COACH_CAREERWINS;?></p>
            </li>
          
            <li>
                  <p><strong>Latest team</strong> <span class="profile-elem-bar">|</span> from <span id="teamTime"></span></p>
                  <p id="currentTeam"></p>
            </li>
          </ul>
      </div>
    <!--- END COACH INFO-->
  
    <!--- START COACH ACHIEVEMENTS-->
      <div class="row">
            <div class="large-12 columns header achievement-block">
              <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
                <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
                <span>Achievements</span>
              </h2>
            </div>
      </div>

      <div class="row row-content achievement" style="display:none;">
        <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-1 text-center">
            <li>
              <p><strong>Playoffs Appearance</strong> <span class="profile-elem-bar">|</span>  <?php echo $info->COACH_PLAYOFF_APPEAR;?></p>
              <p><strong>Finals Appearance</strong> <span class="profile-elem-bar">|</span>  <?php echo $info->COACH_FINALS_APPEAR;?></p>

              
              <strong><span class="profile-elem-bar">o</span> <strong>AWARDS WON</strong> <span class="profile-elem-bar">o</span></strong>
              <?php if(empty($award)){?>
                <h1>No Awards To Display</h1>
              <?php }?>

              <?php foreach($award as $award):?>
                <p><?php echo $award->AWARD_NAME;?><br/>
                <strong>Year won</strong> <span class="profile-elem-bar">|</span> <?php echo $award->YEAR_AWARDED;?></p>
              <?php endforeach;?>
    
              <strong><span class="profile-elem-bar">o</span> <strong>CHAMPIONSHIPS WON</strong> <span class="profile-elem-bar">o</span></strong>
              <?php if(empty($champ)){?>
                <h1>No Championships To Display</h1>
              <?php }?>
              
              <?php foreach($champ as $champ):?>
                <p><strong>League</strong> <span class="profile-elem-bar">|</span> <?php echo $champ->LEAGUE_NAME;?><br/>
                <strong>Year</strong> <span class="profile-elem-bar">|</span> <?php echo $champ->YEAR_WON;?></p>
              <?php endforeach;?>
            </li>
        </ul>
      </div>
    <!-- END COACH ACHIEVEMENTS-->
  
    <!--- START COACH PAST TEAMS-->
      <div class="row">
          <div class="large-12 columns header pastteam-block">
            <h2 class="header-content has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to view my content, press me again to hide my content.">
              <img class="header-content-img" src="<?php echo base_url();?>assets/img/basketball.png" alt="basketball" />
              <span>Past Teams</span>
            </h2>
          </div>
      </div>
      <div class="row row-content pastteam" style="display:none;">
          <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-3 text-center" id="pastTeam">
          </ul>
      </div>
    <!--- END COACH PAST TEAMS-->
</div>

<script>
$(document).ready(function(){
  var past="";
  var present="";
  var presentTime="";
	$(".achievement-block").click(function(){
		$(".achievement").slideToggle(1500);
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
    past='<h3>No Data To Display</h1>';
  }

  $("#pastTeam").html(past);
  $("#teamTime").append(presentTime);
  $("#currentTeam").append(present);

  $("#carousel-elems").owlCarousel({
      autoPlay: 5000, //Set AutoPlay to 5 seconds
      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
  });
});
</script>