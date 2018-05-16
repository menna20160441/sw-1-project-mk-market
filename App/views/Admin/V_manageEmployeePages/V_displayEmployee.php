<?php 
    if($_SESSION['UserGroupID']==2){
        $namePage = 'Supervisor';
    }else{
        $namePage = 'Cashier';
    }
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php';     

?>
<div class="limiter">
    
		<div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <h1 class="text-center" style="margin-bottom: 60px"><?php echo $namePage;?> <?php echo $date['Username']?></h1>

                    <div class="container dispaly">
                         <div class="image">
                               <img src = '../../controllers/Admin/Uploads/images/<?php echo $date["UserImage"]?>' alt = ''/> 
					       </div>
                            
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <p class="key">UserName : </p>
                                <span class="value"><?php echo $date['Username']?></span>
                    
					       </div>
                            <!-- End Username field -->
                    
                            <!-- start Fullname field -->
                            <div class="wrap-input100 validate-input">
                                <p class="key">Fullname : </p>
                                <span class="value"><?php echo $date['Fullname']?></span>
						      
					       </div>
                            
                          
                            <!-- End Fullname field -->
                            <!-- start Email field -->
                            <div class="wrap-input100 validate-input">
                                <p class="key">Email : </p>
                                <span class="value"><?php echo $date['Email']?></span>
					       </div>
                            
                           
                            <!-- End Email field -->
                           
                             <!-- start brithday field -->
                            <div class="form-group form-group-lg date">
                                <p class="key">BrithDate : </p>
                                <span class="value"><?php echo $date['BirthData']?></span>
                            </div>
                            <!-- End brithday field -->
                            
                            
                             <div class="wrap-input100 validate-input">
                                 <p class="key">Phone : </p>
                                <span class="value"><?php echo $date['Phone']?></span>
						      
					       </div>
                        
                        
                            <div class="wrap-input100 validate-input">
                                <p class="key">ِAddress : </p>
                                <span class="value"><?php echo $date['Address']?></span>
					       </div>
                            
                            
                             <div class="wrap-input100 validate-input">
                                 <p class="key">Salary : </p>
                                <span class="value"><?php echo $date['salary']?></span>
						      
					       </div>
                           
                            
                             <div class="wrap-input100 validate-input">
                                 <p class="key">WorkHours : </p>
                                 <span class="value"><?php echo $date['WorkHours']?></span>
						      
					       </div>
                        <div class="wrap-input100 validate-input">
                                 <p class="key">Age : </p>
                                 <span class="value"><?php echo $date['Age']?></span>
						      
					       </div>
                          


                        
            </div>
            </div>
    </div>
</div>
    <?php include '../../Tempelates/footer.php';

?>

