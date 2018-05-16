<?php

class add {

    private $data;
    private $tblName;
    private $database;


    function __construct($data, $tblName,$selection=null,$type="fast cashier"){
        if(is_array($data)){
            if(isset($data['Date'])){
              $date=$data['Date'];
            }
            $this->data = $data;
            $this->tblName = $tblName;

        }else{

            throw new Exception("Error dat must be in array");
        }

        $this->connecttodb();
        if($selection==null){
            $this->addData();
        }
        else{
          if($type=="fast cashier"){
            $data=$this->getReport('*','orders',$data['Date'],'total_order',$selection);
          }elseif ($type=="list product") {
            $data=$this->getAllProducts();
          }else{
            $data=$this->getAllCashierOrders();
          }
          print_r($data);
          if(! empty($data)){
            $name='';
            if(isset($data['Stuff_ID'])){
              $id=$data['Stuff_ID'];
              $name=$this->getTheStuffName($id);
            }
            $this->addData();
            require("fpdf/fpdf.php");
            ob_end_clean(); //    the buffer and never prints or returns anything.
            ob_start();
            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',16);
            $i=2;
            if($type=="fast cashier"){
              $pdf->Cell(0,10,"Report For The Best Seller Cashier",1,1,"C");
              $pdf->Cell(50,10,"The Best Cashier is ".$name,2,2);
              $pdf->Cell(50,10,$this->data['Describtion'],3,3);
            }elseif($type=="list cashier orders"){
              $pdf->Cell(0,10,"Report All Seller Cashier",1,1,"C");
                foreach ($data as  $value) {
                  $pdf->Cell(50,10,$this->getTheStuffName($value['ID'])." has selled At ".$value['Date']."total order =".$value["total_order"],$i,$i);
                    $i++;
                }
                $pdf->Cell(50,10,$this->data['Describtion'],3,3);
            }else{
              $pdf->Cell(0,10,"Report All Products Amount",1,1,"C");
                foreach ($data as  $value) {
                  $pdf->Cell(50,10,$value["Amount"]." Remains from ".$value['Product_Name'],$i,$i);
                  $i++;
                }
                $pdf->Cell(50,10,$this->data['Describtion'],3,3);
            }
            $pdf->Output("files/$type$date".'.pdf','F');
            //header("location:C_Admin.php?action=v_report");
            ob_end_flush();
          }
          else{
            echo "no orders in this date";
          }
        }

    }

    function connecttodb(){

        include_once 'Database.php';
        $vars = "../../include/vars.php";
        $this->database = new Database($vars);
    }

    // insert data into db

        function addData(){

       $keys=array();
        $values=array();

        foreach($this->data as $key => $value){

            $val="'$value'";
            array_push($keys,$key);
            array_push($values,$val);
        }

        $tblkeys = implode($keys , ',');
        $datavalues = implode($values , ',') ;



        $db = $this->database->db;
        $sql="INSERT INTO $this->tblName ($tblkeys) VALUES($datavalues)";
        $stmt = $db->prepare($sql);

       $stmt->execute();


        }

        public function getReport($select='*',$tablename,$date,$max,$selection)
        {
          $repeat=false;
          if ($selection=='day') {
            $sql="SELECT ".$select ." FROM $tablename where Date='".$date."' HAVING max($max) ";
          }elseif ($selection=='month') {
              $array=explode('-',$date);
              $month=(int) $array[1];
              $month--;
              $date2=$array[0].'-0'.$month.'-'.$array[2];
              $select.=",Count(*) as cnt";
              $sql="SELECT ".$select ." FROM $tablename where Date BETWEEN '".$date2."' AND '".$date."'  GROUP BY Stuff_ID ";
              $repeat=true;
          }else{
            $array=explode('-',$date);
            $year=(int) $array[0];
            $year--;
            $date2=$year.'-'.$array[1].'-'.$array[2];
            $select.=",Count(*) as cnt";
            $sql="SELECT ".$select ." FROM $tablename where Date BETWEEN '".$date2."' AND '".$date."' GROUP BY Stuff_ID ";
            $repeat=true;
          }
          echo $sql;
          $data=[];
          $db = $this->database->db;
          $stmt = $db->prepare($sql);
          $stmt->execute();
          if($repeat===true){
            $rows=$stmt->fetchAll();
            if(!empty($rows)){
              $maxcnt=$rows[0]['cnt'];
              foreach ($rows as $row) {
                if($maxcnt<=$row['cnt']){
                  $data=$row;
                  echo " yes";
                }
              }
            }
          }else {
            $data=$stmt->fetch();
          }

          return $data;
        }


        public function getAllProducts()
        {
          $sql="SELECT * FROM products";
          echo $sql;
          $db = $this->database->db;
          $stmt = $db->prepare($sql);
          $stmt->execute();
          $data=$stmt->fetchAll();
          return $data;
        }

        public function getAllCashierOrders()
        {
        /*  if ($selection=='day') {
            $sql="SELECT * FROM orders where Date='".$date."'";
          }elseif ($selection=='month') {
              $array=explode('-',$date);
              $month=(int) $array[1];
              $month--;
              $date2=$array[0].'-0'.$month.'-'.$array[2];
              $select.=",Count(*) as cnt";
              $sql="SELECT * FROM orders where Date BETWEEN '".$date2."' AND '".$date."'";
          }else{
            $array=explode('-',$date);
            $year=(int) $array[0];
            $year--;
            $date2=$year.'-'.$array[1].'-'.$array[2];
            $select.=",Count(*) as cnt";
            $sql="SELECT * FROM orders where Date BETWEEN '".$date2."' AND '".$date."' ";
          }*/
            $sql="select * from orders";
          $db = $this->database->db;
          $stmt = $db->prepare($sql);
          $stmt->execute();
          $data=$stmt->fetchAll();
          return $data;
        }

        public function getTheStuffName($Stuffid)
        {
          $sql="select * from users where ID=".$Stuffid;
          $db = $this->database->db;
          $stmt = $db->prepare($sql);
          $stmt->execute();
          $data=$stmt->fetch();
          return $data['Username'];
        }
}

?>
