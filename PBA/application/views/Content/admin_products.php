<div class="small-10 small-centered medium-8 medium-centered large-8 large-centered columns">
  <h1>PRODUCTS</h1>
    <table id="searchTable" class="display" cellspacing="0">
      <thead>
      <tr>
        <th class="hide">ID</th>
        <th class="table-content">USERNAME</th>
        <th class="table-content">PRODUCT NAME</th>
        <th class="table-content">PRODUCT CATEGORY</th>
        <th class="table-content">PRODUCT STATUS</th>
        <th class="table-content">START BID</th>
        <th class="table-content">DELETE</th>
      </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
</div> 
<style>
  .hide{
    visibility: hidden;
  }
</style>
<script>
$(document).ready(function(){
  var users="";
  <?php foreach($products as $product):
    $user=$this->account_model->get_user2($product->USER_ID);?>
    users+="<tr><input type='hidden' id='prod_id' value='<?php echo $product->PROD_ID;?>'/><td class='table-content hide'><?php echo $product->PROD_ID;?></td><td class='table-content' id='username'><img src='<?php echo $user->USER_IMAGE;?>' width='70'/><br/><?php echo $user->USERNAME;?></td><td class='table-content' id='productName'><img src='<?php  echo $product->IMAGE1;?>' width='70'/><br/><?php echo $product->PROD_NAME;?></td><td class='table-content' id='pType'><?php echo $product->PROD_CAT;?></td><td class='table-content' id='pStatus'><?php echo $product->PROD_STAT;?></td><td><?php echo $product->START_BID;?></td><td><button class='button alert tiny del'>X</button></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(users);
  $('#searchTable').dataTable({
    "order": [ 0, 'desc' ]
  });

  $(".del").click(function(){
    if(confirm("Delete Product '"+$(this).parent().siblings("#productName").text()+"' ?") == true) {
        $.getJSON("<?php echo base_url();?>auction_controller/delProductAdmin/"+$(this).parent().siblings("#prod_id").val(),success=function(data){
          if(data=="1"){
            alert("Delete Product Successful!");
          }else{
            alert("Delete Product Failed!");
          }
          window.location="<?php echo base_url();?>account_controller/view_adminProducts";
        });
      }
  });
});
</script>