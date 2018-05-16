<?php

class DisplayAll extends Connect{
    
    private $tableName;
    
    function --construct($tableName){
        $this->tableName = $tableName;
        
        //get date
    }
    
    //function to connect to datebase
    
    //function to display All date
    public function getALl($all='*',$tablename,$sOption='', $orderdBy='',$order='DESC'){
        //connect to datebase
         $this->connectToDb();
        
         $sql = "SELECT $all from $this->tablename where $sOption orderby $orderdBy $order";
        
    }
    
    
    public function getByJoin(array $tableargs , array $args ){
        $sql = ""    
    }
    SELECT items.*, category.Name AS NameOfCategory , users.Username FROM 
                                   items
                              INNER JOIN 
                                   category
                              ON 
                                    category.ID = items.Cat_ID
                              INNER JOIN 
                                    users 
                              ON 
                              users.ID = items.Member_ID
        
}
?>