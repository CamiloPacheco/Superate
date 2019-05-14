<?php 
class database  
{
    public static  function conectar()
    {
        $db= new mysqli("localhost","root","","superatedatabase");
        $r=$db->query("set names 'utf8' ");
        return $db;    
    }
   
}




?>