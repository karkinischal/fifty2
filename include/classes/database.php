<?php
    $connection = mysqli_connect('localhost', 'root', 'pentagon', 'fifty');
    if ($connection === false) {
        echo "sorry we have some connection problem";
    }
?>