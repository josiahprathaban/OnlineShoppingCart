<?php
if(isset($_REQUEST["role"])) {
    if ($_REQUEST["role"] == '1')
        $selection = $_REQUEST["role"];
    $displayName = $_REQUEST["displayName"];
}
include "db.php";
$uname=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$dis=$_REQUEST['display'];
$prof=$_REQUEST['profile'];

include "fileupload.php";
$targetfile=uploadFile("images/");


$sql="Select * from user where username =:un";
$stmt=$conn->prepare($sql);

$stmt->bindParam(':un',$uname);
$stmt->execute();

if($stmt->rowCount()==1)
    header("location:adminPanel.php?role=$selection&displayName=$displayName&err=1");
else
{
    $sql="insert into user values(:un,:pw,:dn,2,:pr)";
    $stmt=$conn->prepare($sql);

    $stmt->bindParam(':un',$uname);
    $stmt->bindParam(':pw',$pass);
    $stmt->bindParam(':dn',$dis);
    $stmt->bindParam(':pr',$targetfile);
    $stmt->execute();
    header("location:adminPanel.php?role=$selection&displayName=$displayName&err=0&message=Sucessfully add a new Supplier!");
}
