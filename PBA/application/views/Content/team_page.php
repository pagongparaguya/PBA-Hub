</div> <!--- closing tag for the container -->
<!-- <div class="page-content">
    <div class="small-12 small-centered medium-12 medium-centered large-10 large-centered columns">
      <hr class="hr-dotted" />
      <h1>THE PBA TEAMS</h1>
      <hr class="hr-dotted" />
        <table id="searchTable" class="display" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th class="table-header" style="text-align: center;" width="33%"></th>
            <th class="table-header" style="text-align: center;" width="33%"></th>
            <th class="table-header" style="text-align: center;" width="33%"></th>
          </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
    </div>   
</div> -->

<!--- START OF CURRENT TEAMS CONTENT -->
<div class="page-content">
        <div class="row">
          <div class="small-12 columns">
              <hr />
              <h1 class="current-teams">PBA League Current Teams</h1>
              <hr />
          </div>
        </div>
            
        <div class="row row-content">
          <ul class="team-row small-block-grid-2 medium-block-grid-4 large-block-grid-4 text-center">
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/1"><img src="<?php echo base_url();?>assets/img/team/1.png" alt="Alaska Logo"></a>
                <header class="team-name">Alaska Aces</header> 
                <span>Since 1986</span>
              </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/2"><img src="<?php echo base_url();?>assets/img/team/2.png" alt="Alaska Logo"></a>
                <header class="team-name">Barako Bull Energy</header>
                <span>Since 2002 from the 1999 Tanduay Rhum Masters</span>
                </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/3"><img src="<?php echo base_url();?>assets/img/team/3.png" alt="Alaska Logo"></a>
                <header class="team-name">Barangay Ginebra San Miguel</header>
                <span>Since 1979</span>
              </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/4"><img src="<?php echo base_url();?>assets/img/team/4.png" alt="Alaska Logo"></a>
                <header class="team-name">Blackwater Elite</header>
                <span>Since 2014</span>
              </li>
          </ul>
        </div>
             
        <div class="row row-content">
          <ul class="team-row small-block-grid-2 medium-block-grid-4 large-block-grid-4 text-center">
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/5"><img src="<?php echo base_url();?>assets/img/team/5.png" alt="Alaska Logo"></a>
                <header class="team-name">Globalport Batang Pier</header>
                <span>Since 2012 from Powerade</span>
              </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/6"><img src="<?php echo base_url();?>assets/img/team/6.png" alt="Alaska Logo"></a>
                <header class="team-name">Kia Sorento Basketball</header>
                <span>Since 2014</span>
              </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/7"><img src="<?php echo base_url();?>assets/img/team/7.png" alt="Alaska Logo"></a>
                <header class="team-name">Meralco Bolts</header>
                <span>Since 2010 from Sta. Lucia</span>
              </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/8"><img src="<?php echo base_url();?>assets/img/team/8.png" alt="Alaska Logo"></a>
                <header class="team-name">NLEX Road Warriors</header>
                <span>Since 2014 from Shopinas/Air21</span>
              </li>
          </ul>
        </div>
            
        <div class="row row-content">
          <ul class="team-row small-block-grid-2 medium-block-grid-4 large-block-grid-4 text-center">
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/9"><img src="<?php echo base_url();?>assets/img/team/9.png" alt="Alaska Logo"></a>
                <header class="team-name">Purefoods Star Hotshots</header>
                <span>Since 1988 from the 1975 Tanduay Rhum Makers</span>
              </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/10"><img src="<?php echo base_url();?>assets/img/team/10.png" alt="Alaska Logo"></a>
                <header class="team-name">Rain or Shine Elasto Painters</header>
                <span>Since 2006 from the Shell Turbo Chargers</span>
              </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/11"><img src="<?php echo base_url();?>assets/img/team/11.png" alt="Alaska Logo"></a>
                <header class="team-name">San Miguel Beermen</header>
                <span>Since 1975-1985, 1986**</span>
              </li>
              <li>
                <a href="<?php echo base_url();?>pages_controller/view_team/12"><img src="<?php echo base_url();?>assets/img/team/12.png" alt="Alaska Logo"></a>
                <header class="team-name">Talk 'N Text Tropang Texters</header>
                <span>Since 1990</span>
              </li>
          </ul>
        </div>
</div>        
<!--- END OF CURRENT TEAMS CONTENT -->

<script>
$(document).ready(function(){
  var cur="";


  <?php $count=0; foreach($team as $team):
    if($count%3==0){
      $i=$count+3;
  ?>
    cur+="<tr>";
  <?php }?>

    cur+="<td class='text-center'><a href='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'><img class='pages-elem-img' src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/></a><br/><span class='pages-elem-name'><?php echo $team->TEAM_NAME;?></span><br/><span>Since <?php echo $team->TEAM_YEARSTARTED;?></span></td>";
  
  <?php
  if($i==$count){
    $i=-1;
  ?>
    cur+="<tr/>";
  <?php }$count++;?>

  <?php endforeach;?>

  $("#tbody").append(cur);
});
</script>