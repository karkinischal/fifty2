<?php
    include('database.php');
    $obj = new Connection();
    $conn = $obj->getConnection();
    $cont = $_POST['textarea'];
    $sql = 'UPDATE home_posts SET post_cont="'.$cont.'" WHERE post_type='.'"champion"';
    if ($conn->query($sql) === TRUE) {
        header("location:../dashboard.php?page=success");
    } else {
    header("location:dashboard.php?page=fail");
}
?>