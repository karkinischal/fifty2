<?php
    include('../admin/classes/database.php');
    $obj = new Connection();
    $conn = $obj->getConnection();
    $sql = 'SELECT * FROM blog_posts where post_id='.$_GET['id'];
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }
    if ($row[post_id]=='') {
        header('Location:./');
    }

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS-->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/menu.css">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body>
    <section id="container" class="sub-page">
        <div class="wrap-container zerogrid">
            <div class="crumbs">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
        </div>
        <div id="main-content" class="col-2-3">
            <div class="wrap-content">
                <?php
                    echo'<article>';
                    echo'<div class="art-header">';
                    echo'<a href="viewpost.php?id='.$row[post_id].'"><h3>'.$row[post_title].'</h3></a>';
                    echo'<div class="info">'.'by '.$row[post_author].' , '.date('jS M Y',strtotime($row['post_date'])).'</div>';
                    echo'</div>';
                    echo'<div class="art-content">';
                    echo'<p>'.$row[post_cont].'</p>';
                    echo'</div>';
                    echo'</article>';
                    $conn->close();
                ?>    
            </div>
        </div>
        <div id="sidebar" class="col-1-3">
            <div class="wrap-sidebar">
                <div class="widget wid-about">
                    <div class="wid-header">
                        <h5>About Us</h5>
                    </div>
                    <div class="wid-content">
                        <img src="../img/flogo2.jpg"/>
                        <p>'50 Female Champions' is a fellowship program that is designed to recognize 50 female leaders of the society whose works has been an agent for social contribution and change, and provide them with a platform to further strengthen their skills to become a bigger contributing factor in the society. This program is led by We Inspire Nepal in support from UNESCO. The program is to begin with two days intensive training followed by a well-designed community mobilization that shall address some very important issues of adolescent girls mostly including psychological and physical change, sexual health education, empowerment etc.</p>
                    </div>
                </div>
</section>
    <!-- js -->
    <script src="js/classie.js"></script>
    <script src="js/demo.js"></script>
    
</div>
</body></html>