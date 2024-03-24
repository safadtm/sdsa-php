<html>
    <head><title>welcome home</title></head>
<body><div class="form">
    <p>welcome </p>
        <?php
        session_start();
 echo $_SESSION['username']; 
 ?>
        <br>
        <a href="viewall.php">view </a>
        <br>
        <a href="logout.php">logout</a>
        

</div></body>
    </html>
