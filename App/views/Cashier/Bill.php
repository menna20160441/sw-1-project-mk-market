<?php
$_SESSION['url'] = '../..';
$_SESSION['logout'] = '../../../Global';

include "../../Tempelates/header.php";
include "../../Tempelates/navbar.php";

?>


<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <div class="alert alert-primary text-center" role="alert">
                   the Bill generate successfully 
                </div>
              
                
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="submit">
                                <a style="color:#fff" href="../../controllers/Cashier/C_Cashier.php?action=addOrder"><i class="fa fa-plus" aria-hidden="true"></i>Add Anouther Order</a>
                            </button>

                    </div>
                </div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<?php
include "../../Tempelates/footer.php";
?>