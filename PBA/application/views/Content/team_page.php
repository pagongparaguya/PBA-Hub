<div class="page-content">
    <div class="small-12 small-centered medium-12 medium-centered large-10 large-centered columns">
      <h1>THE PBA TEAMS</h1>
        <table id="searchTable" class="display" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th class="table-header" style="text-align: center;" width="50%">Team</th>
            <th class="table-header" style="text-align: center;" width="50%">Year Started</th>
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
  <?php foreach($team as $team):?>
    cur+="<tr onclick=\"window.location ='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'\"> <td style='text-align: center;' class='table-content'><img class='table-img' src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/><?php echo $team->TEAM_NAME;?></td><td style='text-align: center;' class='table-content'><?php echo $team->TEAM_YEARSTARTED;?></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable({
    "order": [ 0, 'asc' ]
  });

  $("#searchTable_length")
});
</script>