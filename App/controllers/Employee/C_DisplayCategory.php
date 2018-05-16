<?php
include "../../models/Cashier.php";

session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$ID       = $_SESSION['ID'];
$tableName = "users";
$Cashier = new Cashier($ID);
$Cashier->setTableName($tableName);


if ($_POST OR @$_GET['action']) {
    
    if (isset($_GET['action']) AND $_GET['action'] == "DisplayProduct") {
         if(isset($_GET['id'])){
            $_SESSION['Cat_ID'] = $_GET['id'];
        }
        include "../../views/Employee/V_DisplayALLProduct.php";
    }


if (isset($_GET['action']) AND $_GET['action'] == "display") {

        try {
            $Cashier->setTableName("Products");
            $id = $_GET['id'];
            $joindata =  $Cashier->DisplayProduct($id);
             foreach($joindata as $join){
             
             $dataPro['Product_Name'] = $join['Product_Name'];
             $dataPro['ID'] = $join['ID'];
             $dataPro['Amount'] = $join['Amount'];
             $dataPro['Catigiories'] = $join['Name'];
             $dataPro['CatigioriseID'] = $join['CatigioriseID'];
             $dataPro['Price'] = $join['Price'];
             $dataPro['Offer'] = $join['Offer'];
             $dataPro['ProductImage'] = $join['ProductImage'];
             $dataPro['ProductDate'] = $join['ProductDate'];
             $dataPro['ExpireDate'] = $join['ExpireDate'];
             $dataPro['Describtion'] = $join['Describtion'];
             }
             $pieces = explode("-", $dataPro['ProductDate']);
            $year = $pieces[0];
            $month = $pieces[1];
            $day = $pieces[2];
             $pieces = explode("-", $dataPro['ExpireDate']);
            $exyear = $pieces[0];
            $exmonth = $pieces[1];
            $exday = $pieces[2];

             include '../../views/Admin/V_manageProductPages/V_displayProduct.php';
        
           
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
}
else {
    header('Location:../../../Global/Index.php');
}

?>