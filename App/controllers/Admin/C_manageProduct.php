<?php

include "../../models/Admin.php";

session_start();
$ID       = $_SESSION['ID'];
$Admin = new Admin($ID);
$tableName = "Products";
$tableCat = "catigiorise";
$Admin->setTableName($tableName);
if ($_POST OR @$_GET['action']) {
    
    if (isset($_GET['action']) AND $_GET['action'] == "add") {
            $catdate = $Admin->DisplayAll($tableCat);
        $_SESSION['catdate'] = $catdate;
        
        include "../../views/Admin/V_manageProductPages/V_addProduct.php";

        
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Add") {
        /* get image source */
         $image=  $_FILES['image'];
        $imageName = $_FILES['image']['name'];
        $imageSize = $_FILES['image']['size'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageType = $_FILES['image']['type'];
        $imgeAllExtension = array("jpg","png" ,"jpeg","gif");
        $e=  explode('.',$imageName);
        $imageExtension = strtolower($e[1]);
        if(empty($imageName)){
            echo "you must to choose imge";
        }
         elseif(!empty($imageName) && !in_array($imageExtension ,$imgeAllExtension)){
            echo "your file not an image";
        }
        elseif($imageSize >4194304){
            echo "image size is to big";
        }else{
            $image = rand(0,10000) . '_' .$imageName;
            move_uploaded_file($imageTmp ,'Uploads/images//' . $image);
        $main['Product_Name'] = $_POST['name']; 
        $main['Amount'] = $_POST['amount']; 
        $main['CatigioriseID'] = $_POST['catid']; 
        $main['Price'] = $_POST['price'];
        $main['Offer'] = $_POST['offer'];
        $main['ProductImage'] = $image; 
        $date =$_POST['year'];
        //echo $date;
        $date .='-'.$_POST['month'];
        $date .='-'.$_POST['day'];
        $exdate =$_POST['exyear'];
        $exdate .='-'.$_POST['exmonth'];
        $exdate .='-'.$_POST['exday'];
        $main['ExpireDate'] = $exdate;
        $main['ProductDate'] = $date ;
        $main['Describtion'] = $_POST['desc'];
        }
        try {
            
                $dd = $Admin->AddNewProduct($main);
    
            if($dd == true){
                header('Location:../../controllers/Admin/C_Admin.php?action=v_product');
            }
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    // Delete:
    if (isset($_GET['action']) AND $_GET['action'] == "delete") {

        try {
            $C_ID = $_GET['id'];
            $Admin->DeleteProduct($C_ID);
         header('Location:../../controllers/Admin/C_Admin.php?action=v_product');
           
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    if (isset($_GET['action']) AND $_GET['action'] == "display") {

        try {
            $id = $_GET['id'];
            $joindata =  $Admin->DisplayProduct($id);
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
    
    // Edit:
     if (isset($_GET['action']) AND $_GET['action'] == "update")
     {
         
        $id = $_GET['id'];
        $joindata =  $Admin->DisplayProduct($id);
         //`Product_Name`, `ID`, `Amount`, `CatigioriseID`, `Price`, `Offer`, `ProductImage`, `ExpireDate`, `ProductDate`, `Describtion`
         
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
         
         include '../../views/Admin/V_manageProductPages/V_updateProduct.php';
        
     }
    
     if (isset($_POST['submit']) && $_POST['submit'] == "Edit")
     {
        if (isset($_POST['submit']) && $_POST['submit'] == "Edit") {
            
        $image=  $_FILES['image'];
        $imageName = $_FILES['image']['name'];
        $imageSize = $_FILES['image']['size'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageType = $_FILES['image']['type'];
        $imgeAllExtension = array("jpg","png" ,"jpeg","gif");
        $e=  explode('.',$imageName);
        $imageExtension = strtolower($e[1]);
        if(empty($imageName)){
            echo "you must to choose imge";
        }
         elseif(!empty($imageName) && !in_array($imageExtension ,$imgeAllExtension)){
            echo "your file not an image";
        }
        elseif($imageSize >4194304){
            echo "image size is to big";
        }else{
            $image = rand(0,10000) . '_' .$imageName;
            move_uploaded_file($imageTmp ,'Uploads/images//' . $image);
        $main['Product_Name'] = $_POST['name']; 
        $main['ID'] = $_POST['ID']; 
        $main['Amount'] = $_POST['amount']; 
        $main['CatigioriseID'] = $_POST['catid']; 
        $main['Price'] = $_POST['price'];
        $main['Offer'] = $_POST['offer'];
        $main['ProductImage'] = $image; 
        $date =$_POST['year'];
        //echo $date;
        $date .='-'.$_POST['month'];
        $date .='-'.$_POST['day'];
        $exdate =$_POST['exyear'];
        $exdate .='-'.$_POST['exmonth'];
        $exdate .='-'.$_POST['exday'];
        $main['ExpireDate'] = $exdate;
        $main['ProductDate'] = $date ;
        $main['Describtion'] = $_POST['desc'];
        }
        try {
            $ID = $main['ID'];
            
            $dd = $Admin->UpdateProduct($main,$ID);
    
            if($dd == true){
                
                header('Location:../../controllers/Admin/C_Admin.php?action=v_product');
            }
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }    
     }
    
} else {
   // header('Location:../../../Global/Index.php');
}
}
?>