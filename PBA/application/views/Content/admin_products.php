</div><!-- closing tag for container -->
<div class="small-12 medium-12 large-12 columns">
    <div class="page-content">
      <h1>PBA-HUB PRODUCTS</h1>
      <hr class="hr-dotted" />  
      <table id="searchTable" class="display" cellspacing="0">
        <thead>
          <tr>
            <th class="hide">ID</th>
            <th class="admin-header text-center" width="15%">Product</th>
            <th class="admin-header text-center">Owner</th>
            <th class="admin-header text-center">Product Category</th>
            <th class="admin-header text-center">Product Status</th>
            <th class="admin-header text-center">Starting Bid</th>
            <th class="admin-header text-center">Action</th>
          </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
      </table>
    </div> 
</div>
<script>
$(document).ready(function(){
  var users="";
  <?php foreach($products as $product):
    $user=$this->account_model->get_user2($product->USER_ID);?>
    users+="<tr><input type='hidden' class='prod_id' value='<?php echo $product->PROD_ID;?>'/><td class='text-center hide'><?php echo $product->PROD_ID;?></td><td class='text-center productName' onclick=\"window.location ='<?php echo base_url().'auction_controller/view_product/'.$product->PROD_ID;?>'\"><img class='admin-page-img' src='<?php  echo $product->IMAGE1;?>'/><br/><?php echo $product->PROD_NAME;?></td><td class='text-center' id='username'><img class='admin-page-img' src='<?php echo $user->USER_IMAGE;?>'/><br/><?php echo $user->USERNAME;?></td><td class='text-center pType'><?php echo $product->PROD_CAT;?></td><td class='text-center pStatus'><?php echo $product->PROD_STAT;?></td><td class='text-center'><?php echo $product->START_BID;?></td><td class='text-center'><button class='button alert form-button tiny del'>X</button></td></tr>";
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