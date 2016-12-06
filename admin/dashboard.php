<?php 
    session_start();
   if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']) == true){
            echo "sorry you are not logged in";
     }
     else{
        include "header.php";
        //include "footer.php";
        if(isset($_GET['page'])){
            if($_GET['page'] == 'dashboard'){
                include "classes/welcome.php";
            }else if($_GET['page'] == 'about'){
                include "classes/about.php";
            }else if($_GET['page'] == 'champion'){
                include "classes/champion.php";
            }else if ($_GET['page'] == 'blog') {
                include "classes/addblog.php";
            }else if ($_GET['page'] == 'success'){
                include "classes/success.php";
            }else if ($_GET['page'] == 'fail'){
                include "classes/fail.php";
            }
        }
    }
?>