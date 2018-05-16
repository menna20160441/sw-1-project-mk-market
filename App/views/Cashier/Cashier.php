<?php
$_SESSION['url'] = '../App';
$_SESSION['logout'] = '';
include "../App/Tempelates/header.php";

?>

<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
     
        <div class="table">
            <div class="container">
                <div class="row">
                    
                    
                    <div class="col-md-6">
                       <div class="box2">
                        <div class="title">
                            <p><a><i class="fa fa-tasks" aria-hidden="true"></i>Category</a></p>
                        
                            
                        </div>
                        
                        <div class="list">
                            <ul>
                                <li>25 Email Account</li>
                                <li>200 GP Space</li>
                                <li>2 Domain Name</li>
                                <li>700 GP Bandwidth</li>
                                <li>35 MYSQL Databases</li>
                            </ul>
                        </div>
                           <button><a href="../App/controllers/Cashier/C_Cashier.php?action=DisplayAllCategory"><i class='fa fa-window-maximize' aria-hidden='true'></i></i>Display All</a></button>
                        </div>
                    </div>
            
                    <div class="col-md-6">
                    <div class="box">
                        <div class="title">
                            <p><a href=""></i>Order</a></p>
                            
                        </div>
                        <div class="list">
                            <ul>
                                <li>15 Email Account</li>
                                <li>100 GP Space</li>
                                <li>1 Domain Name</li>
                                <li>500 GP Bandwidth</li>
                                <li>25 MYSQL Databases</li>
                            </ul>
                        </div>
                        <button><a href="../App/controllers/Cashier/C_Cashier.php?action=addOrder"><i class="fa fa-plus" aria-hidden="true"></i>Add Order</a></button>
                        </div>   
                      </div>
                
            </div>
        </div>
        
          
                    
            </div>
        </div>    
</div>
</div>

