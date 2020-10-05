<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400&family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    </head>
    <body class="login">
        <form action="_login.php" method="get">
            <a href="index.php"><img src="logo.png" width="300px"></br></br></a>
            <img src="profile.png" width="100px"></br>
            <label class="form">USER LOGIN</label></br>
            <input type="text" name="username" placeholder="username" required></br>
            <input type="password" name="password" placeholder="password" required></br></br>
            <?php
            if(isset($_REQUEST["er"]))
                if($_REQUEST["er"]=1)
                    echo "<error>Incorrect username or password! </br>Try again <error></error><br>";
            ?>
            <a href="signup.php" class="new">Create an account?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <input type="submit" name="submit" value="Login"><br>
        </form>
    </body>
</html>