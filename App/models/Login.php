<?php

class Login{
    //Atrribute
    private $username;
    private $password;
    private $database;
    private $connect;
    
    //constarct
    function __construct($username,$password){
        
        //Set Date 
        $this->setDate($username,$password);

        //Connect to Database
        $this->connectToDB();

        //Get Date
        $this->getDate();
        
    }
    
    //Function to Set Date to Attribute
    function setDate($username,$password){
        $this->username = $username;
        $this->password = $password;
    }
    
    //Function to Connect to database throw
    //taking object from class database
    function connectToDB(){
        try
        {
            include "../models/Database.php";
            $var = "../include/vars.php";
            $this->database=new Database($var);
        }
        catch (Exception $EXO)
        { 
            echo $EXO->getMessage;   
        }
    }
    
    //Get date to user From the databas
    function getDate(){
        
        $db = $this->database->db;
        $stmt = $db->prepare(" SELECT * FROM users WHERE Username = ? AND Password = ? LIMIT 1" );
        
       $stmt->execute(array($this->username,$this->password));
        //$stmt->execute(array('menna',123));
        
        $cont = $stmt->rowCount();
        $row  = $stmt->fetch();
     
        
        //echo $groupID;
        //check if user exist or not 
        if($cont > 0){
            return true;
            
            
        }
        else{
          throw new exception("user not found");
        }
    
        
    }
    
    //Function to get group ID
   public function getGroupID(){
        
     $db = $this->database->db;
        $stmt = $db->prepare(" SELECT * FROM users WHERE Username = ? AND Password = ? LIMIT 1" );
        
       $stmt->execute(array($this->username,$this->password));
        //$stmt->execute(array('menna',123));
        
        $row  = $stmt->fetch();
       // echo $row['GroupID'];
        
        $GroupID = $row['GroupID'];
        
        return $GroupID;
    }
    
    //Function to get ID
    public function getID(){
        
     $db = $this->database->db;
        $stmt = $db->prepare(" SELECT * FROM users WHERE Username = ? AND Password = ? LIMIT 1" );
        
       $stmt->execute(array($this->username,$this->password));
        //$stmt->execute(array('menna',123));
        
        $row  = $stmt->fetch();
       // echo $row['GroupID'];
        
        $ID = $row['ID'];
        echo $ID;
        
        return $ID;
    }
    public function getImage(){
        $db = $this->database->db;
        $stmt = $db->prepare(" SELECT * FROM users WHERE Username = ? AND Password = ? LIMIT 1" );
        
       $stmt->execute(array($this->username,$this->password));
        //$stmt->execute(array('menna',123));
        
        $row  = $stmt->fetch();
       // echo $row['GroupID'];
        
        $GroupID = $row['UserImage'];
        
        return $GroupID;
    }
}

?>