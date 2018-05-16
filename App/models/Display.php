<?php

/*
 * Display to get the requested data from the databse
 *
 * 
 */


class Display {

    private $tablename;
    private $GroupID;

    public function __construct() {

        //connect to database;
        $this->connectToDB();
        
        
    }
    
    public function setTableName($tablename)
    {
        $this->tablename=$tablename;
    }
    
    
    
    //Function to connect to datadase
    function connectToDB(){
        try
        {
            include_once "../../models/Database.php";
            $var = "../../include/vars.php";
            $this->database=new Database($var);
        }
        catch (Exception $EXO)
        { 
            echo $EXO->getMessage;   
        }
    }

    //Function to get date from database(user)
    function getAllUserData($GroupID)
    {
        $query = "SELECT * FROM $this->tablename where GroupID = $GroupID ORDER BY 'id' DESC ";
        $db = $this->database->db;
        $stmt = $db->prepare($query);
        $stmt->execute();
        $cont = $stmt->rowCount();
        
        if($cont > 0){
            
            for($i=0; $i<$cont; $i++)
            {
                $data[$i] = $stmt->fetch();
               
            }
            return $data;
              
        }
    }
       
    
    function getUserData($ID)
    {
        
        $query = "SELECT * FROM $this->tablename WHERE ID = $ID ";

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
    
    /*function getAll()
    {
        $query = "SELECT * FROM $this->tablename ";
        $db = $this->database->db;
        $stmt = $db->prepare($query);
        $stmt->execute();
        $cont = $stmt->rowCount();
        
        if($cont > 0){
            
            for($i=0; $i<$cont; $i++)
            {
                $data[$i] = $stmt->fetch();
               
            }
            return $data;
              
        }
        else{
          throw new exception("there is no $this->tablename");
        }
    }*/
    
    public function getAll($all='*',$sOption='', $orderdBy='',$order=''){
        //connect to datebase
    
        
         $sql = "SELECT $all from $this->tablename ";
        
        if(!empty($sOption)){
            $sql.="WHERE $sOption";
        }
        if(!empty($sOption)){
            $sql.="order by $orderdBy $order";
        }

        $db = $this->database->db;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }
    
    //Made by mai
    public function getByJoin(array $tableargs ,array $tableargsEquality,$condition=''){
   
        $sql = "SELECT ";
        if(count($tableargs)){
            $i=1;
            foreach($tableargs as $table=>$arg){
                $sql.=$table.'.'.$arg;
                if($i<count($tableargs)){
                    $sql.=',';
                }
                $i++;
            }
            $sql.=" FROM ".$this->tablename ;
            foreach($tableargsEquality as $table=>$equal)
                {
                    $sql.=" INNER JOIN " . $table . " ON " . $table.".ID = " . $this->tablename  . "." . $table . "ID";
                    
                }
            
           $sql.=$condition;
        
            $db = $this->database->db;
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $cont = $stmt->rowCount();
            if($cont > 0){
            
            for($i=0; $i<$cont; $i++)
            {
                $data[$i] = $stmt->fetch();
               
            }
                
            
              return $data;
        }

        }else{
            echo "error happend";
        }
    }
        
    public function getTheStuffName($Stuffid){
      $sql="select * from users where ID=".$Stuffid;
      $db = $this->database->db;
      $stmt = $db->prepare($sql);
      $stmt->execute();
      $data=$stmt->fetch();
      return $data['Username'];
    }
    
    /*
    ***Get Latest Record Function V1.0
    ***Function to Get Latest Item From Database
    ***$select = The Item To Select 
    ***$table = The Table To Choose From
    ***$order = The Desc Ordering
    ***$item = Number of Record To Select
    */
    
    function displayLatest($select, $order, $limit){
        $sql = "SELECT $select FROM $this->tablename ORDER BY $order DESC LIMIT $limit";
        $db = $this->database->db;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $data=$stmt->fetchAll();
        return $data;
}
    

function getnumerofTable($table)
    {
        
        $query = "SELECT * FROM $table  ";
        $db = $this->database->db;
        $stmt = $db->prepare($query);
        $stmt->execute();
        $cont = $stmt->rowCount();
       // $row  = $stmt->fetch();
        if($cont > 0){
            return $cont;    
        }
        else{
          throw new exception("there is no data in this table");
        }
    }
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
       
        $stmt = $db->prepare("INSERT INTO $this->tblName ($tblkeys) VALUES($datavalues)");
        
       $stmt->execute();
        
        
        }
        
        public function getlastRecordID($tablename,$ID){
        //connect to datebase
        $sql = "SELECT * from $tablename ORDER by $ID DESC LIMIT 1";
        $db = $this->database->db;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetch();
        return $rows;
    }


    

}
?>