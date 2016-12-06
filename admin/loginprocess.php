<?php
    session_start();
    //load all required classes
    require_once("classes/database.php");
    require_once("classes/user.php");
    //creating user object
    $user = new User();
    
    //loading form values
    $username = mysqli_real_escape_string($user->conxn,$_POST['username']);
    $password = mysqli_real_escape_string($user->conxn,$_POST['password']);
    
    //set values
    $user->setAdmin_username($username);
    $user->setPassword($password);
    $user->setlogin_date();
    //validation check
    $flag = $user->validateuser();
    //redirecting user
    if ($flag == true) {
        $_SESSION['loggedin']=true;
        header("location:dashboard.php?page=dashboard");
    }
    else{
        header("location:error.php");
    }
?>