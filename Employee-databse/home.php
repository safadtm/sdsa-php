<!DOCTYPE html>
<html>

<head>
    <title>Welcome Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .form {
            width: 300px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 18px;
            color: #333;
        }

        .viewall {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #8A2BE2; 
        }

        .viewall:hover {
            color: #9932CC;
        }

        .logout {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #f44336; 
        }

        .logout:hover {
            color: #d32f2f;
        }
    </style>
</head>

<body>
    <div class="form">
        <p>Welcome</p>
        <?php
        session_start();
        echo $_SESSION['name'];
        ?>
        <br>
        <a class="viewall" href="viewall.php">View All</a>
        <br>
        <a class="logout" href="logout.php">Logout</a>
    </div>
</body>

</html>