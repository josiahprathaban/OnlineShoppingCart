<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body class="signup">
<form action="_signup.php" method="get">
    <a href="index.php"><img src="logo.png" width="300px"></br></br></a>
    <img src="profile.png" width="100px"></br>
    <label class="form">CUSTOMER SIGNUP</label></br>
    <label class="formsub">JOIN US | ITHU NALLAM</label></br>
    <input type="text" name="username" placeholder="username" required></br>
    <?php
    if(isset($_REQUEST["er"]))
        if($_REQUEST["er"]==1)
            echo "<error style=\"font-size: 12px\">*The username you entered was already taken, </br>please try different one!</error><br>";
    ?>
    <input type="text" name="dis" placeholder="display name" required></br>
    <input type="password" name="password" placeholder="password" required></br>
    <input type="Password" name="confirmPassword" placeholder="confirm your password" required></br>
    <?php
    if(isset($_REQUEST["er"])) {
        if ($_REQUEST["er"] == 2)
            echo "<error style=\"font-size: 12px\">*Passwords did not match!</error><br>";
        if ($_REQUEST["er"] == 3)
            echo "<error style=\"font-size: 12px\">*Please Fill all the fields!</error><br>";
    }
    ?>
    </br>
    <a href="login.php" class="new">already have an account?&nbsp;&nbsp;&nbsp;</a>
    <input type="submit" name="submit" value="SignUp">
</form>
</body>
</html>