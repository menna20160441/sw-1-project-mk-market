<?php 
    $_SESSION['url'] = '../..';
    $_SESSION['logout'] = '../../../Global/';
    include '../../Tempelates/header.php';
    include '../../Tempelates/navbar.php';
         

?>

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
            include "../../models/Cashier.php";
            $ID       = $_SESSION['ID'];
            $Cashier = new Cashier($ID);
            $SecDataDisplay = $Cashier->DisplayAllCategory();
            if(empty($SecDataDisplay)){
                echo "There is no Supervisor please try to add sum....";
            }else{
                for ($i = 0; $i < count($SecDataDisplay); $i++){
                     echo " 
                        <tr>
                            <td>{$SecDataDisplay[$i]['ID']}</td>
                            <td>{$SecDataDisplay[$i]['Name']}</td>
                            <td>
                                
                                <a href ='../../controllers/Cashier/C_DisplayCategory.php?action=DisplayProduct&id={$SecDataDisplay[$i]['ID']}' class = 'btn btn-info confirm btn-up'><i class='fa fa-window-maximize' aria-hidden='true'></i> Display Product</a>
                            </td>
                        </tr>
                            ";
                }
            }
?>
        </table>
        
     </div>
</div>
