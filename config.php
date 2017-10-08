<?php
    error_reporting(E_ALL);
    ini_set("display_error",1);
    $db=new mysqli('localhost','root','dnlwkem24','kuriring');
    if($db->connect_error){
        die();
    }
    $db->set_charset('utf8');
?>
