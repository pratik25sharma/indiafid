<?php 
$id=$user['id'];
$crud=new Crud;
 
?>
  <section class="list_type">
        <div class="page_info">
            <div class="breadcrumbs">
                <a href="<?php echo SITE_URL.'/dashboard' ?>" title="">Home</a>
                <span></span>
                <a href="javascript:void(0);" title="">Orders</a>
            </div>
            <h2>Order Management</h2>
        </div>
        <div class="listing_section">
            <div class="list_table">
                <table class="display" style="width:100%" id="orders">
                    <thead>
                        <tr>
							<th></th>
                            <th align="left" valign="middle" height="40" width="30%">Name</th>
                            <th align="right" valign="middle" height="40" width="10%">Product</th>
                            <th align="left" valign="middle" height="40" width="10%">Phone Number</th>
                            <th align="left" valign="middle" height="40" width="10%">Function Date</th>
                        </tr>
                    </thead>
					<tfoot>
                        <tr>
							<th></th>
                            <th align="left" valign="middle" height="40" width="30%">Name</th>
                            <th align="right" valign="middle" height="40" width="10%">Product</th>
                            <th align="left" valign="middle" height="40" width="10%">Phone Number</th>
                            <th align="left" valign="middle" height="40" width="10%">Function Date</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>