
<?php
session_start();

if ($_POST OR @$_GET['action']) {
    include "../../models/Users.php";
    //$Admin = new Admin();
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    
    $user  = new Users($username,$password);
    if (isset($_GET['action']) AND $_GET['action'] == "addOrder") {
    
        include "../../views/Employee/V_Addorder.php";

    }
    
        if (isset($_GET['action']) AND $_GET['action'] == "editOrder") {
    
        include "../../views/Employee/V_editeOrder.php";

    }
    
    
    if (isset($_GET['action']) AND $_GET['action'] == "DisplayAllCategory") {
    
        include "../../views/Employee/V_DisplayALLCategory.php";

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
        $main['GroupID'] = 3;//becouse he cashier 
         
        try {
            $ID = $main['ID'];
            $dd = $user->UpdateProfile($main,$ID);
    
            if($dd == true){
                echo "good";
            }
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }    
     }
    
} else {
    header('Location:../../../Global/Index.php');
}
?>