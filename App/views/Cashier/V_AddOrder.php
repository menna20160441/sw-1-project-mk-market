
<?php 

    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php';     

?>
<div class="limiter">
    
		<div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <h1 class="text-center" style="margin-bottom: 60px">Add New Order
                </h1>

                    <div class="container">
                        
                        <form class="form-horizontal" action="../../controllers/Cashier/C_AddOrder.php"  method="post">
                            
                            <!-- start Username field -->
                            
                            
                            
                               <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="ID">ID :</span>
                                <input class="input100" type="number" name="ID1"  placeholder="id of product">
                                </div>
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="Amount">ِAmount :</span>
                                <input class="input100" type="number" name="amount1" placeholder=" amount of product">
                                </div>
                                
                                
					       </div>
                            
                               <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="ID">ID :</span>
                                <input class="input100" type="number" name="ID2"  placeholder="id of product">
                                </div>
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="Amount">ِAmount :</span>
                                <input class="input100" type="number" name="amount2" placeholder=" amount of product">
                                </div>
                                
                                
					       </div>
                            
                               <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="ID">ID :</span>
                                <input class="input100" type="number" name="ID3"  placeholder="id of product">
                                </div>
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="Amount">ِAmount :</span>
                                <input class="input100" type="number" name="amount3" placeholder=" amount of product">
                                </div>
                                
                                
					       </div>
                               <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="ID">ID :</span>
                                <input class="input100" type="number" name="ID4"  placeholder="id of product">
                                </div>
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="Amount">ِAmount :</span>
                                <input class="input100" type="number" name="amount4" placeholder=" amount of product">
                                </div>
                                
                                
					       </div>
                               <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="ID">ID :</span>
                                <input class="input100" type="number" name="ID5"  placeholder="id of product">
                                </div>
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="Amount">ِAmount :</span>
                                <input class="input100" type="number" name="amount5" placeholder=" amount of product">
                                </div>
                                
                                
					       </div>
                            
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="ID">ID :</span>
                                <input class="input100" type="number" name="ID6"  placeholder="id of product">
                                </div>
                                <div class="col-md-5" style="display: inline-block;">
                                    <span class="label-input100" required="required" name="Amount">ِAmount :</span>
                                <input class="input100" type="number" name="amount6" placeholder=" amount of product">
                                </div>
                                
                                
					       </div>
                            
                            
                   
                            
                    
					       </div>
                        
                            <!-- End WorkHours field -->
                            <div class="container-login100-form-btn">
                              <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" name="submit">
                                    <input class="inpt" name="submit"   value="add" >
                                </button>

                                </div>
					       </div>
                            
                            
                            </form>


                        
            </div>
            </div>
    </div>
</div>
    <?php include '../../Tempelates/footer.php';

?>

