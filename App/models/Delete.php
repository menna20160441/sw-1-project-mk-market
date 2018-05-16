<?php
class delete{
    private $TableName;
    private $database;
    public function __construct($TableName){
        //Set date
        $this->TableName = $TableName;
        //Connect to database
        $this->connectToDB();


    }

    function connectToDB(){
        try
        {
            include "../../models/Database.php";
            $var = "../../include/vars.php";
            $this->database=new Database($var);
        }
        catch (Exception $EXO)
        {
            echo $EXO->getMessage;
        }
    }


    function DeleteRecordByID($ID)
    {

        $db = $this->database->db;

        $stmt = $db->prepare("DELETE FROM $this->TableName WHERE ID = $ID ");

        $stmt->execute();

    }

      public function getReportPDF($id)
    {
      $sql="select * from report where ID=".$id;

      $db = $this->database->db;

      $stmt = $db->prepare($sql);

      $stmt->execute();

      $data=$stmt->fetch();
      return $data['type'].$data['Date'];
    }



    public function DeletePdf($name)
    {
      try {
        unlink("files/".$name.".pdf");
      } catch (\Exception $e) {
        echo  $name;
        echo "Error Pdf File not exist";
      }

    }
}



?>
