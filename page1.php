<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label> username</label>
        <input type="text" name="username"><br><br>
        <label> password</label>
        <input type="text" name="password"><br><br>
        <input type="submit" value="login" name="loginBtn">
<?php
session_start();
if(isset($_REQUEST['loginBtn'])){
    if($_REQUEST['username']=="ramsha" && $_REQUEST['password']=="ramsha@123" ){
        $_SESSION['username']=$_REQUEST['username'];
        $_SESSION['last_time']=time();
        header("location:page2.php");
    }
    else{
        header("location:page1.php");
    }
    }








?>





</body>
</html>