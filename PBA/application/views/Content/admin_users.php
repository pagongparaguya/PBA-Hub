<div class="small-10 small-centered medium-8 medium-centered large-8 large-centered columns">
  <h1>USERS</h1>
    <table id="searchTable" class="display" cellspacing="0">
      <thead>
      <tr>
        <th class="table-content">USERNAME</th>
        <th class="table-content">FULLNAME</th>
        <th class="table-content">TYPE</th>
        <th class="table-content">STATUS</th>
        <th class="table-content">EMAIL</th>
        <th class="table-content">CONTACT NO</th>
        <th class="table-content">EDIT</th>
      </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
</div> 

<!--Admin Modal-->
<div id="adminModal" class="reveal-modal" data-reveal>
  <h2 id="name"></h2>
  <hr/>
  <div>
    <form action="<?php echo base_url();?>account_controller/edit_otherUser" method="post">
      <input type="hidden" name="user" id="user" value="" />
      <ul class="team-row small-block-grid-2 medium-block-grid-2 large-block-grid-2 teams">
        <li><span style="color:blue;text-shadow:none;">TYPE: </span>
          <select name="type" id="userType">
            <option id="1" value="Admin">Admin</option>
            <option id="2" value="Normal">Normal</option>
          </select>
        </li>
        <li><span style="color:blue;text-shadow:none;">STATUS: </span>
          <select name="status" id="userStatus">
            <option id="3" value="Active">Active</option>
            <option id="4" value="Deleted">Deleted</option>
          </select>
        </li>
      </ul>
      <button type="submit" class="button round" id="change">Change</button>
    </form>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>  
<!--Admin Modal-->

<script>
$(document).ready(function(){
  var users="";
  <?php foreach($users as $users):?>
    users+="<tr><td class='table-content' id='username'><img src='<?php echo $users->USER_IMAGE;?>' width='70'/><br/><?php echo $users->USERNAME;?></td><td class='table-content'><?php echo $users->FIRST_NAME.' '.$users->LAST_NAME;?></td><td class='table-content' id='aType'><?php echo $users->ACCOUNT_TYPE;?></td><td class='table-content' id='aStatus'><?php echo $users->STATUS;?></td><td class='table-content'><?php echo $users->EMAIL_ADDRESS;?></td><td class='table-content'><?php echo $users->CONTACT_NUMBER;?></td><td><button class='button tiny edit' data-reveal-id='adminModal'>EDIT</button></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(users);
  $('#searchTable').dataTable({
    "order": [ 1, 'asc' ]
  });

  $(".edit").click(function(){
    var name = $(this).parent().siblings("#username").text();
    var type = $(this).parent().siblings("#aType").text();
    var status = $(this).parent().siblings("#aStatus").text();
    $('#user').val(name);
    $('#name').html("Changing "+name+"'s Account Details");
    
    $("#userType").val(type);
    $("#userStatus").val(status);
  });

  $("#change").click(function(event){
    if (confirm("Confirm Changes?") == true) {
      //nothing
    } else {
        event.preventDefault();
    }
  });
});
</script>