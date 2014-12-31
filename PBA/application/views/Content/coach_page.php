<div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">
  <h1>THE PBA COACHES</h1>
    <table id="searchTable" class="display" cellspacing="0">
      <thead>
      <tr>
        <th class="table-content">COACH</th>
        <th class="table-content">TEAM</th>
      </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
</div>   
<script>
$(document).ready(function(){
  var cur="";
  <?php foreach($coach as $coach):?>
  <?php $tid = $this->page_model->get_coachTeam($coach->COACH_ID);
        $team = $this->page_model->get_teamInfo($tid->TEAM_ID);?>
    cur+="<tr onclick=\"window.location ='<?php echo base_url().'pages_controller/view_coach/'.$coach->COACH_ID;?>'\"><td class='table-content'><img src='<?php echo base_url();?>assets/img/coach/<?php echo $coach->COACH_PORTRAIT_PHOTO?>'width='70'/> <?php echo $coach->COACH_FULLNAME;?></td><td class='table-content'><img src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/><?php echo $team->TEAM_NAME;?></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable({
    "order": [ 0, 'asc' ]
  });
});
</script>