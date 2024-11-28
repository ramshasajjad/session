<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to page 3</h1>
    <?php
session_start();
if(isset($_SESSION['username'])){
    if((time()-$_SESSION['last_time'])>60){
   header("location:page1.php");
}
 echo "welcome to page 2:". $_SESSION['username'];
}else{
    header('location:page1.php');
}
?>
<br>
<a href="logout.php">logout</a>
    
    ?>
</body>
</html>