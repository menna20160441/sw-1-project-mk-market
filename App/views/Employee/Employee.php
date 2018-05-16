<?php
$_SESSION['url'] = '../App';
$_SESSION['logout'] = '';
include "../App/Tempelates/header.php";
include "../App/funcions/functions.php";

                $ID       = $_SESSION['ID'];
                $function = new functions();
                $SecDataDisplay = $function->gatLaste("Products");

?>

<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
     
        <div class="table">
            <div class="container">
                <div class="row">
                    
                    
                    <div class="col-md-6 text-center" style="margin-left:6pc;">
                       <div class="box2">
                        <div class="title">
                            <p><a><i class="fa fa-tasks" aria-hidden="true"></i>Category</a></p>
                        
                            
                        </div>
                        
                        <div class="list">
                            <ul>
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
                            </ul>
                        </div>
                           <button><a href="../App/controllers/Cashier/C_Cashier.php?action=DisplayAllCategory"><i class='fa fa-window-maximize' aria-hidden='true'></i></i>Display All</a></button>
                        </div>
                    </div>
            
                    <div class="col-md-12 Vorder" style="margin-top: 18px;">
                    <div class="box">
                        <div class="title">
                            <p><a href=""></i>Order</a></p>
                            
                        </div>
                        <div class="list">
                            <ul>
                            <?php
                            if($_SESSION['GroupID'] == 2){
                            
                                echo '<li><a href="../App/controllers/Employee/C_Employee.php?action=editOrder"><i class="fa fa-edit"></i>Edit Order</a></li>';
                            }
                            ?>
                            </ul>
                        </div>
                        <button><a href="../App/controllers/Employee/C_Employee.php?action=addOrder"><i class="fa fa-plus" aria-hidden="true"></i>Add Order</a>
                            
                </button>
                        </div>   
                      </div>
                
            </div>
        </div>
        
          
                    
            </div>
        </div>    
</div>
</div>

