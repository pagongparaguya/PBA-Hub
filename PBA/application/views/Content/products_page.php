</div> <!--- closing tag for the container -->
<div class="page-content">
    <div class="small-12 small-centered medium-12 medium-centered large-10 large-centered columns">
      <hr class="hr-dotted">
      <h1>PRODUCTs</h1>
      <hr class="hr-dotted">
        <table id="searchTable" class="display" cellspacing="0">
          <thead>
          <tr>
            <th class="hide">ID</th>
            <th class="table-header text-center has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to toggle the sorting of product names in ascending or descending order" width="35%"><img src="<?php echo base_url();?>/assets/img/basketball.png" /><span>PRODUCT</span></th>
            <th class="table-header text-center" width="35%"><img src="<?php echo base_url();?>/assets/img/basketball.png" /><span>PRODUCT STATUS</span></th>
            <th class="table-header text-center has-tip tip-top radius" data-options="disable_for_touch:true" data-tooltip aria-haspopup="true" title="Press me to toggle the sorting of product bids in ascending or descending order" width="30%"><img src="<?php echo base_url();?>/assets/img/basketball.png" /><span>STARTING BID</span></th>
          </tr>
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>
    </div>   
</div>
<script>
$(document).ready(function(){
  var prod="";
  <?php foreach($products as $product):$user=$this->account_model->get_user2($product->USER_ID);?>
    prod+="<tr><td class='table-content hide'><?php echo $product->PROD_ID;?></td><td class='text-center'><a href='<?php echo base_url().'auction_controller/view_product/'.$product->PROD_ID;?>'><img class='pages-elem-img' src='<?php  echo $product->IMAGE1;?>' width='70'/></a><br/> <span class='pages-elem-name'><?php echo $product->PROD_NAME;?></span></td><td class='text-center'><span class='pages-elem-name'><?php echo $product->PROD_STAT;?></span></td><td class='text-center'><span class='pages-elem-name pages-elem-startingbid'><?php echo $product->START_BID;?></span></td></tr>";
  <?php endforeach;?>
  $("#tbody").append(prod);
  $('#searchTable').dataTable({
    "order": [ 0, 'desc' ],
    "aoColumns": [
      null,
      null,
      { "bSortable": false },
      null
    ]
  });
});
</script>

