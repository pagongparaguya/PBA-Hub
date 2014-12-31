<div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">
  <h1>THE PBA TEAMS</h1>
    <table id="searchTable" class="display" cellspacing="0">
      <thead>
      <tr>
        <th class="table-content">TEAM</th>
        <th class="table-content">YEAR STARTED</th>
      </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
</div>   
<script>
$(document).ready(function(){
  var cur="";
  <?php foreach($team as $team):?>
    cur+="<tr onclick=\"window.location ='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'\"> <td class='table-content'><img src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/><?php echo $team->TEAM_NAME;?></td><td class='table-content'><?php echo $team->TEAM_YEARSTARTED;?></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable({
    "order": [ 0, 'asc' ]
  });
});
</script>