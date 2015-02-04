 <div class="page-content list-pages">
    <div class="small-12 small-centered medium-12 medium-centered large-10 large-centered columns">
      <h1>THE PBA PLAYERS</h1>
        <table id="searchTable" class="display" cellspacing="0">
          <thead>
          <tr>
            <th class="table-header">Player</th>
            <th class="table-header">Team</th>
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
    cur+="<tr onclick=\"window.location ='<?php echo base_url().'pages_controller/view_player/'.$player->PLAYER_ID;?>'\"><td class='table-content'><img class='table-img' src='<?php echo base_url();?>assets/img/player/<?php echo $player->PLAYER_PORTRAIT_PHOTO?>' width='70'/> <?php echo $player->PLAYER_FULLNAME;?></td><td class='table-content'><img class='table-img' src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/><?php echo $team->TEAM_NAME;?></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable({
    "order": [ 0, 'asc' ]
  });
});
</script>