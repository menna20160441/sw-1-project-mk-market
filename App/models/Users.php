<?php
class Users{
    //Atrribute
    private $tablename = 'users';
    private $UserName;
    private $Password;
    private $ID;
    
    //Constracture
    function __construct($UserName,$Password){
        //Set date
        $this->UserName = $UserName;
        $this->Password = $Password;
        
    }
    
    //Display profile
    public function DisplayProfile($ID){
        
        include 'Display.php';
        $display   = new Display();
        $display->setTableName('users');
        $date      = $display->getUserData($ID);
        return $date;
    }


    //Update profile
    public function UpdateProfile($date,$ID){
        
        include "Update.php";
        $O_update = new Update($date ,$this->tablename,$ID);
        if($O_update == true){
            return true;
        }else{
            throw exception('Can not Update');
        }
        
    }
    
    //Login
    
    public function Login(){
        include '../models/Login.php';
        $login = new Login($this->UserName,$this->Password);
        return $login;
    }
}