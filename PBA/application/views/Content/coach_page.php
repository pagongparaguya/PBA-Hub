</div> <!--- closing tag for the container -->
<div class="page-content">
    <div class="small-12 small-centered medium-12 medium-centered large-10 large-centered columns">
      <hr class="hr-dotted" />
      <h1>THE PBA COACHES</h1>
      <hr class="hr-dotted" />
        <table id="searchTable" class="display" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th width="50%" style="text-align: center;" class="table-header"><img src="<?php echo base_url();?>/assets/img/basketball.png" /><span>COACH</span></th>
            <th width="50%" style="text-align: center;" class="table-header"><img src="<?php echo base_url();?>/assets/img/basketball.png" /><span>TEAM</span></th>
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
    cur+="<tr><td class='table-content text-center'><a href='<?php echo base_url().'pages_controller/view_coach/'.$coach->COACH_ID;?>'><img class='pages-elem-img' src='<?php echo base_url();?>assets/img/coach/<?php echo $coach->COACH_PORTRAIT_PHOTO?>'width='70'/></a> <br /> <span class='pages-elem-name'><?php echo $coach->COACH_FULLNAME;?></span></td><td style='text-align: center;' class='table-content'><a href='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'><img class='pages-elem-img' src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/></a> <br /> <span class='pages-elem-name'><?php echo $team->TEAM_NAME;?></span></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable({
    "order": [ 0, 'asc' ]
  });
});
</script>