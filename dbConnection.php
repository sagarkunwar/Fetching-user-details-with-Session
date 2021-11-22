<?php

$con= mysqli_connect('localhost','root','','phpproject01');
 if($con){

    echo "successfully connected to database";
 }else{

    echo(mysqli_error($con));
 }

?>