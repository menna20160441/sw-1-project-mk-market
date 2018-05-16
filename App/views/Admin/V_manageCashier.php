<?php
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include_once '../../Tempelates/header.php';
    include_once '../../Tempelates/navbar.php';


?>
<div class="ContentDelete">
<div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 ">
        <h2 class="headcash">Cashier</h2>
        <table class="table table-bordered ">
          <thead style="text-aline=center">
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Control</th>
            </tr>
          </thead>
          <tbody>
              <?php

              include "../../models/Admin.php";

                $ID       = $_SESSION['ID'];
                $tableName = "users";
                $Admin = new Admin($ID);
                $Admin->setTableName($tableName);
                $GroupID = $_SESSION['UserGroupID'];
                $SecDataDisplay = $Admin->DisplayAllEmployee($GroupID);
                    if(empty($SecDataDisplay)){
                    echo "There is no Cashier please try to add sum....";
                }else{
                    for ($i = 0; $i < count($SecDataDisplay); $i++){
                    echo "
                    <tr>
                        <td>{$SecDataDisplay[$i]['ID']}</td>
                        <td>{$SecDataDisplay[$i]['Username']}</td>
                        <td>
                            <a href ='../../controllers/Admin/C_manageEmployee.php?page=ManageCashier&action=update&id={$SecDataDisplay[$i]['ID']}&GroupID=3' class= 'btn btn-info confirm btn-up'><i class='fa fa-edit'></i> Update</a>

                            <a  href='../../controllers/Admin/C_manageEmployee.php?action=delete&id={$SecDataDisplay[$i]['ID']}' class='btn btn-danger confirm btn-del delete'><i class='fa fa-close'></i> Delete</a>

                            <a href ='../../controllers/Admin/C_manageEmployee.php?page=ManageCashier&action=display&id={$SecDataDisplay[$i]['ID']}&GroupID=3' class = 'btn btn-info confirm btn-up'> <i class='fa fa-window-maximize' aria-hidden='true'></i> Display</a>
                        </td>
                    </tr>
                        ";

                    }
                    }
              ?>

          </tbody>
        </table>

        <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="submit">
                            <a style="color:#fff" href="../../controllers/Admin/C_manageEmployee.php?page=ManageEmployee&action=add&GroupID=3">Add New Cashier</a>
                        </button>

                </div>
        </div>

    </div>
</div>
<div class="testDelete"></div>
</div>


<?php
include "../../Tempelates/footer.php";
?>
