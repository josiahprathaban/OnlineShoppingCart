<?php
if(isset($_REQUEST["role"])) {
    if ($_REQUEST["role"] == '2')
        $selection = $_REQUEST["role"];
    $displayName = $_REQUEST["displayName"];
}
?>
<html>
<head>
    <title>SupplierMenu</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
</head>
<body class="supplier" onload="suppViewer()">
<nav>
    <?php echo "<a href=\"index.php?role=$selection&displayName=$displayName\" class=\"text\">Home</a>" ?>
    <a href="login.php" class="text">LogOut</a>
    <?php echo "<a href=\"index.php?role=$selection&displayName=$displayName\"><img class=\"logo\" src=\"logo.png\" width=\"200px\"></a>" ?>
</nav>

<header style="color: rgb(121, 173, 61);"><img src="supplier.png" width="200px">SUPPLIER MENU</header></br>
<div class="buttonContainer">
    <div class="buttons">
        <a href="#addItem" onclick="addItems()" class="subButton" id="AI">Add Items</a>
        <a href="#removeItem" onclick="removeItems()" class="subButton" id="RI">Remove Items</a>
        <a href="#" onclick="updateItems()" class="subButton" id="UII">Update Items Info</a>
        <a href="#" onclick="viewItems()" class="subButton" id="VI">View Items</a>
    </div>
</div>
<div class="formContainer">
    <div class="removeItem" id="removeItem">
        <form method="get" action="remItem.php">
            <div class="formHead">
                Remove a Product
            </div>
            <div class="formItem">
                <div class="formGrid">
                <input value="<?php echo $selection?>" name="role" style="display: none"></label>
                <input value="<?php echo $displayName?>" name="displayName" style="display: none"></label>
                <label>User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="itemname" placeholder="Enter the product's unique name" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                <?php if(isset($_REQUEST["err"]))
                    if ($_REQUEST["err"] == '2')
                        echo "<message style=\"font-size: 12px\">*product not exists!</message>";?>
                </div>
            <input type="submit" name="submit" id="sub" value="Remove from System" style="width: 300px; height: 50px">
            </div>
        </form>
    </div>
    <div class="addItem" id="addItem">
        <form method="post" action="addItem.php" enctype="multipart/form-data">
            <div class="formHead">
                Add a new Product
            </div>
            <div class="formItem">
                <div class="formGrid">
                <input value="<?php echo $selection?>" name="role" style="display: none"></label>
                <input value="<?php echo $displayName?>" name="displayName" style="display: none"></label>
                <label>Product Id</label>
                <input type="text" name="productName" placeholder="Enter the Product's Name" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                <label>Unit Price</label>
                <input type="text" name="price" placeholder="Enter the Unit price of the Product" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                <label>Quantity</label>
                <input type="text" name="qty" placeholder="Enter the Quantity of the Product" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                <label>Warranty</label>
                <input type="text" name="war" placeholder="Enter the warranty period of the Product" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                <label>Key words</label>
                <input type="text" name="key" placeholder="Enter the key words separate by (,)" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px">
                <label>Description</label>
                <textarea name="des" placeholder="Small description about the product" style="width: 90%; color: rgb(121, 173, 61);font-size: 15px"></textarea>
                <label>Picture of your Product&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <label class="custom-file-upload" style="width: 90%; margin-left: 0%; text-align: center"><input type="file" name="fileToUpload[]" id="fileToUpload" multiple/>Custom Upload</label>
            </div>
            <input type="submit" name="submit" id="sub" value="Add to System" style="width: 300px; height: 50px">
            </div>
        </form>
    </div>
    <div class="updateItem" id="updateItem">
        <form method="get" action="upItem.php">
            Update Item
        </form>
    </div>
    <div class="viewItem" id="viewItem">
        <form method="get" action="viewSub.php">
            View Supplier
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