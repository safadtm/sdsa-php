<?php
require ('db.php');
$edit_id = $_GET['id'];
$sql = "SELECT * FROM register where id='$edit_id'";

$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);

if (isset ($_POST['update'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    $editsql="update register set name='$name',address='$address',password='$password',phone='$phone' where id='$edit_id' ";
    $edit = mysqli_query($conn,$editsql); // data already edited


    $query = mysqli_query($conn, $sql); // retirving the tabe data
    $data = mysqli_fetch_array($query);
    echo "Updates Successfully";

    header('Location: viewall.php');
}
?>

<html>

<body>
    <h3>Update Data</h3>

    <form method="POST">
        <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter First Name" Required>

        <input type="text" name="address" value="<?php echo $data['address'] ?>" placeholder="Address" Required>

        <input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="Password" Required>

        <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Phone" Required>

        <input type="hidden" name="edit_id" value="<?php echo $data['id'] ?>">
        <input type="submit" name="update" value="Update">
    </form>

</body>

</html>