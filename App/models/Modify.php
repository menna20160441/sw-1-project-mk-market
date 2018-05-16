<?php

class modify{
    
    private $tablename;
    private $database;
    private $ID;
    private $col;
    private $value;
    
    public function __construct( $tablename,$ID,$col,$value) {
        $this->tablename=$tablename;
        $this->ID=$ID;
        $this->col=$col;
        $this->value=$value;
        
        $this->connecttodb(); 
        $this->editData();
        
    }
    
    function connecttodb(){
        
        include_once  'Database.php';
        $vars = "../../include/vars.php";
        $this->database = new Database($vars);
    }
    
    
    function editData()
    {
             
       $query= "UPDATE $this->tablename SET $this->col = $this->value WHERE ID =$this->ID ";       
        
       $db = $this->database->db;
       $stmt = $db->prepare($query);
       $stmt->execute();
        
    }
    
}

?>
