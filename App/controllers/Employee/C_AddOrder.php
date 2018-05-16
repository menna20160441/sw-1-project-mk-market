<?php
include_once  '../../models/Cashier.php';
include_once  '../../models/Update.php';


session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$StuffID  = $_SESSION['ID'];
//echo $StuffID;0
$cashier=new cashier($StuffID);
if (isset($_POST['submit']) && $_POST['submit']=='add' )
{
          //$ID=$_POST['ID']; // using it in add order
          $bill['StuffID']=$StuffID;
          $bill['Date_out']='';
          $addbi= new Cashier($StuffID);
          $addbi->setTableName("bill");
          $addbill=$addbi->AddNewOrder($bill);
     if ($addbill==TRUE){
            
         $total=0;
         $last=$cashier->DisplayLastID("orders", "ID");
         $number= intval($last['ID']) ;
         for ($i=1;$i<=6;$i++)
         {
             
             $con="ID$i";
             $con2="amount$i";
             //echo $con.'=';
             
             $ID=$_POST[$con];
             $Amount=$_POST[$con2];
             if ($Amount!=0){
             echo $ID;
             $cashier->setTableName("products")  ;
             $data=$cashier->Displayuser($ID);
             $input['Item_Name']=$data['Product_Name'];
             $input['Product_ID']=$data['ID'];
             $input['item_price']=$data['Price'];
             $input['Order_ID']=$number;
             $input['item_number']=$_POST[$con2];
             echo $input['item_number'] ;
             $price= intval($input['item_number'])* intval($input['item_price']) ;  
             $editValue= intval($data['Amount']) - intval($input['item_number']);
             //echo $editValue;
             if ($modifing= new modify("products", $ID, "Amount", $editValue))
                 echo 'modify';
             else 'error';
            
             $total+=$price; // get total of products
             //echo ' the total ptice is  ' .$total;
             $cashier->setTableName("items");
             $additem=$cashier->AddNewOrder($input);
             //echo 'mmmmm';
             }
         }
         
         $last=$cashier->DisplayLastID("bill", "Bill_ID");
         $totals['Bill_ID']=$last['Bill_ID'];
         $totals['total_order']=$total;
         $totals['Stuff_ID']=$StuffID;
         $cashier->setTableName("orders");
         $addorder=$cashier->AddNewOrder($totals);
        if ($addorder == TRUE){
               include "../../views/Employee/Bill.php";  
           } 
      
      else          echo 'erroe in order';
         
      /*
         //$last=$cashier->DisplayLastID("orders", "ID");
          $input[7]['Order_ID']=$last['ID'];
          $addIt->setTableName("items");
          for ($i=1;i<=6;$i++)
          {
              $con="ID.'$i'";
              $additem=$addIt->AddNewOrder($input[$i]);
      if ($addIt==TRUE)
          echo 'done in item';
      else          echo 'error in item ';
          }
     
      
     
      
      /*
      $addor->setTableName("orders");
      $addorder=$addor->AddNewOrder($total);
      if ($addorder== TRUE)
          echo 'done in order';
      
      else          echo 'erroe in order';
        
       * 
       */ 
        
      
       
 
     }  
}
