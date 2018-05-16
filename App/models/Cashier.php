<?php
   // include_once    'Display.php';
     include_once 'Add.php';
    include_once 'modify.php';
class cashier {
    private $tablename = 'users';
    private $ID;
    
    
    function __construct($ID) {
        $ID=$this->ID;
    }
  
     function setTableName($tablename){
        $this->tablename = $tablename;
    }
    
        public function DisplayProduct($id){
        //include_once "Display.php";
        $display = new Display();
        $tableargs = array('Products' => '*',
                            'Catigiorise' => 'Name');
          $tableargsEquality = array('Catigiorise' => 'ID');
          $display->setTableName($this->tablename);
         $condition = " WHERE ".$this->tablename.".ID=".$id;
         $joindata = $display->getByJoin($tableargs,$tableargsEquality,$condition);
        return $joindata;
        
    }
    
    //Display All products
    public function DisplayAllproducts(){
        //include "Display.php";
        $display = new Display();
        $display->setTableName('products');
        $SecDataDisplay = $display->getAll();
        return $SecDataDisplay;
    }
    
    //Display All products
    public function DisplayAllCategory(){
        include_once "Display.php";
        $display = new Display();
        $display->setTableName('catigiorise');
        $SecDataDisplay = $display->getAll();
        return $SecDataDisplay;
    }
    
        //ADD new product
    public function AddNewOrder($main){

        $O_Add = new add($main ,$this->tablename);
        return $O_Add;
        
    }
    
     function updateInAmount ($tablename, $ID, $col, $value)
    {
      $modify=new modify($tablename, $ID, $col, $value);
      return $modify;
    }
    
    public function DisplayLastID($tablename,$ID){
        include_once  'Display.php';
        $display = new Display();
        $dataOfProduct = $display->getlastRecordID($tablename, $ID);
        return $dataOfProduct;
    }
        public function Displayuser($ID){
        
        include_once  'Display.php';
        $display   = new Display();
        $display->setTableName($this->tablename);
        $date      = $display->getUserData($ID);
        if(!empty($date)){
            return $date;
        }else{
            echo "Errorrrrrrrrrrrr";
        }
        
    }
    
    
}