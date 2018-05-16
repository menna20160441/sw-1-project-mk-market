
<?php

include "../../models/Admin.php";
session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$ID       = $_SESSION['ID'];
$tableName = "report";
$Admin = new Admin($ID);
$Admin->setTableName($tableName);

if ($_POST OR @$_GET['action']) {

    if (isset($_GET['action']) AND $_GET['action'] == "add") {

        include "../../views/Admin/V_manageReportPages/V_addReport.php";

    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Add") {
        $main['Describtion'] = $_POST['Describtion'];
        $main['Date']=$_POST['Date_in'];
        $main['type']=$_POST['type'];
        $selection=$_POST['selection'];
        $type=$_POST['type'];
        try {

            $dd = $Admin->AddNewReport($main,$selection,$type);

            if($dd === true){
              header('Location:../../controllers/Admin/C_Admin.php?action=v_report');
            }else{
              header('Location:../../controllers/Admin/C_Admin.php?action=v_report');

            }


        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    // Delete:
    if (isset($_GET['action']) AND $_GET['action'] == "delete") {

        try {
            $C_ID = $_GET['id'];
            $Admin->DeleteReport($C_ID);
            header('Location:../../controllers/Admin/C_Admin.php?action=v_report');

        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }


    // Edit:
     if (isset($_GET['action']) AND $_GET['action'] == "update")
     {
         $C_ID = $_GET['id'];
         $date = $Admin->Displayuser($C_ID);

         include '../../views/Admin/V_manageReportPages/V_updateReport.php';

     }


     if (isset($_POST['submit']) && $_POST['submit'] == "Edit")
     {

        $main['Describtion'] = $_POST['Describtion'];
        try {
            $ID = $_POST['ID'];

            $dd = $Admin->UpdateReport($main,$ID);

            if($dd == true){
                header('Location:../../controllers/Admin/C_Admin.php?action=v_report');
            }


        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
     }

} else {
    header('Location:../../../Global/Index.php');
}
?>
