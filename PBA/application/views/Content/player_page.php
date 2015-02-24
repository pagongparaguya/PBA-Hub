</div> <!--- closing tag for the container -->
<div class="page-content">
    <div class="small-12 small-centered medium-12 large-10 large-centered columns">
      <hr class="hr-dotted">
      <h1>THE PBA PLAYERS</h1>
      <hr class="hr-dotted">  
        <table id="searchTable" class="display" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th width="50%" class="table-header text-center has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to toggle the sorting of player names in ascending or descending order"><img src="<?php echo base_url();?>/assets/img/basketball.png" /><span>PLAYER</span></th>
            <th width="50%" class="table-header text-center"><img src="<?php echo base_url();?>/assets/img/basketball.png" /><span>TEAM</span></th>
          </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
    </div>   
</div>
<script>
$(document).ready(function(){
  var cur="";
  <?php foreach($player as $player):?>
  <?php $tid = $this->page_model->get_playerTeam($player->PLAYER_ID);
        $team = $this->page_model->get_teamInfo($tid->TEAM_ID);?>
    cur+="<tr><td class='table-content text-center'><a href='<?php echo base_url().'pages_controller/view_player/'.$player->PLAYER_ID;?>'> <img class='pages-elem-img pages-elem-img' src='<?php echo base_url();?>assets/img/player/<?php echo $player->PLAYER_PORTRAIT_PHOTO?>' width='70'/> </a><br/><span class='pages-elem-name'><?php echo $player->PLAYER_FULLNAME;?></span> </td><td style='text-align: center;' class='table-content'><a href='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'><img class='pages-elem-img pages-elem-img' src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/><br /></a> <span class='pages-elem-name'><?php echo $team->TEAM_NAME;?></span> </td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);

  $('#searchTable').dataTable({
    "order": [ 0, 'asc' ],
    "aoColumns":
    [
      null,
      { "bSortable": false }
    ]
  });
});
</script>