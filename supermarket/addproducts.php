<!-- Admin Registration -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <center>
        <h1>Add Product</h1>
        <form action="" method="post">
            <label for="name">Name : <input type="text" name="name" id="name"> </label><br><br>
            <label for="price">Price : <input type="text" name="price" id="price"> </label><br><br>
            <label for="stock_quantity">Stock Quantity : <input type="text" name="stock_quantity" id="stock_quantity"> </label><br><br>

            <input type="submit" value="Add">

        </form>

    </center>
</body>

</html>
<?php
require ('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];

    $sql = "INSERT INTO products (name,price,stock_quantity) VALUES ('$name','$price','$stock_quantity')";

    if(mysqli_query($conn,$sql)){
         header("Location: allproducts.php");
    }
}
?>