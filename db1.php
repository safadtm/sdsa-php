
<?php
$host = "localhost";
$user = "root";
$pass = '';  
$database = "db1";

$connection = mysqli_connect($host, $user, $pass, $database);

if ($connection) {
    echo "Successfully Connected";
} else {
    die("Could not connect: " . mysqli_connect_error());
}

mysqli_close($connection);
?>
