<html>

<body>
    <?php
    $student = array("Irfan", "Ansaf", "Anzil", "Rishan");
    echo str_ireplace(array("\n", " "), array("<br>", " "), print_r($student, true));

    ?>

</body>

</html>
