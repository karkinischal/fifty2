<?php
    session_start();
    require '../include/classes/database.php';
    if(empty($_POST) === false){
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $username ,' ',$password ;
        echo "Now finalized the usr verification";
    }
?>