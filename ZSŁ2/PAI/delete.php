<?php
if(!empty($_GET['userId']))
{
    require_once 'connect.php';
    $sql="DELETE FROM 'users' WHERE 'users'.'id' =$_GET[id]";
    // $sql="DELETE FROM 'users' WHERE 'users'.'name' ='q'";   usuwa gdy uzytk name zaczyna sie od q
    $connect->query($sql);
    if ($connect->affected_rows){
        header();
    }else{

    }

}

?>