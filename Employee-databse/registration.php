<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
    <h2>Registration</h2>
    <form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" required><br>

        <input type="submit" value="Register">
    </form>
</body>

</html>
<?php
require ('db.php');

if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // data insertion
    $sql = "INSERT INTO register (name,password,address,phone) VALUES ('$name','$password','$address','$phone')";

    if ($conn->query($sql) == TRUE) {
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

$conn->close();
?>