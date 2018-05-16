<?php
class Admin{
    //Atrribute
    private $tablename;
    private $ID;
    //private $UserName;
    //private $Password;
    
    //Constracture
    function __construct($ID){
       $ID= $this->ID; 
    }
    //made by mai
    //Set Table Name
    function setTableName($tablename){
        $this->tablename = $tablename;
    }
    
    //Display profile
    public function Displayuser($ID){
        
        include 'Display.php';
        $display   = new Display();
        $display->setTableName($this->tablename);
        $data      = $display->getUserData($ID);
        
        return $data;
    }
    
    // Made by mai
    // Display All Product less than 10
    public function DisplayLeastProduct() {
        
        include 'Display.php';
        $display   = new Display();
        $display->setTableName($this->tablename);
        $display->displayLatest();
        return $data;
    }

    //Update profile
  /*public function UpdateProfile($date){
        
        include "Update.php";
        $O_update = new Update($main ,$this->tablename,$this->ID);
        if($O_update == true){
            return true;
        }else{
            throw exception('Can not Update');
        }
        
    }*/
    
    //Add Cashier
    public function AddNewEmployee($main){
        
        include "Add.php";
        $O_Add = new add($main ,$this->tablename);
        return $O_Add;
        
    }
    
    //Update Cashier
    public function UpdateEmployee($date,$C_ID){
        
        include "Update.php";
        $O_Update = new Update($date ,$this->tablename,$C_ID);
        return $O_Update;
    }
    
    //Delete Cashier 
    public function DeleteEmployee($C_ID){
        
        include "Delete.php";
        $delete = new Delete($this->tablename);
        $delete->DeleteRecordByID($C_ID);
        
    }
    
    //get on Casher Or ....
    public function getforUpdate($all,$sOption){
        include "Diplay.php";
        $display = new Display();
        $display->setTableName($this->tablename);
        $SecDataDisplay = $display->getAll($all,$sOption);
    }
    
    //Display All Cashier
    public function DisplayAllEmployee($GroupID){
        include "Display.php";
        $display = new Display();
        $display->setTableName($this->tablename);
        $SecDataDisplay = $display->getAllUserData($GroupID);
        return $SecDataDisplay;
    }
    
    
   
    
    //Add New Category
    public function AddNewCategory($main){
        
        include "Add.php";
        $O_Add = new add($main ,$this->tablename);
        return $O_Add;
        
    }
    
     //Update Category
    public function UpdateCategory($date,$C_ID){
        
        include "Update.php";
        $O_Update = new Update($date ,$this->tablename,$C_ID);
        return $O_Update;
    }
    
    //Delete Category 
    public function DeleteCategory($C_ID){
        
        include "Delete.php";
        $delete = new Delete($this->tablename);
        $delete->DeleteRecordByID($C_ID);
        
    }
    
    //Display All Category
    public function DisplayAllCategory(){
        include "Display.php";
        $display = new Display();
        $display->setTableName($this->tablename);
        $SecDataDisplay = $display->getAll();
        return $SecDataDisplay;
    }
    
    //Add New Product
    public function AddNewProduct($main){
        
        include "Add.php";
        $O_Add = new add($main ,$this->tablename);
        return $O_Add;
        
    }
    
     //Update Category
    public function UpdateProduct($date,$C_ID){
        
        include "Update.php";
        $O_Update = new Update($date ,$this->tablename,$C_ID);
        return $O_Update;
    }
    
    //Delete Category 
    public function DeleteProduct($C_ID){
        
        include "Delete.php";
        $delete = new Delete($this->tablename);
        $delete->DeleteRecordByID($C_ID);
        
    }
    // Made by Mai
    //Display All Category
    public function DisplayAll($tablename){
        include "Display.php";
        $display = new Display();
          $display->setTableName($tablename);
        $catdate = $display->getAll();
        return $catdate;
    }
    // Made by mai
    // Display All Product By innerJoin
    public function DisplayProduct($id){
        include "Display.php";
        $display = new Display();
        $tableargs = array('Products' => '*',
                            'Catigiorise' => 'Name');
          $tableargsEquality = array('Catigiorise' => 'ID');
          $display->setTableName($this->tablename);
         $condition = " WHERE ".$this->tablename.".ID=".$id;
         $joindata = $display->getByJoin($tableargs,$tableargsEquality,$condition);
        return $joindata;
        
    }
    
 public function AddNewReport($main,$selection,$type)
    {

      include "Add.php";
      $O_Add = new add($main ,$this->tablename,$selection,$type);
      return $O_Add;

    }

    public function DeleteReport($C_ID)
    {
      include "Delete.php";
      $delete = new Delete($this->tablename);
      $name = $delete->getReportPDF($C_ID);
      $delete->DeletePdf($name);
      $delete->DeleteRecordByID($C_ID);

    }

    public function UpdateReport($date,$C_ID)
    {
      include "Update.php";
      $O_Update = new Update($date ,$this->tablename,$C_ID);
      return $O_Update;

    }

    public function DisplayReport($C_ID)
    {
      include "Display.php";
      $display = new Display();
      $display->setTableName($this->tablename);
      $data=$display->getAll('*','ID='.$C_ID);

    }
    
    public function getLatest($select, $tableName, $order, $limit){
        include "Display.php";
        $display = new Display();
        $display->setTableName($this->tablename);
        $data = $display->displayLatest($select, $order, $limit);
        return $data;
    }

    
}