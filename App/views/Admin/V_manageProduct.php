<?php
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include_once '../../Tempelates/header.php';
    include_once '../../Tempelates/navbar.php';


?>
<div class="ContentDelete">
<div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54 ">
        <h2 class="headcash">Product</h2>
        <table class="table table-bordered ">
          <thead style="text-aline=center">
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Price</th>
                <th>Control</th>
            </tr>
          </thead>
          <tbody>

<?php

include "../../models/Display.php";
$tablename = "Products";
$display = new Display();
            $display->setTableName($tablename);
        $tableargs = array('Products' => '*',
                            'Catigiorise' => 'Name');
          $tableargsEquality = array('Catigiorise' => 'ID');
         $joindata = $display->getByJoin($tableargs,$tableargsEquality);

            if(empty($joindata)){
                echo "There is no product please try to add sum....";
            }else{

            foreach($joindata as $item){
                echo "
                    <tr>
                        <td>{$item['ID']}</td>
                        <td>{$item['Product_Name']}</td>
                        <td>{$item['Price']}</td>
                        <td>
                            <a href ='../../controllers/Admin/C_manageProduct.php?page=ManageCashier&action=update&id={$item['ID']}' class= 'btn btn-info confirm btn-up'><i class='fa fa-edit'></i> Update</a>

                            <a  href='../../controllers/Admin/C_manageProduct.php?action=delete&id={$item['ID']}' class='btn btn-danger confirm btn-del delete'><i class='fa fa-close'></i> Delete</a>

                            <a href ='../../controllers/Admin/C_manageProduct.php?page=ManageCashier&action=display&id={$item['ID']}&GroupID=3' class = 'btn btn-info confirm btn-up'> <i class='fa fa-window-maximize' aria-hidden='true'></i> Display</a>
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
                            <a style="color:#fff" href="../../controllers/Admin/C_manageProduct.php?action=add">Add New Product</a>
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
