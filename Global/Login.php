<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <meta http-equiv="Content-Type" content=" charset=UTF-8">
        <title>MK_Market</title>

        <link rel="stylesheet" href="" type="text/css">
        <link rel="stylesheet" href="" type="text/css">
        <link rel="stylesheet" href="" type="text/css">

        <script src=""></script>
        <script src=""></script>
    </head>
    <body>
        <div class="container">
            <div class="contents logincont">
                <div class="login">
                    <h1>Login :</h1>
                    <form action="../App/controllers/C_Login.php" method="post">
                        <input required="required" name="username" class="input-lg" type="text" placeholder="please enter a username">
                        <input required="required" name="password" class="input-lg" type="password" > 
                        <input class="btn-primary btn-lg" type="submit" name="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>-->
<?php
session_start();
$_SESSION['url'] = '../App';

include "../App/Tempelates/header.php";

?>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="../App/controllers/C_Login.php" method="post">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100" required="required" name="username">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100 pass" type="password" required="required" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
                        <i class="fa fa-eye" data-show="off"></i>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="../App/views/V_forgetpass.php">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								<input class="inpt" name="submit"   value="Login" >
							</button>
                            
						</div>
					</div>

				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<?php
include "../App/Tempelates/footer.php";
?>