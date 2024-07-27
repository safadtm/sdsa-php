<!-- Admin Home -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <style>
        hr.custom-divider {
            border: none;
            height: 2px;
            background-color: #000;
            width: 50%;
            margin: 20px auto; /* Center the divider */
        }
    </style>
</head>

<body>
    <center>
        <h2 >Hey Admin
            <?php
            session_start();
            echo $_SESSION['username'];
                ?>
        </h2>
        <hr class="custom-divider">
        

        <br><br>
        <a href="allproducts.php">All Products</a><br><br>
        <a href="addproducts.php">Add Product</a><br><br>
        <a href="logout.php">Logout</a>
    </center>
</body>

</html>