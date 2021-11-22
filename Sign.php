<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up </title>
</head>
<body>
    <h1>Please Sign Up from here</h1>
     <?php
        if (isset($_GET['error'])){
            echo $_GET['error'];
        }

     ?>
    <form action="SignUp.php" method="post" >
        

    <input type="text" name= "name" placeholder="Enter your fullname"> <br> <br>
    <input type="text" name= "email" placeholder="Enter your Email"> <br> <br>

        <input type="text" name= "uid" placeholder="Enter your username"> <br> <br>
        <input type="password" name="pwd" placeholder="Enter your password"><br> <br>
        <input type="password" name="repwd" placeholder="Enter your password again"><br> <br>
        <button type="submit" name="submit"> Sign Up</button><br> <br>
        <a href="login.php"> Already have an account ? </a>
    </form>
</body>
</html>