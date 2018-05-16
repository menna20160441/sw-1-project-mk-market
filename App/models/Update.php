<?php

class Update{
    
    private $tablename;
    private $data;
    private $database;
    private $ID;

    public function __construct($data, $tablename ,$ID) {
        
        if(is_array($data))
        {
            $this->data = $data;
            $this->tablename = $tablename;
            $this->ID = $ID;
        }
        
         $this->data = $data;
        
        $this->connecttodb();
        
        $this->editData();
        
    }
    
    function connecttodb(){
        
        include 'Database.php';
        $vars = "../../include/vars.php";
        $this->database = new Database($vars);
    }
    
    
    function editData()
    {
             
        $query = "UPDATE $this->tablename SET ";        
        foreach ($this->data as $key => $value) {
            $query .= "`".$key."` = '".$value."', ";
        }             
        $pat = "+-0*/";
        $query .= $pat;        
        $query = str_replace(", ".$pat, " ", $query);                             
        $query .= " WHERE id = $this->ID";
       $db = $this->database->db;
       
       $stmt = $db->prepare($query);
        
       $stmt->execute();
        
    }
    
}

?>
