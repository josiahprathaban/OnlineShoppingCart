<?php
if(isset($_REQUEST["role"])) {
    if ($_REQUEST["role"] == '1')
        $selection = $_REQUEST["role"];
    $displayName = $_REQUEST["displayName"];
}
?>
<html>
    <head>
        <title>AdminPanel</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body class="admin" onload="adminViewer()">
        <nav>
            <?php echo "<a href=\"index.php?role=$selection&displayName=$displayName\" class=\"text\">Home</a>" ?>
            <a href="login.php" class="text">LogOut</a>
            <?php echo "<a href=\"index.php?role=$selection&displayName=$displayName\"><img class=\"logo\" src=\"logo.png\" width=\"200px\"></a>" ?>
        </nav>

        <header><img src="admin.png" width="200px">ADMIN PANEL</header></br>
        <div class="buttonContainer">
            <div class="buttons">
                <a href="#addSupplier" onclick="addSupplier()" class="manageButton" id="AS">Add Supplier</a>
                <a href="#removeSupplier" onclick="removeSupplier()" class="manageButton" id="RS">Remove Supplier</a>
                <a href="#" onclick="updateSupplier()" class="manageButton" id="USI">Update Supplier Info</a>
                <a href="#" onclick="viewSupplier()" class="manageButton" id="VS">View Suppliers</a>
                <a href="#" onclick="viewCustomer()" class="manageButton" id="VC">View Customers</a>
            </div>
        </div>
        <div class="formContainer">
            <div class="removeSupplier" id="removeSupplier">
                <form method="get" action="remSub.php">
                    <div class="formHead">
                        Remove a Supplier
                    </div>
                    <div class="formItem">
                        <div class="formGrid">
                        <input value="<?php echo $selection?>" name="role" style="display: none"></label>
                        <input value="<?php echo $displayName?>" name="displayName" style="display: none"></label>
                        <label>User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="username" placeholder="Enter the supplier's unique username" style="width: 70%; color: rgb(121, 173, 61);font-size: 15px"></br>
                        <?php if(isset($_REQUEST["err"]))
                        if ($_REQUEST["err"] == '2')
                            echo "<message style=\"font-size: 12px; text-align: left\">*username not exists!</message>";?>
                        </div>
                        <input type="submit" name="submit" id="sub" value="Remove from System" style="width: 300px; height: 50px">
                    </div>
                </form>
            </div>
            <div class="addSupplier" id="addSupplier">
                <form method="post" action="addSub.php" enctype="multipart/form-data">
                    <div class="formHead">
                        Add a Supplier
                    </div>
                    <div class="formItem">
                        <div class="formGrid">
                        <input value="<?php echo $selection?>" name="role" style="display: none"></label>
                        <input value="<?php echo $displayName?>" name="displayName" style="display: none"></label>
                        <label>User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="username" placeholder="Enter the supplier's unique username" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                        <?php if(isset($_REQUEST["err"]))
                            if ($_REQUEST["err"] == '1')
                                echo "<div></div><message style=\"font-size: 12px; text-align: left\">*The username you entered was already taken, please try different one!</message>";?>
                        <label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" name="password" placeholder="Enter the supplier's Password" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                        <label>Display Name&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="display" placeholder="Enter the supplier's Display Name" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                        <label>Profile Picture&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label class="custom-file-upload" style="width: 90%; margin-left: 0;text-align: center"><input type="file" name="fileToUpload[]" id="fileToUpload" multiple/>Custom Upload</label>
                        </div>
                        <input type="submit" name="submit" id="sub" value="Add to System" style="width: 300px; height: 50px">
                    </div>
                </form>
            </div>
            <div class="updateSupplier" id="updateSupplier">
                <form method="get" action="upSub.php">
                    Update Supplier
                </form>
            </div>
            <div class="viewSupplier" id="viewSupplier">
                <form method="get" action="viewSub.php">
                    View Supplier
                </form>
            </div>
            <div class="viewCustomer" id="viewCustomer">
                <form method="get" action="viewCus.php">
                    View Customer
                </form>
            </div>
            <div class="showMessage" id="showMessage">
                <?php if(isset($_REQUEST["message"]))echo $_REQUEST["message"]?>
            </div>
        </div>
        <?php include 'footer.php'?>
    </body>
    <script>
        var view="<?php if(isset($_REQUEST["err"]))echo $_REQUEST["err"]; else echo null?>";
    </script>
</html>