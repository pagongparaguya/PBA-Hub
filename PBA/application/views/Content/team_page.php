<div class="page-content">
    <div class="small-12 small-centered medium-12 medium-centered large-10 large-centered columns">
      <h1>THE PBA TEAMS</h1>
        <table id="searchTable" class="display" cellspacing="0" width="100%">
          <thead>
          <tr>
            <th class="table-header" style="text-align: center;" width="33%"></th>
            <th class="table-header" style="text-align: center;" width="33%">Teams</th>
            <th class="table-header" style="text-align: center;" width="33%"></th>
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


  <?php $count=0; foreach($team as $team):
    if($count%3==0){
      $i=$count+3;
  ?>
    cur+="<tr>";
  <?php }?>

    cur+="<td><a href='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'><img class='table-img' src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/></a><br/><?php echo $team->TEAM_NAME;?><br/><?php echo $team->TEAM_YEARSTARTED;?></td>";
  
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