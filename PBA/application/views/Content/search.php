<div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">
<h1>SEARCH</h1>
    <table id="searchTable" class="display" cellspacing="0">
      <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
      </tr>
      </thead>
      <tbody>
        <?php foreach($player as $player):?>
          <tr onclick="document.location ='<?php echo base_url().'pages_controller/view_player/'.$player->PLAYER_ID;?>'"><td><?php echo $player->PLAYER_FULLNAME;?></td><td>Player</td></tr>
        <?php endforeach;?>
        <?php foreach($coach as $coach):?>
          <tr onclick="document.location ='<?php echo base_url().'pages_controller/view_coach/'.$coach->COACH_ID;?>'"><td><?php echo $coach->COACH_FULLNAME;?></td><td>Coach</td></tr>
        <?php endforeach;?>
        <?php foreach($team as $team):?>
          <tr onclick="document.location ='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'"><td><?php echo $team->TEAM_NAME;?></td><td>Team</td></tr>
        <?php endforeach;?>
      </tbody>
    </table>
</div>   
<script>
$(document).ready(function(){
    $('#searchTable').dataTable();
});
</script>