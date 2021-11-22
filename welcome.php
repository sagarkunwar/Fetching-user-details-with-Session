<?php
include 'dbConnection.php';
 
 session_start();
 echo "Welcome !!! "." ".$_SESSION['user'];
 echo " ","(You can post from here)";


 $user= $_SESSION["user"];
 $sql = "select * from `users` where userName ='$user'";
 $result = mysqli_query($con, $sql);
 $row = mysqli_fetch_assoc($result);
 $id= $row['userID'];
 echo $id;


 if (isset($_POST['submit'])) {

    $title = $_POST['Title'];
    $location = $_POST['Location'];
    $details = $_POST['Details'];


    $sql = "INSERT INTO `post`(`title`, `location`, `details`, `user_id`) VALUES ('$title','$location','$details','$id') ";
    echo $sql;
    $result=mysqli_query($con, $sql);

    if($result){
        echo "successfully inserted";
    }
    else{
        die (mysqli_error($result));
    }
}

?>
<br>
<a href="logout.php">logout</a>

<br>
<br>

<form action="welcome.php" method="post" >

 <input type="text" name="Title" placeholder='Title' >
 <br><br>
 <input type="text" name="Location" placeholder='Location' >
 <br><br>
 <input type="text" name="Details" placeholder='Details'>
 <br><br>
 <button type="submit" name="submit"><a href="welcome.php">submit</a></button>
 <button ><a href="displaypost.php">Signup</a></button>

</form>