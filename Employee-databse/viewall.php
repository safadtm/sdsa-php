<!DOCTYPE html>
<html>

<head>
    <title>View All</title>
</head>
<?php
if (isset ($_GET['success']) && $_GET['success'] == 1) {
    echo "updated successfully ..<a href='home.php'>home</a>";
}
require ('db.php');
$sql="SELECT * FROM register";
if($result=mysqli_query($conn,$sql)){
   if(mysqli_num_rows($result)>0){
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>SI.NO</th>";
    echo "<th>Name</th>";
    echo "<th>Address</th>";
    echo "<th>Password</th>";
    echo "<th>Phone</th>";
    echo "</tr>";
    while ($row=mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td><a href='edit.php?id=".$row["id"]."'>edit</a></td>";
        echo "<td><a href='delete.php?id=".$row["id"]."'>delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
   }else{
    echo "no matching records are found.";
   }
}else{
    echo "ERROR could not able to execute $sql.".mysqli_error($conn);
}
?>

</html>