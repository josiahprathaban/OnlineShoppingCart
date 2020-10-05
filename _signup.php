<?php
    include "db.php";
    $uname=$_REQUEST['username'];
    $pass=$_REQUEST['password'];
    $repass=$_REQUEST['confirmPassword'];
    $dis=$_REQUEST['dis'];
    if($uname!=""&&$pass!=""&&$repass!=""&&$dis!="") {
        $sql = "Select * from user where username =:un";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':un', $uname);
        $stmt->execute();

        if ($stmt->rowCount() == 0) {
            if ($repass != $pass)
                header("location:signup.php?er=2");
            else {
                $sql = "insert into user values(:un,:pw,:dn,3,:pr)";
                $stmt = $conn->prepare($sql);
                $pr="";
                $stmt->bindParam(':un', $uname);
                $stmt->bindParam(':pw', $pass);
                $stmt->bindParam(':dn', $dis);
                $stmt->bindParam(':pr', $pr);
                $stmt->execute();
                header("location:index.php?role=3&displayName=$dis&err=0");
            }
        } else {
            header("location:signup.php?er=1");

        }
    }
    else
        header("location:signup.php?er=3");
