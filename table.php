<?php
if(isset($_GET['success']) && $_GET['success']==1)
{
    echo "updated successfully ..<a href='login.php'>home</a>";
}
require('db.php');

$sql ="SELECT * FROM register";
if($res = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($res)>0){
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>name</th>";
        echo "<th>address</th>";
        echo "<th>password</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td><a href='edit.php?did".$row['id']."
            '>edit</a></td>";
            echo"<td><a href='delete.php?did=".$row['id']."
            '>delete</a></td>";
            echo"</tr>";
        }
        echo"</table>";
    }
    else{
        echo "no matching records are found.";
    }
}
else{
    echo" ERROR could not able to execute $sql."
    .mysqli_error($con);
}