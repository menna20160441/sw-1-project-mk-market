<?php
class Excaption{
    function VaildUseerName($UserName){
        If(!strlen($UserName) < 10)
            return true; 
    }
    
    function VaildPassword($password){
        $password = strtolower($password); 
        If(!(strlen($password) < 7 )|| (strpbrk($password, '1234567890')) != '' || (strpbrk($password, 'qwertyuiopasdfghjklzxcvbnm') != '')){
            return true; 
        }
            
    }
    
    function VaildPassword($Phone){
        $Phone = strtolower($Phone); 
        If(!strlen($UserName) < 11 || strpbrk($password, 'qwertyuiopasdfghjklzxcvbnm') == ''){
            return true;
        }
    }
    
    
}