<?php
if(isset($_REQUEST["role"])) {
    if ($_REQUEST["role"] == '1')
        $selection = $_REQUEST["role"];
    $displayName = $_REQUEST["displayName"];
}
include "db.php";
$uname=$_REQUEST['username'];

$sql="Select * from user where username =:un and role=2";
$stmt=$conn->prepare($sql);

$stmt->bindParam(':un',$uname);
$stmt->execute();

if($stmt->rowCount()==1)
{
    $sql="DELETE FROM user WHERE username=:un;";
    $stmt=$conn->prepare($sql);

    $stmt->bindParam(':un',$uname);
    $stmt->execute();
    header("location:adminPanel.php?role=$selection&displayName=$displayName&err=0&message=Sucessfully delete the Supplier!");
}
else
{
    header("location:adminPanel.php?role=$selection&displayName=$displayName&err=2");
}