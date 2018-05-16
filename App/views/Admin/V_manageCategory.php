<?php
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include_once '../../Tempelates/header.php';
    include_once '../../Tempelates/navbar.php';


?>
<div class="ContentDelete">
 <div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 ">
        <h2 class="headcash">Category</h2>
        <table class="table table-bordered ">
          <thead style="text-aline=center">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Control</th>
              </tr>
            </thead>

<?php
            include "../../models/Admin.php";


           $ID       = $_SESSION['ID'];
            $tableName = "Catigiorise";
            $Admin = new Admin($ID);
            $SecDataDisplay = $Admin->DisplayAll($tableName);
            if(empty($SecDataDisplay)){
                echo "There is no Supervisor please try to add sum....";
            }else{
                for ($i = 0; $i < count($SecDataDisplay); $i++){
                     echo "
                        <tr>
                            <td>{$SecDataDisplay[$i]['ID']}</td>
                            <td>{$SecDataDisplay[$i]['Name']}</td>
                            <td>
                                <a  href='../../controllers/Admin/C_manageCategory.php?action=delete&id={$SecDataDisplay[$i]['ID']}'class='btn btn-danger confirm btn-del delete'><i class='fa fa-close'></i> Delete</a>

                                <a href ='../../controllers/Admin/C_manageCategory.php?page=ManageCashier&action=update&id={$SecDataDisplay[$i]['ID']}'class= 'btn btn-info confirm btn-up'><i class='fa fa-edit'></i> Update</a>


                            </td>
                        </tr>
                            ";
                }
            }
?>
        </table>


       <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="submit">
                            <a style="color:#fff" href="../../controllers/Admin/C_manageCategory.php?page=ManageCashier&action=add">Add New Category</a>
                        </button>

                </div>
        </div>
     </div>
</div>
<div class="testDelete"></div>
</div>
