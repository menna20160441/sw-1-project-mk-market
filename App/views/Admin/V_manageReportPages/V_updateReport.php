


<?php
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php';     

?>
<div class="limiter">
    
		<div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <h1 class="text-center">Update Report</h1>

                    <div class="container">
                        
                        <form class="form-horizontal" action="../../controllers/Admin/C_manageReport.php" method="post">
                        <input type="hidden" name="ID" value="<?php echo $date['ID']?>">
                            
                             <div class="wrap-input100 validate-input">
				              <span class="label-input100">Description</span>
						      <input class="input100" type="text"  name="Describtion" placeholder="Type Describtion" value="<?php echo $date['Describtion']; ?>">
						      
					       </div>
                            <!-- End Description field -->                             
                        
                            <!-- End WorkHours field -->
                              <div class="container-login100-form-btn">
                              <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" name="submit">
                                    <input class="inpt" name="submit"  value="Edit" >
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