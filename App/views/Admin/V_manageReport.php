<?php
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include_once '../../Tempelates/header.php';
    include_once '../../Tempelates/navbar.php';


?>
<div class="ContentDelete">
<div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 ">
        <h2 class="headcash">Report</h2>
        <table class="table table-bordered ">
          <thead style="text-aline=center">
            <tr class="danger">
                <th>Description</th>
                <th>Date</th>
                <th>Control</th>
            </tr>
          </thead>
          <tbody>
              <?php

                include "../../models/Display.php";
                $tablename = "report";
                $display = new Display();
                $display->setTableName($tablename);
                $reports = $display->getAll();

                for ($i = 0; $i < count($reports); $i++){

                     echo "
                        <tr>
                            <td>{$reports[$i]['Describtion']}</td>
                            <td>{$reports[$i]['Date']}</td>
                            ";
                    echo "<td>";

                              echo "<a target='_blank' href='../../controllers/Admin/files/{$reports[$i]['type']}{$reports[$i]['Date']}.pdf' class = 'btn btn-info confirm btn-up'><i class='fa fa-window-maximize' aria-hidden='true'></i>View File</a> ";


                               echo "<a  href='../../controllers/Admin/C_manageReport.php?action=delete&id={$reports[$i]['ID']}' class='btn btn-danger confirm btn-del delete'><i class='fa fa-close'></i>Delete</a>


                                <a href ='../../controllers/Admin/C_manageReport.php?page=ManageReport&action=update&id={$reports[$i]['ID']}' class= 'btn btn-info confirm btn-up'><i class='fa fa-edit'></i>Update</a>
                            </td>
                        </tr>
                            ";
                }
            ?>

          </tbody>
        </table>

    <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="submit">
                            <a style="color:#fff" href="../../controllers/Admin/C_manageReport.php?action=add">Add New Report</a>
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
