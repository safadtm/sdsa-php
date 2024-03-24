<html>
    <?php
    require('db.php');
    $edit_id=$_GET['id'];
    $sql = "SELECT * FROM register where id='".$edit_id."'";
    if($result=mysqli_query($conn,$sql)){
     if(mysqli_num_rows($result)>0){
       
        while($row=mysqli_fetch_array($result)){
            echo "<table border=1>";
            echo "<tr><td>Name</td>";
			echo "<td>".$row['name']."</td><tr>";
            echo "<tr><td>Address</td>";
			echo "<td>".$row['address']."</td><tr>";
            echo "<tr><td>Password</td>";
			echo "<td>".$row['password']."</td><tr>";
            echo "<tr><td>Phone</td>";
			echo "<td>".$row['phone']."</td><tr>";
           
            echo "<tr><td></td>";
            echo "<td><a href='update.php?id=".$row['id']."'>Update</a></td></tr>";
            echo "</table>";
        }
     }else{
        echo "No matching records are found.";
     }
    }else{
        echo "ERROR: Could not able to execute $sql. "
        .mysqli_error($conn);

    }
    ?>
</html>