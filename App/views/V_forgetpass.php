


<?php
session_start();
$_SESSION['url'] = '../../App';

include "../../App/Tempelates/header.php";

?>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="../../App/Controllers/C_Login.php" method="post">
					<span class="login100-form-title p-b-49">
						Forget Password
					</span>
                    
                    <h2 style="font-size: 17px;letter-spacing: 2px;color: #4f4b4b;text-align: center;margin-bottom: 50px;">" Enter the Username of Your Account to Reset New Password "</h2>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100" required="required" name="username">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

			
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								<input class="inpt" name="submit"   value="forgotSubmit" >
							</button>
                            
						</div>
					</div>

				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<?php
include "../../App/Tempelates/footer.php";
?>