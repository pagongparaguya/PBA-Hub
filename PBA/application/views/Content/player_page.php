<div class="small-10 small-centered medium-7 medium-centered large-6 large-centered columns">
  <h1>STARTING WITH LETTER:</h1>
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
  </div>
    <table id="searchTable" class="display" cellspacing="0">
      <thead>
      <tr>
        <th>Name</th>
        <th>Type</th>
      </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
</div>   
<script>
$(document).ready(function(){
  var cur="";
  <?php foreach($player as $player):?>
    cur+="<tr onclick=\"document.location ='<?php echo base_url().'pages_controller/view_player/'.$player->PLAYER_ID;?>'\"><td><?php echo $player->PLAYER_FULLNAME;?></td><td>Player</td></tr>";
  <?php endforeach;?>
  $("#tbody").append(cur);
  $('#searchTable').dataTable();

  $("#letters").change(function(){
    if($(this).val()=="ALL"){
      $("#tbody").html("");
      $("#tbody").append(cur);
    }else{
      $.getJSON("<?php echo base_url();?>pages_controller/view_playerLetter/"+$(this).val(),success=function(data){
        var value="No Records To Display";
        for(var i=0;i<data.length;i+=2){
          value+='<tr onclick="document.location =\''+'<?php echo base_url();?>pages_controller/view_player/'+data[i]+'\'"><td>'+data[i+1]+'</td><td>Player</td></tr>';
        }
        $("#tbody").html("");
        $("#tbody").append(value);
      });
    }
  });
});
</script>