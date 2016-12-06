<?php
    include('database.php');
    $obj = new Connection();
    $conn = $obj->getConnection();
    $test = $_POST['textarea'];
    $sql = 'UPDATE home_posts SET post_cont="'.$test.'" WHERE post_type='.'"about"';
    if ($conn->query($sql) === TRUE) {
        header("location:../dashboard.php?page=success");
    } else {
    header("location:dashboard.php?page=fail");
}
?>