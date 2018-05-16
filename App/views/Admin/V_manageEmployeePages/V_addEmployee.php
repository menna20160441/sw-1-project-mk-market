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
                    <h1 class="text-center" style="margin-bottom: 60px">Add New <?php echo $namePage;?>
                </h1>

                    <div class="container">
                        
                        <form class="form-horizontal" action="../../controllers/Admin/C_manageEmployee.php"  enctype="multipart/form-data" method="post">
                            <input type="hidden" name="ID" >
                            <!-- start Username field -->
                            
                            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                                <span class="label-input100" required="required" name="username">Username</span>
                                <input class="input100" type="text" name="username"  placeholder="Type username">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
					       </div>
                            <!-- End Username field -->
                            <!-- start Password field -->
                            <div class="wrap-input100 validate-input " data-validate="Password is required">
				              <span class="label-input100">Password</span>
						      <input class="input100" type="password" name="password" placeholder="Type password">
						      <span class="focus-input100" data-symbol="&#xf190;"></span>
					       </div>
                            
                         
                            <!-- End Password field -->
                            <!-- start Fullname field -->
                            <div class="wrap-input100 validate-input">
				              <span class="label-input100">Fullname</span>
						      <input class="input100" type="text"  name="fullname" placeholder="Type Full Name" >
						      
					       </div>
                            
                          
                            <!-- End Fullname field -->
                            <!-- start Email field -->
                            <div class="wrap-input100 validate-input">
				              <span class="label-input100">Email</span>
						      <input class="input100" type="email"  name="email" placeholder="Type Emil">
						      
					       </div>
                            
                           
                            <!-- End Email field -->
                           
                             <!-- start brithday field -->
                            <div class="form-group form-group-lg date">
                                <span class="label-input100 ">Brith day</span>
                                <div class="col-sm-10 date" style="padding: 0;overflow: hidden;margin-top: 10px;">
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
                            <!-- End brithday field -->

                             <!-- start UserImg field -->
                        
                            <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">UserImg</label>
                            <div class="col-sm-10 col-md-6">
                                <input type="file" name="image" class="form-control" required="required" />
                            </div>
                        </div>
                            <!-- End UserImg field -->

                             <!-- start Username field -->
                            
                             <div class="wrap-input100 validate-input">
				              <span class="label-input100">Phone</span>
						      <input class="input100 number" type="text"  name="phone" placeholder="Type Phone" >
						      
					       </div>
                            <!-- End Username field -->
                            <!-- start Username field -->
                        
                            <div class="wrap-input100 validate-input">
				              <span class="label-input100">ِAddress</span>
						      <input class="input100" type="text"  name="address" placeholder="Type Adress">
					       </div>
                            <!-- End Username field -->
                            
                               

                            <!-- start Username field -->
                            
                             <div class="wrap-input100 validate-input">
				              <span class="label-input100">Salary</span>
						      <input class="input100 number" type="text"  name="salary" placeholder="Type Salary" >
						      
					       </div>
                            <!-- End Username field -->
                            
                            <!-- start WorkHours field -->
                            
                             <div class="wrap-input100 validate-input">
				              <span class="label-input100">WorkHours</span>
						      <input class="input100 number" type="text"  name="workhours" placeholder="Type Work Houre" >
						      
					       </div>
                        
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
