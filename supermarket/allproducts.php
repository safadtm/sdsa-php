<!-- Admin Registration -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product</title>
</head>

<body>
    <center>
        <h1>All Product</h1>
        <?php
          require('db.php');

          $sql = "SELECT * FROM products";
          if($result=mysqli_query($conn,$sql)){
                 if(mysqli_num_rows($result)>0){
                    
                    echo "<table border=2>";
                    echo "<tr>";
                    echo "<th>SI.NO</th>";
                    echo "<th>Product Name</th>";
                    echo "<th>Price</th>";
                    echo "<th>Stock Quantity</th>";
                    echo "</tr>";

                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['price']."</td>";
                    echo "<td>".$row['stock_quantity']."</td>";
                    echo "</tr>";
                    }

                    echo "</table>";

                 }else{
                    echo "No products";
                 }
          }

        ?>
       <a href="home.php">Home</a>
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