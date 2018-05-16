<?php
session_start();
$staffID=$_SESSION['ID'];
include_once '../../models/Database.php';
$vars="../../include/vars.php " ;
$database=new Database($vars);

$itemTab=$_POST['ID_order'];
$orderTab=$_POST['orderID'];
//echo 'in table order ' . $orderTab;
$Amount=$_POST['Amount'];

$query = "SELECT * FROM items WHERE Order_ID = $itemTab ";
$db=$database->db;
$stmt = $db->prepare($query);
$stmt->execute();
$data  = $stmt->fetch();
$AM =$data['Product_ID']; //get product id
echo ' product id is '.$AM .'  ';

$query="SELECT * FROM products WHERE ID = $AM";
$db=$database->db;
$stmt = $db->prepare($query);
$stmt->execute(); // get Amount in ma5zan
$num=$stmt->fetch();

if ($num['Amount']> $Amount){
$value= $num['Amount'] - $Amount ;

$query="UPDATE products 
set Amount ='$value'
WHERE  ID ='$AM' ";
$db=$database->db;
$stmt = $db->prepare($query);
$stmt->execute();
echo 'the deffrence between prodects Amount and New items Amount is '. $value;


$query="UPDATE items 
set item_number ='$Amount'
WHERE  Order_ID ='$itemTab' ";
$db=$database->db;
$stmt = $db->prepare($query);
if ($stmt->execute()==TRUE){
    echo 'updated in items';
    
    


$number =$data['item_number'];
$price=$data['item_price'];
$total= intval($number) * intval($price);
echo $total;
$query="UPDATE orders 
set total_order ='$total'
WHERE  ID ='$orderTab' ";
$db=$database->db;
$stmt = $db->prepare($query);
if ($stmt->execute()==TRUE)
    echo 'updated in order';



}
}
else {
    echo 'amount not enough';
}





        