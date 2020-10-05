<?php
if(isset($_REQUEST["role"])) {
    $selection = $_REQUEST["role"];
    $displayName = $_REQUEST["displayName"];
    if(isset($_REQUEST['profile']))
        if($_REQUEST['profile']=="")
            $url="pr.png";
        else
            $url=$_REQUEST['profile'];

    }
?>

<html>
    <head>
        <title>Home</title>
        <script src="https://kit.fontawesome.com/fb617cf77e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="stylesheet.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body onload="select()">
    <nav>
        <a href="#" class="text">Home</a>
        <a href="" class="text">About Us</a>
        <a href="" class="text">Contact Us</a>
        <a href="login.php" class="text" id="login">LogIn</a>
        <a href="signup.php" class="text" id="signup">SignUp</a>
        <a href="login.php" class="text" id="logout">LogOut</a>
        <?php if(isset($_REQUEST["role"]))echo "<a href=\"adminPanel.php?role=$selection&displayName=$displayName\" class=\"button\" id=\"admin\">Admin Panel</a>" ?>
        <?php if(isset($_REQUEST["role"]))echo "<a href=\"addNewItems.php?role=$selection&displayName=$displayName\" class=\"button\" id=\"supplier\">Add New Items</a>"?>
        <a class="welcome" id="welcome"><?php if(isset($_REQUEST["role"])){echo "Hello ";if($_REQUEST["role"]==3)echo "Happy customer "; echo "Mr.",$displayName,", Welcome!";}; ?></a>
        <a href="#"><img class="logo" src="logo.png" width="200px"></a>
        <?php if(isset($_REQUEST['profile'])){if($_REQUEST['profile']=="")echo "<a href=\"#\"><i class=\"fa fa-user-circle-o\" style='font-size: 40px; color: rgb(121, 173, 61); float: right; padding-right: 30px; padding-top: 10px'  aria-hidden=\"true\"></i></a>"; else echo "<a href=\"#\"><img id=\"pr\" src=$url height=\"60px\" width='60px'></a>";}?>
        <?php if(isset($_REQUEST['profile']))echo "<a href=\"#\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\" style='font-size: 40px; color: rgb(121, 173, 61); float: right; padding-right: 30px; padding-top: 10px'></i></a>";?>
    </nav>

    <display>
        <div style="text-align: center;">
            <form style="border: none;" >
                <input type="text" placeholder="Search..for Products" name="search" style="width: 500px; color: white">
                <button type="submit"><i class="fa fa-search"></i></button>
                <p class="greeting">“Hi dear valued customer! We’re so excited that you’ve decided to purchase from us. It’s designed to help you to ease your purchasing . You can expect to hear from us four times a month with special offers, product updates, and more. Contact us if you have any questions.”</p>
            </form>
        </div>
        <div class="product">
            ownwevonvonvwovnrvonrwv
        </div>
    </display>

    <?php include 'footer.php'?>

    </body>
    <script>var selection="<?php echo $selection ?>";</script>
</html>