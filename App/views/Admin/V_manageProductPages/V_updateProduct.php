<?php
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php';     

?>
<div class="limiter">
    
		<div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <h1 class="text-center">Update Product</h1>

                    <div class="container">
                        
                        <form class="form-horizontal" action="../../controllers/Admin/C_manageProduct.php" enctype="multipart/form-data" method="post">
                       <input type="hidden" name="ID" value="<?php echo $dataPro['ID']?>">
                            <!-- start Name field -->
                            
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <span class="label-input100" required="required" name="username">Name</span>
                                <input class="input100" type="text" name="name"  placeholder="Type Name" value="<?php echo $dataPro['Product_Name'];?>">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
					       </div>
                            <!-- End Name field -->
                            <!-- start Amount field -->
                            <div class="wrap-input100 validate-input " data-validate="Password is required">
				              <span class="label-input100">Amount</span>
						      <input class="input100 number" type="text" name="amount" placeholder="Type Amount" value="<?php echo $dataPro['Amount'];?>">
						      <span class="focus-input100" data-symbol="&#xf190;"></span>
					       </div>
                            
                         
                            <!-- End Amount field -->
                            <!-- start Categories field -->
                            <div class="form-group form-group-lg date">
				              <span class="label-input100">CategoryName</span>
						      <select class="form-control disCat" name="catid">
                                        
                                        
                                    <?php
            
                                        foreach($_SESSION['catdate'] as $cat){
                                            
    
                                             echo "<option value='".$cat['ID']."'";
                                                    if($cat['ID'] == $dataPro['ID']){echo 'selected';}
                                                    echo   ">".$cat['Name']."</option>";
                                        }
            
                                    ?>
                                </select>
						      
					       </div>
                            
                          
                            <!-- End categories field -->
                            <!-- start Price field -->
                            <div class="wrap-input100 validate-input">
				              <span class="label-input100">Price</span>
						      <input class="input100 number" type="text"  name="price" placeholder="Type Emil" value="<?php echo $dataPro['Price']?>">
						      
					       </div>
                            
                           
                            <!-- End Price field -->
                            <!-- start Offer field -->
                            <div class="wrap-input100 validate-input">
				              <span class="label-input100">Offer</span>
						      <input class="input100" type="text"  name="offer" placeholder="Type Emil" value="<?php echo $dataPro['Offer']?>">
						      
					       </div>
                            
                           
                            <!-- End Offer field -->
                             <!-- start brithday field -->
                                <div class="form-group form-group-lg">
                                    <label class="col-sm-2 control-label">ProductDate</label>
                                    <div class="col-sm-10 col-md-6 date">
                                        <div class="day">
                                            <select class="form-control" name="day">
                                           <?php
                                                
                                                for($i=01,$j=01;i<=31,$j<=31;$i++,$j++){
                                                    
                                                    
                                                    echo "<option value='".$i."'";
                                                    if($j == $day){echo 'selected';}
                                                    echo   ">".$j."</option>";
                                                }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="month">
                                            <select class="form-control" name="month">
                                           <?php
                                                for($i=1,$j=1;i<=12,$j<=12;$i++,$j++){
                                                   echo "<option value='".$i."'";
                                                    if($j == $month){echo 'selected';}
                                                    echo   ">".$j."</option>";
                                                }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="year">
                                            <select class="form-control" name="year">
                                           <?php
                                                for($i=2018,$j=2018;i<=1958,$j>=1958;$i--,$j--){
                                                   echo "<option value='".$i."'";
                                                    if($j == $year){echo 'selected';}
                                                    echo   ">".$j."</option>";
                                                }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- End brithday field -->
                            
                             <!-- start ExpireDate field -->
                            <div class="form-group form-group-lg">
                                    <label class="col-sm-2 control-label">ExpireDate</label>
                                    <div class="col-sm-10 col-md-6 date">
                                        <div class="day">
                                            <select class="form-control" name="exday">
                                           <?php
                                                
                                                for($i=01,$j=01;i<=31,$j<=31;$i++,$j++){
                                                    
                                                    
                                                    echo "<option value='".$i."'";
                                                    if($j == $exday){echo 'selected';}
                                                    echo   ">".$j."</option>";
                                                }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="month">
                                            <select class="form-control" name="exmonth">
                                           <?php
                                                for($i=1,$j=1;i<=12,$j<=12;$i++,$j++){
                                                   echo "<option value='".$i."'";
                                                    if($j == $exmonth){echo 'selected';}
                                                    echo   ">".$j."</option>";
                                                }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="year">
                                            <select class="form-control" name="exyear">
                                           <?php
                                                for($i=2018,$j=2018;i<=1958,$j>=1958;$i--,$j--){
                                                   echo "<option value='".$i."'";
                                                    if($j == $exyear){echo 'selected';}
                                                    echo   ">".$j."</option>";
                                                }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            <!-- End ExpireDate field -->
                            
                            <!-- start productimg field -->
                        
                            <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">ProductImage</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="file" name="image" class="form-control" required="required" />
                            </div>
                        </div>
                            <!-- End productimg field -->

                             <!-- start Description field -->
                            
                             <div class="wrap-input100 validate-input">
				              <span class="label-input100">Description</span>
						      <input class="input100" type="text"  name="desc" placeholder="Type Description" value="<?php echo $dataPro['Describtion']?>">
						      
					       </div>
                            <!-- End Description field -->                             
                        
                            <!-- End WorkHours field -->
                            <div class="container-login100-form-btn">
                              <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" name="submit">
                                    <input class="inpt update" name="submit"   value="Edit" >
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