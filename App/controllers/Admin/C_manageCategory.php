
<?php

include "../../models/Admin.php";
session_start();
$ID       = $_SESSION['ID'];
$tableName = "Catigiorise";
$Admin = new Admin($ID);
$Admin->setTableName($tableName);

if ($_POST OR @$_GET['action']) {
    
    if (isset($_GET['action']) AND $_GET['action'] == "add") {
        
        include "../../views/Admin/V_manageCategoryPages/V_addCategory.php";

        
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Add") {
        $main['Name'] = $_POST['name']; 
        
        try {
            
            $dd = $Admin->AddNewCategory($main);
    
            if($dd == true){
                header('Location:../../controllers/Admin/C_Admin.php?action=v_category');
            }
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    // Delete:
    if (isset($_GET['action']) AND $_GET['action'] == "delete") {

        try {
            $C_ID = $_GET['id'];
            $Admin->DeleteCategory($C_ID);
            header('Location:../../controllers/Admin/C_Admin.php?action=v_category');
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    
    // Edit:
     if (isset($_GET['action']) AND $_GET['action'] == "update")
     {
         $C_ID = $_GET['id'];
         $date = $Admin->Displayuser($C_ID);
         
         include '../../views/Admin/V_manageCategoryPages/V_updateCategory.php';
        
     }
    
    
     if (isset($_POST['submit']) && $_POST['submit'] == "Edit")
     {
        $main['ID'] = $_POST['ID']; 
        $main['Name'] = $_POST['name']; 
         
        try {
            $ID = $main['ID'];
            
            $dd = $Admin->UpdateCategory($main,$ID);
            if($dd == true){
                header('Location:../../controllers/Admin/C_Admin.php?action=v_category');
            }
            

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }    
     }
    
} else {
    header('Location:../../../Global/Index.php');
}
?>