<html>
<?php
require('db.php');
if(isset($_GET['id'])){
  $delete_id=$_GET['id'];
  $sql="delete from register where id='$delete_id'";
  if(mysqli_query($conn,$sql)){
    header("Location: viewall.php");
    echo"Record was delete successfully.";
    echo"<a href ='home.php'>Home</a>";

  }else{
    echo"ERROR:Could not able to execute $sql.".mysqli_error($conn);
}
}
?>

</html>