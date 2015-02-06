<div class="page-content list-pages">
    <div class="small-10 small-centered medium-8 medium-centered large-12 large-centered columns">
      <h1>PRODUCTS</h1>
        <table id="searchTable" class="display" cellspacing="0">
          <thead>
          <tr>
            <th class="hide">ID</th>
            <th class="table-content">Product</th>
            <th class="table-content">Owner</th>
            <th class="table-content">Product Category</th>
            <th class="table-content">Product Status</th>
            <th class="table-content">Starting Bid</th>
            <th class="table-content">Action</th>
          </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
    </div> 
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
    users+="<tr><input type='hidden' class='prod_id' value='<?php echo $product->PROD_ID;?>'/><td class='table-content hide'><?php echo $product->PROD_ID;?></td><td class='table-content productName' onclick=\"window.location ='<?php echo base_url().'auction_controller/view_product/'.$product->PROD_ID;?>'\"><img src='<?php  echo $product->IMAGE1;?>' width='70'/><br/><?php echo $product->PROD_NAME;?></td><td class='table-content' id='username'><img src='<?php echo $user->USER_IMAGE;?>' width='70'/><br/><?php echo $user->USERNAME;?></td><td class='table-content pType'><?php echo $product->PROD_CAT;?></td><td class='table-content pStatus'><?php echo $product->PROD_STAT;?></td><td><?php echo $product->START_BID;?></td><td><button class='button alert tiny del'>X</button></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(users);
  $('#searchTable').dataTable({
    "order": [ 0, 'desc' ]
  });

  $("#tbody").on('click','.del',function(){
    if($(this).parent().siblings(".pStatus").text()!='On-going'){
      if(confirm("Delete Product '"+$(this).parent().siblings(".productName").text()+"' ?") == true) {
        $.ajax({
          url:'<?php echo base_url();?>auction_controller/delProductAdmin/',
          type:'post',
          data:{'id':$(this).parent().siblings(".prod_id").val()},
          success:function(data,status){
            alert(data);
            window.location.reload(true);
          }
        });
      }
    }else{
      if(confirm("Caution: This is product is still in auction, delete product '"+$(this).parent().siblings(".productName").text()+"' ?") == true) {
        $.ajax({
          url:'<?php echo base_url();?>auction_controller/delProductAdmin/',
          type:'post',
          data:{'id':$(this).parent().siblings(".prod_id").val()},
          success:function(data,status){
            alert(data);
            window.location.reload(true);
          }
        });
      }
    }
  });
});
</script>