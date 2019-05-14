<?php
class database
{
    public static  function conectar()
    {
        $db= new mysqli("remotemysql.com","6NKazsYnfu","uAGJFsP3P7","6NKazsYnfu");
        $r=$db->query("set names 'utf8' ");
        return $db;
    }

}




?>
