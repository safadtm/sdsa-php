<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>
<?php
require ('db.php');
session_start();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE name='$name' AND password='$password'";

    $result = mysqli_query($conn, $query) or die (mysqli_connect_error());
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
         $_SESSION['name']=$name;
         header("Location: home.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;

    }
}

$conn->close();

?>