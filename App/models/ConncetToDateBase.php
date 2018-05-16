
<?php
class ConncetToDateBase {
    
    
    private $objectDb;
    
    function connectToDb()
    {
        include 'Database.php';
        $vars='../include/vars.php';
        $this->objectDb =new Database($vars);
    }
    
    function close()
    {
        $this->objectDb->close();
    }
    
}


?>