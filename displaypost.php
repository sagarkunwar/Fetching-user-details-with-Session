<?php
include 'dbConnection.php';
session_start();

echo "Welcome"." ". $_SESSION["user"];

$user= $_SESSION["user"];
$sql = "select * from `users` where userName ='$user'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$id= $row['userID'];

$sql1= "select * from `post` where user_id='$id'";
$result1 = mysqli_query($con, $sql1);


while ($row1 = mysqli_fetch_assoc($result1)){
  $title = $row1['title'];
  $location= $row1['location'];
  $details = $row1['details'];
 echo'
  <table>
  <tr>
    <th scope ="row">'.$id.'</th>
    <td>'.$title.'</td>
    <td>'.$location.'</td> 
    <td>'.$details.'</td> 
    </tr>
  </table>';

}



?>