<?php
$_SESSION['url'] = '../App';
$_SESSION['logout'] = '';
include "../App/Tempelates/header.php";
 include "../App/funcions/functions.php";

                $ID       = $_SESSION['ID'];
                $function = new functions();
                $SecDataDisplay = $function->gatLaste("Products");
                $catDataDisplay = $function->displayLatest("Name","catigiorise", "ID", "5");
                $CashDataDisplay = $function->getAllUserData("users","3", "5");
                $superDataDisplay = $function->getAllUserData("users","2",  "5");
?>


<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
     
        <div class="table">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                    <div class="box">
                        <div class="title">
                            <p><a href="../APP/controllers/Admin/C_Admin.php?action=v_cashier&GroupID=3"><i class="fa fa-users" aria-hidden="true"></i> Cashiers</a></p>
                            
                        </div>
                        <div class="list">
                            
                           <?php
                            if(empty($CashDataDisplay)){
                                echo "There is no Category please try to add sum....";

                            }else{
                                echo "<ul>";
                            for($i = 0; $i < count($CashDataDisplay); $i++){

                                        echo "<li>{$CashDataDisplay[$i]['Fullname']}</li>";
                            }
                                                echo " </ul>";
                      }
                            ?>
                        </div>
                        <button><a href="../App/Controllers/Admin/C_manageEmployee.php?GroupID=3&action=add"><i class="fa fa-plus" aria-hidden="true"></i>Add Cashier</a></button>
                        </div>   
                      </div>
                    
                    <div class="col-md-6">
                       <div class="box2">
                        <div class="title">
                            <p><a href="../APP/controllers/Admin/C_Admin.php?action=v_supervisor&GroupID=2"><i class="fa fa-users" aria-hidden="true"></i> Supervisors</a></p>
                            
                        </div>
                        
                        <div class="list">
<?php
                            if(empty($superDataDisplay)){
                                echo "There is no Category please try to add sum....";

                            }else{
                                echo "<ul>";
                            for($i = 0; $i < count($superDataDisplay); $i++){

                                        echo "<li>{$superDataDisplay[$i]['Fullname']}</li>";
                            }
                                                echo " </ul>";
                      }
                            ?>
                        </div>
                        <button><a href="../App/Controllers/Admin/C_manageEmployee.php?GroupID=2&action=add"><i class="fa fa-plus" aria-hidden="true"></i>Add Supervisor</a></button>
                        </div>
                    </div>
                
            </div>
        </div>
        
                <div class="row part2">
                    <div class="col-md-6">
                       <div class="box2">
                        <div class="title">
                            <p><a href="../APP/controllers/Admin/C_Admin.php?action=v_category"><i class="fa fa-tasks" aria-hidden="true"></i> Categories</a> </p>
                            
                        </div>
                        
                        <div class="list">
                             <?php
                            if(empty($catDataDisplay)){
                                echo "There is no Category please try to add sum....";

                            }else{
                                echo "<ul>";
                            for($i = 0; $i < count($catDataDisplay); $i++){

                                        echo "<li>{$catDataDisplay[$i]['Name']}</li>";
                            }
                                                echo " </ul>";
                      }
                            ?>                    
                        </div>
                        <button><a href="../App/controllers/Admin/C_manageCategory.php?action=add"><i class="fa fa-plus" aria-hidden="true"></i>Add Catagory</a></button>
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="title">
                            <p><a href="../APP/controllers/Admin/C_Admin.php?action=v_product"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Products</a></p>
                            
                        </div>
                        <div class="list">
                            <?php
                            if(empty($SecDataDisplay)){
                                echo "There is no product please try to add sum....";

                            }else{
                                echo "<ul>";
                            for($i = 0; $i < count($SecDataDisplay); $i++){

                                        echo "<li>{$SecDataDisplay[$i]['Product_Name']}</li>";
                            }
                                                echo " </ul>";
                        }
                            ?>                    
                        </div>
                        <button><a href="../App/controllers/Admin/C_manageProduct.php?action=add"><i class="fa fa-plus" aria-hidden="true"></i>Add Product</a></button>
                        </div>   
                      </div>
                      <div class="col-md-12 report">
                    <div class="box">
                        <div class="title">
                            <p><a href="../APP/controllers/Admin/C_Admin.php?action=v_report"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Report</a></p>
                            
                        </div>
                        <div class="list">
                            <ul>
                                <li>1 Domain Name</li>
                                <li>500 GP Bandwidth</li>
                                <li>25 MYSQL Databases</li>
                            </ul>
                        </div>
                        <button><a href="../App/controllers/Admin/C_manageReport.php?action=add"><i class="fa fa-plus" aria-hidden="true"></i>Add Report</a></button>
                        </div>   
                      </div>
                    
            </div>
        </div>    
</div>
</div>

 