<?php
$conn = mysqli_connect("localhost:4306","root","","supermarket");

if(mysqli_connect_errno()){
   echo "Database Connection issue" . mysqli_connect_error();
}

?>