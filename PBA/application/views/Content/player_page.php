 <div class="page-content">
    <div class="small-12 small-centered medium-12 medium-centered large-10 large-centered columns">
      <h1>THE PBA PLAYERS</h1>
        <table id="searchTable" class="display" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th width="50%" style="text-align: center;" class="table-header">Player</th>
            <th width="50%" style="text-align: center;" class="table-header">Team</th>
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
    cur+="<tr><td style='text-align: center;' class='table-content'><a href='<?php echo base_url().'pages_controller/view_player/'.$player->PLAYER_ID;?>'><img class='table-img' src='<?php echo base_url();?>assets/img/player/<?php echo $player->PLAYER_PORTRAIT_PHOTO?>' width='70'/></a> <?php echo $player->PLAYER_FULLNAME;?></td><td style='text-align: center;' class='table-content'><a href='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'><img class='table-img' src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/></a><?php echo $team->TEAM_NAME;?></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable({
    "order": [ 0, 'asc' ]
  });
});
</script>