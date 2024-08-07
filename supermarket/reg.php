<!-- Admin Registration -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
</head>

<body>
    <center>
        <h1>Admin Registration</h1>
        <form action="" method="post">
            <label for="username">Username : <input type="text" name="username" id="username"> </label><br><br>
            <label for="password">Password : <input type="text" name="password" id="password"> </label><br><br>

            <input type="submit" value="Register">

        </form>
        <a href="login.php">Already an user ? Login</a>
    </center>
</body>

</html>
<?php
require ('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admins (username,password) VALUES ('$username','$password')";

    if(mysqli_query($conn,$sql)){
         header("Location: login.php");
    }
}
?>