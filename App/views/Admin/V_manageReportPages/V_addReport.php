<?php 
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php'; ?>
<div class="limiter">
    
		<div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <h1 class="text-center">Add New Report</h1>

                    <div class="container">
                        <form class="form-horizontal" action="../../controllers/Admin/C_manageReport.php" method="post">
                          <!-- start Type field -->
                            <div class="wrap-input100 validate-input " data-validate="Password is required">
				              <span class="label-input100">Type</span>
						      <select class="form-control type" name="type">
                                    <option value="fast cashier">fast cashier</option>
                                    <option value="list cashier orders">list Cashier orders</option>
                                    <option value="list product">list products in Store</option>
                                  </select>
						      
					       </div>
                          <!-- End Type field -->
                            <!-- start Describtion field -->
                            <div class="wrap-input100 validate-input " data-validate="Password is required">
				              <span class="label-input100">Describtion</span>
						      <textarea  name="Describtion" class="form-control" required="required" placeholder="write-Describtion "rows="8" cols="80"></textarea>
					       </div>
                            
                          
                            <!-- End Describtion field -->
                            <!-- start Date field -->
                            <div class="wrap-input100 validate-input " data-validate="Password is required">
				              <span class="label-input100">Date</span>
						      <input class="input100" type="date" name="Date_in" >
					       </div>
                            <!-- End Date field -->
                            <!-- start Selection  field -->
                            <div class="wrap-input100 validate-input cashier-select" data-validate="Password is required">
				              <span class="label-input100">Report For</span>
						      <select class="form-control " name="selection">
                                      <option value="day" active>In This Day</option>
                                      <option value="month">In This Month</option>
                                      <option value="year">In This Year</option>
                                    </select>
					       </div>
                            <!-- End Selection field -->
                            <div class="form-group form-group-lg">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input style="cursor:pointer"class="btn btn-primary" type="submit" name="submit" value="Add">
                                </div>
                            </div>
                            </form>
                    </div>
            </div>
    </div>
<!--SELECT * from orders WHERE Date IN(now(),'2016-01-04') GROUP BY id having MAX(total_order)
-->
    <?php include '../../Tempelates/footer.php';

?>