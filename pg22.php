<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
        <title>Register</title>
    </head>

    <body>
        <main>
            <form action="" method="post">
                <h1>Register</h1>
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <label for="address">Address:</label>
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone" id="phone">
                </div>

                <button type="submit">Register</button>
                <a href="pg24.php" target="_blank">Login</a>
            </form>
        </main>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "Employee");
        if (mysqli_connect_errno()) {
            echo "Failed to connect MySql:" . mysqli_connect_error();
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];

            // data insertion
            $sql = "INSERT INTO register (name,password,address,phone) VALUES ('$name','$password', '$address', '$phone')";

            if ($conn->query($sql) === TRUE) {
                // User registered successfully
                header("Location: pg24.php"); // Redirect to another page
                exit; // Important: Stop executing further code

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $conn->close();
        ?>
    </body>

    </html>
