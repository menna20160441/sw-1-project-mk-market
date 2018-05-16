<?php 

    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php';     

?>
<div class="limiter">
    
		<div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form action="../../controllers/Employee/C_editeOrder.php" method="post">
                    <div class="wrap-input100 validate-input">
				              <span class="label-input100">enter order id (in item table)</span>
						      <input class="input100" type="number"  name="ID_order" placeholder="Type Full Name" >
						      
					       </div>

                    <div class="wrap-input100 validate-input">
				              <span class="label-input100">enter order id (in order table )</span>
						      <input class="input100" type="number" name='orderID' placeholder="Type Full Name" >
						      
					       </div>

                    <div class="wrap-input100 validate-input">
				              <span class="label-input100">enter new Amount</span>
						      <input class="input100" type="number" name='Amount' placeholder="Type Full Name" >
						      
					       </div>
                    <div class="container-login100-form-btn">
                              <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" name="submit">
                                    <input class="inpt add" name="submit"   value="edite" >
                                </button>

                                </div>
					       </div>


                </form>
                        
            </div>
    </div>
        
