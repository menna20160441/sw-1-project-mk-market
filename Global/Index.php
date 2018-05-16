<?php
session_start();
//check if session exist
include "../App/Tempelates/header.php";
if(! isset($_SESSION['username'])){
    header('Location:Login.php');
    die();
}



    if($_SESSION['GroupID']==1){
        include "../App/Tempelates/navbar.php";
        include "../App/views/Admin/Admin.php";
    }
    elseif($_SESSION['GroupID']==3 || $_SESSION['GroupID']==2){
        include "../App/Tempelates/navbar.php";
        include "../App/views/Employee/Employee.php";
    }else{
       header('Location:Login.php'); 
    }

include "../App/Tempelates/footer.php";
?>
