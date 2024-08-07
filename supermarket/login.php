<!-- Admin Login -->
 <!-- Admin Registration -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>

<body>
    <center>
        <h1>Admin Login</h1>
        <form action="" method="post">
            <label for="username">Username : <input type="text" name="username" id="username"> </label><br><br>
            <label for="password">Password : <input type="text" name="password" id="password"> </label><br><br>

            <input type="submit" value="Login">

        </form>

    </center>
</body>

</html>
<?php
require ('db.php');
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
           
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$username;
         header("Location: home.php");
    }else{
        echo "No User";
    }
}
?>