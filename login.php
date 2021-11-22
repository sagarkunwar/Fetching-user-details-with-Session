<?php
 session_start();
 include 'dbconnection.php';

 if(isset($_POST['submit'])){
    
    $name= $_POST['uid'];
    $pwd= md5($_POST['pwd']);

    $sql= "Select * From `users` Where `userName`='$name' AND `usersPwd`='$pwd'";
    $result= mysqli_query($con, $sql);

    if(mysqli_num_rows($result)==1){
      $_SESSION["user"]=$name;
      header('location:welcome.php');

      
    }
    else{
      echo "You dont have such id please kindly Signup ";
    }

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
 <h1> Please kindly login from here</h1>
    <form action="login.php" method="post" >
       <input type="text" name="uid" placeholder="Enter your username"> <br> <br>
       <input type="password" name="pwd" placeholder="Enter your password"><br> <br>
       <button type="submit" name="submit"><a href="">LOGIN</a></button> 
      <button><a href="Sign.php">signUp</a></button>
    </form>

    
</body>
</html>