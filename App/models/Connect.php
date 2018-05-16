<?php

class Connect {
    public $objectDb;
    function connectToDb ()
    {
        include 'Datebase.php';
        $vars='../include/vars.php';
        $this->objectDb=new Datebase($vars);
        //$check=TRUE;
    }
    
     function close ()
    {
        $this->objectDb->close();
    }
}

?>
