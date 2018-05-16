
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if($_POST){
    if(isset($_POST['submit']) && ($_POST['submit'] == 'Login')){

        $username = $_POST['username'];
        $password = $_POST['password'];
        try
        {
            include "../models/Users.php";
            $User = new Users($username,$password);
            $login = $User->Login();
            
            
            if($login == true){
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['GroupID'] = $login->getGroupID();
                $_SESSION['ID'] = $login->getID();
                $_SESSION['logout'] = '';
                $_SESSION['img'] = $login->getImage();
                //$ID = $login->getID();
                //echo "Session Id = ".$_SESSION['ID'];
                echo "Session Id = " .$ID ;
                header('Location:../../Global/Index.php');
            }  
            
        }
        catch(Exception $EXC)
        {
            echo $EXC->getMessage();
        }
    }
     else if(isset($_POST['submit'])&& $_POST['submit']=='forgotSubmit'){
        
        $username=$_REQUEST['username']; // getting username from textfield 
        include "../models/Forget.php";
        $forget = new Forget($username);
        
        $arr = $forget->getUserData($username);
        
        
        
        //Load Composer's autoloader
        require '../../vendor/autoload.php';
    
        $mail = new PHPMailer(true);                              // Passing true enables exceptions
        try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'proadm883@gmail.com';                 // SMTP username
        $mail->Password = 'Admin123456789';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, ssl also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('proadm883@gmail.com', 'MK_Admin');
        $mail->addAddress($arr['Email'], 'Admin');     // Add a recipient




        //Content
        $mail->isHTML(false);                                  // Set email format to HTML
        $mail->Subject = 'Mk Forgot Password';
        $mail->Body    = 'Your Password is ' .$arr['Password'] ;

        $mail->send();
        header("Location:../views/Massage.php");
        } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

    }

    
}

?>
