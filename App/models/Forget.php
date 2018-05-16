<?php

class Forget{
    //Atrribute
    private $username;
    private $password;
    private $database;
    private $connect;
    private $tablename="users";
    
    //constarct
    function __construct($username){
        
        //Set Date 
        $this->setDate($username);

        //Connect to Database
        $this->connectToDB();

        //Get Date
    }
    
    //Function to Set Date to Attribute
    function setDate($username){
        $this->username = $username;
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
  function getUserData($username)
    {
        
        $query = "SELECT * FROM $this->tablename WHERE Username = '$username' ";
        
        $db = $this->database->db;
        $stmt = $db->prepare($query);
        $stmt->execute();
        $cont = $stmt->rowCount();
        $row  = $stmt->fetch();
       
        if($cont > 0){

            return $row;
              
        }
        else{
          throw new exception("User not Found");
        }
    }
}
?>