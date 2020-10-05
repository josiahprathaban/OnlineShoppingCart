<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=OnlineShopping", "root", "");
}
catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
}
