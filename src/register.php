<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Fonts-->
    <link href="http://fonts.cdnfonts.com/css/a-love-of-thunder" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/whois" rel="stylesheet">

    <!-- Stylesheets-->
    <!-- NORMALIZE FIRST-->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- THEN CUSTOM STYLES SECOND-->
    <link rel="stylesheet" href="css/style.css">
    <!-- STYLES of flexslider plugin -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
</head>
<body>
    <form action="register.php" method="post">
        <h1>sign up</h1>
        <div>
            <label for="username">USERNAME</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">PASSWORD</label>
            <input type="text" name="password" id="password">
        </div>
        <button type="submit" name="user_register">Register</button>
    </form>
    
</body>
</html>