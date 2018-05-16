
<?php

include "../../models/Admin.php";

session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$ID       = $_SESSION['ID'];
$tableName = "users";
$Admin = new Admin($ID);
$Admin->setTableName($tableName);

if ($_POST OR @$_GET['action']) {
    
    if (isset($_GET['GroupID']) AND $_GET['GroupID'] == "2") {
        $_SESSION['UserGroupID'] = 2 ;

    }
    if (isset($_GET['GroupID']) AND $_GET['GroupID'] == "3") {
        $_SESSION['UserGroupID'] = 3 ;
    }
    
    
    if (isset($_GET['action']) AND $_GET['action'] == "add") {
        //$_SESSION['GroupID'] = $_GET['GroupID']
        include "../../views/Admin/V_manageEmployeePages/V_addEmployee.php";

    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Add") {
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
        /* get image source */
        $main['Username'] = $_POST['username'];  
        $main['Fullname'] = $_POST['fullname']; 
        $main['Password'] = $_POST['password']; 
        $main['Email'] = $_POST['email']; 
        $main['salary'] = $_POST['salary'];
        $main['Regestration'] = date("Y-m-d H:i:s");
        $date =$_POST['year'];
        $date .='-'.$_POST['month'];
        $date .='-'.$_POST['day'];
        $main['BirthData'] = $date ;
        $main['UserImage'] = $image; 
        $main['WorkHours'] = $_POST['workhours']; 
        $pieces = explode("-", $date);
        $year = $pieces[0];
        $month = $pieces[1];
        $day = $pieces[2];
        $now = date("Y-m-d");
        $pack = explode("-", $now);
        $year2 = $pack[0] -$year;
        $month2 = $pack[1] - $month;
        $day2 = $pack[2] - $day;
        $age =$year2;
        $age .='-'.$month2;
        $age .='-'.$day2;
        echo $age;
        $main['Age'] = $age;
        $main['Address'] = $_POST['address'];
        $main['Phone'] = $_POST['phone'];
        global $GroupID;
        $main['GroupID'] = $_SESSION['UserGroupID'] ;
        }
        try {
            
            $dd = $Admin->AddNewEmployee($main);
            
            if($dd == true){
               if($_SESSION['UserGroupID'] == 2 ){
                   header('Location:../../controllers/Admin/C_Admin.php?action=v_supervisor');
               }else{
                   header('Location:../../controllers/Admin/C_Admin.php?action=v_cashier');
               }
            }
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    // Delete:
    if (isset($_GET['action']) AND $_GET['action'] == "delete") {

        try {
            $C_ID = $_GET['id'];
            $Admin->DeleteEmployee($C_ID);
            
             if($_SESSION['UserGroupID'] == 2 ){
                   header('Location:../../controllers/Admin/C_Admin.php?action=v_supervisor');
               }else{
                   header('Location:../../controllers/Admin/C_Admin.php?action=v_cashier');
               }
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
        if (isset($_GET['action']) AND $_GET['action'] == "display") {

        try {
            $C_ID = $_GET['id'];
            $date = $Admin->Displayuser($C_ID);
          
             include '../../views/Admin/V_manageEmployeePages/V_displayEmployee.php';
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    
    
    // Edit:
     if (isset($_GET['action']) AND $_GET['action'] == "update")
     {
         
         $C_ID = $_GET['id'];
         $date = $Admin->Displayuser($C_ID);
         $pieces = explode("-", $date['BirthData']);
        $year = $pieces[0];
        $month = $pieces[1];
        $day = $pieces[2];
         
         include '../../views/Admin/V_manageEmployeePages/V_updateEmployee.php';
        
     }
    
    
     if (isset($_POST['submit']) && $_POST['submit'] == "Edit")
     {
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
         
        $main['ID'] = $_POST['ID']; 
        $main['Username'] = $_POST['username']; 
        if(empty($_POST['newpassword'])){
            $main['Password'] = $_POST['oldpassword'];
         }else{
            $main['Password'] = $_POST['newpassword']; 
         }    
        $main['Fullname'] = $_POST['fullname'];  
        $main['Email'] = $_POST['email']; 
        $main['salary'] = $_POST['salary'];
        $main['Regestration'] = date("Y-m-d H:i:s");
        $date =$_POST['year'];
        $date .='-'.$_POST['month'];
        $date .='-'.$_POST['day'];
        $main['BirthData'] = $date ;
        $main['UserImage'] = $image; 
        $main['WorkHours'] = $_POST['workhours']; 
        $pieces = explode("-", $date);
        $year = $pieces[0];
        $month = $pieces[1];
        $day = $pieces[2];
        $now = date("Y-m-d");
        $pack = explode("-", $now);
        $year2 = $pack[0] -$year;
        $month2 = $pack[1] - $month;
        $day2 = $pack[2] - $day;
        $age =$year2;
        $age .='-'.$month2;
        $age .='-'.$day2;
        echo $age;
        $main['Age'] = $age;
        $main['Address'] = $_POST['address'];
        $main['Phone'] = $_POST['phone'];
        $main['GroupID'] =$_SESSION['UserGroupID'];
     }
        try {
            $ID = $main['ID'];
            
            $dd = $Admin->UpdateEmployee($main,$ID);
    
            if($dd == true){
                
                if($_SESSION['UserGroupID'] == 2 ){
                   header('Location:../../controllers/Admin/C_Admin.php?action=v_supervisor');
               }else{
                   header('Location:../../controllers/Admin/C_Admin.php?action=v_cashier');
               }
            }
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }    
     }
    
} else {
    header('Location:../../../Global/Index.php');
}
?>