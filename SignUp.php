<?php

include 'dbConnection.php';
if(isset($_POST['submit'])){
    
    $name= $_POST['name'];
    $email= $_POST['email'];
    $uid= $_POST['uid'];
    $pwd= md5($_POST['pwd']);
    $repwd= md5($_POST['repwd']);

        $sql = "INSERT INTO `users` (`userName`, `userEmail`, `usersUid`, `usersPwd`) VALUES ('$name', '$email', '$uid', '$pwd')";
        $result= mysqli_query($con, $sql);

        if ($result) {
           header('location:login.php');
        }    
}else{

    echo "sucessfully inserted";
}

?>