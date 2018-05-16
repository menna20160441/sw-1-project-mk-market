<?php
/*
 * awebarts
 * @author Ali7amdi
 */
class Database
{

    private $dns;
    private $user;
    private $pass;
    private $option;
    public $db;
    function __construct($filename)
    {
        if(is_file($filename)) include $filename;
        else throw new Exception("Error!");

        $this->dns = $dns;
        $this->user = $user;
        $this->pass = $pass;
        $this->option = $option;

        $this->connect();
    }

     function connect()
    {

        // connect to the server
        $this->db = new PDO($this->dns,$this->user,$this->pass,$this->option);
        $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

    }

    function close(){
        $this->db->close();
    }

    public function getAll($tablename,$all='*',$sOption='', $orderdBy='',$order='DESC'){
        //connect to datebase


         $sql = "SELECT $all from $tablename ";

        if(!empty($sOption)){
            $sql.="WHERE $sOption";
        }
        if(!empty($orderdBy)){
            $sql.=" order by $orderdBy $order";
        }

        $db = $this->db;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll();
        return $rows;
    }

}


?>
