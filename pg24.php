<html>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
        <title>Login</title>
    </head>

    <body>
        <main>
            <form action="" method="post">
                <h1>Login</h1>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>

                <button type="submit">Login</button>
                <!-- Display the error message -->
                <div style="color: red;">
                    <?php
                    if (isset($error_message)) {
                        echo $error_message;
                    }
                    ?>
                </div>
                <a href="pg22.php" target="_blank">Register</a>
            </form>
        </main>
    </body>

    </html>


    <?php
    require('db.php');
    session_start();

    if (isset($_POST['name'])) {

        $name = $_POST['name'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `register` WHERE name='$name' and password='$password'";

        $result = mysqli_query($conn, $query) or die(mysqli_connect_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['name'] = $name;
            header("Location: table.php");
        } else {
            $error_message = "Username or password is incorrect.";
        }
    }

    ?>
</body>

</html>
