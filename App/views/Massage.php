

<?php
session_start();
$_SESSION['url'] = '../../App';

include "../../App/Tempelates/header.php";

?>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <div class="alert alert-primary" role="alert">
                   your password sent to your Email please try to login again
                </div>
                <?php
                   
                header("refresh:3;url=../../Global/Index.php");
                ?>
                
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<?php
include "../../App/Tempelates/footer.php";
?>