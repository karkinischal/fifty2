<?php
session_start();
require 'database.class.php';
class Login extends Database{
    public function loginCheck($username,$password){
        $sql = mysql_query("select * from admin where username='".$username."' and password= '".$password."'") or die(mysql_error());
        $data = mysql_fetch_array($sql);
        if($data){
            $_SESSION['username'] = $data['username'];
            $_SESSION['userid'] = $data['id'];
            $_SESSION['login'] = true;
            return true;
        }else{
            return false;   
        }
    }
    public function logOut(){
        setcookie('username','',time() - 1*24*60*60);
        setcookie('password','',time() - 1*24*60*60);
        session_destroy();
    }
}
?>