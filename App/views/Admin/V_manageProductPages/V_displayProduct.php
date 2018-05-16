<?php 
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php';     
?>
<div class="limiter">
    
		<div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <h1 class="text-center" style="margin-bottom: 60px">Product <?php echo $dataPro['Product_Name']?></h1>

                    <div class="container">
                      
                            
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <p class="key">Name : </p>
                                <span class="value"><?php echo $dataPro['Product_Name']?></span>
                    
					       </div>
                            
                            <div class="wrap-input100 validate-input">
                                <p class="key">Amount : </p>
                                <span class="value"><?php echo $dataPro['Amount']?></span>
						      
					       </div>
                            
                          
                            
                            <div class="wrap-input100 validate-input">
                                <p class="key">its Category : </p>
                                <span class="value"><?php echo $dataPro['Catigiories']?></span>
					       </div>
                            
                           
                            
                            <div class="form-group form-group-lg date">
                                <p class="key">Product Date : </p>
                                
                                <span class="value"><?php echo $day ."/".$month."/".$year ?></span>  
                            </div>
                            
                        
                            <div class="form-group form-group-lg date">
                                <p class="key">Expire Date : </p>
                                
                                <span class="value"><?php echo $exday ."/".$exmonth."/".$exyear ?></span>
                               
                            </div>
                        
                            <div class="wrap-input100 validate-input">
                                 <p class="key">Price : </p>
                                <span class="value"><?php echo $dataPro['Price']?></span>
						      
					       </div>
                            
                            
                             <div class="wrap-input100 validate-input">
                                 <p class="key">Offer : </p>
                                <span class="value"><?php echo $dataPro['Offer']?></span>
						      
					       </div>
                        
                        
                            
                            
                             <div class="wrap-input100 validate-input">
                                 <p class="key">Describtion : </p>
                                <span class="value"><?php echo $dataPro['Describtion']?></span>
						      
					       </div>
                           
                            
                            


                        
            </div>
            </div>
    </div>
</div>
    <?php include '../../Tempelates/footer.php';

?>

