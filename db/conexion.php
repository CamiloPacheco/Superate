<?php
class database
{
    public static  function conectar()
    {
        $db= new mysqli("sql211.epizy.com","epiz_23904845","DjARsvw2h","epiz_23904845_superatedatabase");
        $r=$db->query("set names 'utf8' ");
        return $db;
    }

}




?>
