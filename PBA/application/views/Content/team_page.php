<div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">
  <!--<h1>STARTING WITH LETTER:</h1>
  <div class="small-3 small-centered medium-3 medium-centered large-3 large-centered columns">
    <select id="letters">
      <option value="ALL"selected>ALL</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      <option value="F">F</option>
      <option value="G">G</option>
      <option value="H">H</option>
      <option value="I">I</option>
      <option value="J">J</option>
      <option value="K">K</option>
      <option value="L">L</option>
      <option value="M">M</option>
      <option value="N">N</option>
      <option value="O">O</option>
      <option value="P">P</option>
      <option value="Q">Q</option>
      <option value="R">R</option>
      <option value="S">S</option>
      <option value="T">T</option>
      <option value="U">U</option>
      <option value="V">V</option>
      <option value="W">W</option>
      <option value="X">X</option>
      <option value="Y">Y</option>
      <option value="Z">Z</option>
    </select>
  </div>-->
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
    cur+="<tr onclick=\"document.location ='<?php echo base_url().'pages_controller/view_team/'.$team->TEAM_ID;?>'\"> <td class='table-content'><img src='<?php echo base_url();?>assets/img/team/<?php echo $team->TEAM_LOGO?>' width='70'/><?php echo $team->TEAM_NAME;?></td><td class='table-content'><?php echo $team->TEAM_YEARSTARTED;?></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable();

  /*$("#letters").change(function(){
    if($(this).val()=="ALL"){
      $("#tbody").html("");
      $("#tbody").append(cur);
    }else{
      $.getJSON("<?php echo base_url();?>pages_controller/view_teamLetter/"+$(this).val(),success=function(data){
        var value="No Records To Display";
        for(var i=0;i<data.length;i+=2){
          value+='<tr onclick="document.location =\''+'<?php echo base_url();?>pages_controller/view_team/'+data[i]+'\'"><td>'+data[i+1]+'</td><td>Team</td></tr>';
        }
        $("#tbody").html("");
        $("#tbody").append(value);
      });
    }
  });*/
});
</script>