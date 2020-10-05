<?php
    include "db.php";
    $uname=$_REQUEST['username'];
    $pass=$_REQUEST['password'];
    $sql="Select * from user where username =:un and password=:pw";
    $stmt=$conn->prepare($sql);

    $stmt->bindParam(':un',$uname);
    $stmt->bindParam(':pw',$pass);
    $stmt->execute();

    if($stmt->rowCount()==1)
    {
        $result=$stmt->fetch();
        $role=$result[3];
        $profile=$result[4];
        $displayName=$result[2];
        header("location:index.php?role=$role&displayName=$displayName&profile=$profile");
    }
    else
        header("location:login.php?er=1");