 <div class="page-content">
    <div class="small-12 small-centered medium-12 medium-centered large-10 large-centered columns">
      <h1>THE PBA COACHES</h1>
        <table id="searchTable" class="display" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th style="text-align: center;" width="50%" class="table-header">Coach</th>
            <th style="text-align: center;" width="50%" class="table-header">Team</th>
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
  <?php foreach($coach as $coach):?>
  <?php $tid = $this->page_model->get_coachTeam($coach->COACH_ID);
        $team = $this->page_model->get_teamInfo($tid->TEAM_ID);?>
    cur+="<tr><td style='text-align: center;' class='table-content'><a href='<?php echo base_url().'pages_controller/view_coach/'.$coach->COACH_ID;?>'><img class='table-img' src='<?php echo base_url();?>assets/img/coach/<?php echo $coach->COACH_PORTRAIT_PHOTO?>'width='70'/></a> <?php echo $coach->COACH_FULLNAME;?></td><td style='text-align: center;' class='table-content'><img class='table-img' src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/><?php echo $team->TEAM_NAME;?></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable({
    "order": [ 0, 'asc' ]
  });
});
</script>