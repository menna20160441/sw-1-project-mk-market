<?php
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php';     

?>
<div class="limiter">
    
		<div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <h1 class="text-center">Add New Product</h1>

                    <div class="container">
                        
                        <form class="form-horizontal" action="../../controllers/Admin/C_manageProduct.php"  enctype="multipart/form-data" method="post">
                            <input type="hidden" name="ID" >
                            <!-- start Name field -->
                            
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <span class="label-input100" required="required" name="username">Name</span>
                                <input class="input100" type="text" name="name"  placeholder="Type Name">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
					       </div>
                            <!-- End Name field -->
                            <!-- start Amount field -->
                            <div class="wrap-input100 validate-input " data-validate="Password is required">
				              <span class="label-input100">Amount</span>
						      <input class="input100 number" type="text" name="amount" placeholder="Type Amount">
						      <span class="focus-input100" data-symbol="&#xf190;"></span>
					       </div>
                            
                         
                            <!-- End Amount field -->
                            <!-- start Categories field -->
                            <div class="form-group form-group-lg date">
				              <span class="label-input100">CategoryName</span>
						      <select class="form-control disCat" name="catid">
                                    <option value="0">...</option>
                                    
                                    <?php
            
                                        foreach($catdate as $cat){
                                            
                                            echo "<option value='".$cat['ID']."'>".$cat['Name']."</option>";
                                        }
            
                                    ?>
                                </select>
						      
					       </div>
                            
                          
                            <!-- End categories field -->
                            <!-- start Price field -->
                            <div class="wrap-input100 validate-input">
				              <span class="label-input100">Price</span>
						      <input class="input100 number" type="text"  name="price" placeholder="Type Emil">
						      
					       </div>
                            
                           
                            <!-- End Price field -->
                            <!-- start Offer field -->
                            <div class="wrap-input100 validate-input">
				              <span class="label-input100">Offer</span>
						      <input class="input100 number" type="text"  name="offer" placeholder="Type Emil">
						      
					       </div>
                            
                           
                            <!-- End Offer field -->
                             <!-- start ProductDate field -->
                            <div class="form-group form-group-lg date">
                                <span class="label-input100">ProductDate</span>
                                <div class="col-sm-10" style="padding: 0;overflow: hidden;margin-top: 10px;">
                                    <div class="day">
                                        <select class="form-control" name="day">
                                       <?php
                                            for($i=1,$j=1;i<=31,$j<=31;$i++,$j++){
                                               echo "<option value='$i'>".$j."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div class="month">
                                        <select class="form-control" name="month">
                                       <?php
                                            for($i=1,$j=1;i<=12,$j<=12;$i++,$j++){
                                               echo "<option value='$i'>".$j."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div class=" year">
                                        <select class="form-control" name="year">
                                       <?php
                                            for($i=2018,$j=2018;i<=1958,$j>=1958;$i--,$j--){
                                               echo "<option value='$i'>".$j."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End ProductDate field -->
                            
                             <!-- start ExpireDate field -->
                            <div class="form-group form-group-lg date">
                                <span class="label-input100">ExpireDate</span>
                                <div class="col-sm-10" style="padding: 0;overflow: hidden;margin-top: 10px;">
                                    <div class="day">
                                        <select class="form-control" name="exday">
                                       <?php
                                            for($i=1,$j=1;i<=31,$j<=31;$i++,$j++){
                                               echo "<option value='$i'>".$j."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div class="month">
                                        <select class="form-control" name="exmonth">
                                       <?php
                                            for($i=1,$j=1;i<=12,$j<=12;$i++,$j++){
                                               echo "<option value='$i'>".$j."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div class=" year">
                                        <select class="form-control" name="exyear">
                                       <?php
                                            for($i=2018,$j=2018;i<=1958,$j>=1958;$i--,$j--){
                                               echo "<option value='$i'>".$j."</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <!-- End ExpireDate field -->
                            
                             <!-- start UserImg field -->
                        
                            <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">ProductImage</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="file" name="image" class="form-control" required="required" />
                            </div>
                        </div>
                            <!-- End UserImg field -->

                             <!-- start Description field -->
                            
                             <div class="wrap-input100 validate-input">
				              <span class="label-input100">Description</span>
						      <input class="input100" type="text"  name="desc" placeholder="Type Description" >
						      
					       </div>
                            <!-- End Description field -->                             
                        
                            <!-- End WorkHours field -->
                            <div class="container-login100-form-btn">
                              <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" name="submit">
                                    <input class="inpt add" name="submit"   value="Add" >
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