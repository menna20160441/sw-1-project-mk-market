
<?php
session_start();

if ($_POST OR @$_GET['action']) {
    include "../../models/Users.php";
    //$Admin = new Admin();
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    
    $user  = new Users($username,$password);
    
    if (isset($_GET['GroupID']) AND $_GET['GroupID'] == "2") {
        
        $_SESSION['UserGroupID'] = 2 ;

    }
    if (isset($_GET['GroupID']) AND $_GET['GroupID'] == "3") {
      
        $_SESSION['UserGroupID'] = 3 ;
    }
    
    if (isset($_GET['action']) AND $_GET['action'] == "v_cashier") {
        include "../../views/Admin/V_manageCashier.php";

    }
    
    if (isset($_GET['action']) AND $_GET['action'] == "v_supervisor") {
        include "../../views/Admin/V_manageSupervisor.php";

    }
    
    if (isset($_GET['action']) AND $_GET['action'] == "v_product") {
        include "../../views/Admin/V_manageProduct.php";

    }
    
    if (isset($_GET['action']) AND $_GET['action'] == "v_category") {
        include "../../views/Admin/V_manageCategory.php";

    }
    if (isset($_GET['action']) AND $_GET['action'] == "v_report") {
        include "../../views/Admin/V_manageReport.php";

    }
    
    //View Update Profile :
     if (isset($_GET['action']) AND $_GET['action'] == "UpdateProfile")
     {
         $id   = $_GET['id'];
         $date = $user->DisplayProfile($id);
         include '../../../Global/Profile.php';
        
     }
    
    //Edit Profile
     if (isset($_POST['submit']) && $_POST['submit'] == "Edit profile")
     {
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
        $main['BirthData'] = ""; 
        $main['UserImage'] = $_POST['img']; 
        $main['WorkHours'] = $_POST['workhours']; 
        $main['Address'] = "";
        $main['Phone'] = "";
        $main['GroupID'] = 1;//becouse he Admin 
         
        try {
            $ID = $main['ID'];
            $dd = $user->UpdateProfile($main,$ID);
    
            if($dd == true){
                header('Location:../../../Global/Index.php');
            }
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }    
     }
    
} else {
    // view to ManageCashier
}
?>
