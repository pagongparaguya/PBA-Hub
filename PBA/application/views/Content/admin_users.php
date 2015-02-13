</div><!-- closing tag for container -->
<div class="small-12 medium-12 large-12 columns">
  <div class="page-content">
    <h1>PBA-HUB USERS</h1>
    <hr class="hr-dotted" />  
    <table id="searchTable" class="display" cellspacing="0">
      <thead>
        <tr>
          <th class="admin-header text-center">User</th>
          <th class="admin-header text-center">Username</th>
          <th class="admin-header text-center">Account Type</th>
          <th class="admin-header text-center">Account Status</th>
          <th class="admin-header text-center">Email Address</th>
          <th class="admin-header text-center">Contact Number</th>
          <th class="admin-header text-center">Action</th>
        </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
  </div>
</div>  
<!--Admin Modal-->
<div id="adminModal" class="reveal-modal small" data-reveal>
  <h2 id="name"></h2>
  <hr class="hr-dotted" />
  <div>
    <form action="<?php echo base_url();?>account_controller/edit_otherUser" method="post">
      <input type="text" name="user" id="user" value="" />
      <ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-2 teams">
        <li>  
          <label>
            User type
            <select name="type" id="userType">
              <option id="1" value="Admin">Admin</option>
              <option id="2" value="Normal">Normal</option>
            </select>
          </label>
        </li>
        <li>
          <label>
            User status
            <select name="status" id="userStatus">
              <option id="3" value="Active">Active</option>
              <option id="4" value="Deleted">Deleted</option>
            </select>
          </label>
        </li>
      </ul>
      <button type="submit" class="button expand [tiny small medium]" id="change">Change</button>
    </form>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>  
<!--Admin Modal-->
</div>
<script>
$(document).ready(function(){
  var users="";
  <?php foreach($users as $users):?>
    users+="<tr><td class='text-center username' onclick=\"window.location ='<?php echo base_url().'account_controller/view_otherUser/'.$users->USER_ID;?>'\"><img class='admin-page-img' src='<?php echo $users->USER_IMAGE;?>'/><br/><?php echo $users->FIRST_NAME.' '.$users->LAST_NAME;?></td><td class='text-center username1'><?php echo $users->USERNAME;?></td><td class='text-center aType'><?php echo $users->ACCOUNT_TYPE;?></td><td class='text-center aStatus'><?php echo $users->STATUS;?></td><td class='text-center'><?php echo $users->EMAIL_ADDRESS;?></td><td class='text-center'><?php echo $users->CONTACT_NUMBER;?></td><td class='text-center'><button class='button tiny edit form-button' data-reveal-id='adminModal'>Update</button></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(users);
  $('#searchTable').dataTable({
    "order": [ 1, 'asc' ],
    "aoColumns": [
        null,
        { "bSortable": false },
        null,
        null,
        { "bSortable": false },
        { "bSortable": false },
        { "bSortable": false },
    ]
  });

  $("#tbody").on('click','.edit',function(){
    $("#adminModal").focus();
    var name = $(this).parent().siblings(".username1").text();
    var type = $(this).parent().siblings(".aType").text();
    var status = $(this).parent().siblings(".aStatus").text();
    $('#user').val(name);
    $('#name').html(name+"'s account details");
    
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