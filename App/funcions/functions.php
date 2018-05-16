<?php
class functions {

    private $tablename;

    public function __construct() {

        //connect to database;
        $this->connectToDB();
        
        
    }
    
    
    
    //Function to connect to datadase
    function connectToDB(){
        try
        {
            include_once "../App/models/Database.php";
            $var = "../App/include/vars.php";
            $this->database=new Database($var);
        }
        catch (Exception $EXO)
        { 
            echo $EXO->getMessage;   
        }
    }


function gatLaste($tablename)
    {
        $sql = "SELECT Product_Name FROM $tablename WHERE Amount <10";
        $db = $this->database->db;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $data=$stmt->fetchAll();
        if($data > 0 ){
        return $data;
        }else{
            echo "There is no product, it's Amont Less than 10....";
        }
    }

    function displayLatest($select,$tablename, $order, $limit){
        $sql = "SELECT $select FROM $tablename ORDER BY $order DESC LIMIT $limit";
        $db = $this->database->db;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $data=$stmt->fetchAll();
        return $data;
}
    function getAllUserData($tablename,$GroupID ,$limit)
    {
        $query = "SELECT Fullname FROM $tablename where GroupID = $GroupID ORDER BY ID DESC LIMIT $limit";
        $db = $this->database->db;
        $stmt = $db->prepare($query);
        $stmt->execute();
        $data=$stmt->fetchAll();
        
        
            return $data;
              
        
    }
}
?>
