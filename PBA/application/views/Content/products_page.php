<div class="page-content">
    <div class="small-10 small-centered medium-10 medium-centered large-10 large-centered columns">
      <h1>PRODUCTs</h1>
        <table id="searchTable" class="display" cellspacing="0">
          <thead>
          <tr>
            <th class="hide">ID</th>
            <th class="table-header"><center>Product</center></th>
            <th class="table-header"><center>Product Status</center></th>
            <th class="table-header"><center>Starting Bid</center></th>
          </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
    </div>   
</div>

<style>
#tbody tr td{
  text-align:center;
}

.hide{
  visibility: hidden;
}
</style>
<script>
$(document).ready(function(){
  var prod="";
  <?php foreach($products as $product):$user=$this->account_model->get_user2($product->USER_ID);?>
    prod+="<tr onclick=\"document.location ='<?php echo base_url().'auction_controller/view_product/'.$product->PROD_ID;?>'\"><td class='table-content hide'><?php echo $product->PROD_ID;?></td><td><img src='<?php  echo $product->IMAGE1;?>' width='70'/><br/><?php echo $product->PROD_NAME;?></td><td><?php echo $product->PROD_STAT;?></td><td><?php echo $product->START_BID;?></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(prod);
  $('#searchTable').dataTable({
    "order": [ 0, 'desc' ]
  });
});
</script>

