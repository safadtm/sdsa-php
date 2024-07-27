<?php
$conn=mysqli_connect("localhost:4306","root","","employee");

if(mysqli_connect_errno()){
   echo "Failed to connect MySql : ". mysqli_connect_error() ;
}

?>