<?php
$x= getcwd();
$y= strstr($x, "MK_Market",true);
$y.="MK_Market/App";
include_once $y."/models/Database.php";
$var = $y."/include/vars.php";
$display=new Database($var);
$data=$display->getAll('products','*','Amount<=10','ID');//
$data2=$display->getAll('products','*,ProductDate-ExpireDate as sub','ProductDate-ExpireDate<5','ID');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
     if(!empty($data)){
      foreach ($data as $value){ ?>
      <li>
        <a><?php echo "Remains ".$value['Amount']."From ".$value['Product_Name']; ?></a>
      </li>
    <?php
            }
        }
    ?>
    <?php
     if(!empty($data2)){
      foreach ($data2 as $value){ ?>
      <li>
        <a><?php echo "Remains ".$value['sub']." to Expire ".$value['Product_Name']; ?></a>
      </li>

    <?php
            }
        }
    ?>

</body>
</html>
