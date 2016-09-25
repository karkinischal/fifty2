<?php ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADMIN</title>
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
<form class="login" action = "loginprocess.php" method="post">
  
  <fieldset>
    
    <legend class="legend">Login</legend>
    
    <div class="input">
        <input type="text" placeholder="Username" name="username" required />
      <span><i class="fa fa-user-secret"></i></span>
    </div>
    
    <div class="input">
        <input type="password" placeholder="Password" name="password" required />
      <span><i class="fa fa-lock"></i></span>
    </div>
    
    <button type="submit" class="submit" name="login"><i class="fa fa-long-arrow-right"></i></button>
    
  </fieldset>
</form>
</body>
<script src="admin.js"></script>
<script type="text/javascript" src="admin.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</html>