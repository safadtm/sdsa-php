
<?php
$conn = mysqli_connect("localhost", "root", "", "Employee");
if (mysqli_connect_errno()) {
    echo "Failed to connect MySql:" . mysqli_connect_error();
}
?>
