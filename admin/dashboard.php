<?php 
    session_start();
   if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']) == true){
            echo "sorry you are not logged in";
     }
     else{
        include "header.php";
        include "footer.php";
     }
?>
<br>
<a href="logout.php">logout</a>