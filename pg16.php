<html>

<body>
    <?php
    $student = array("Menon", "Ram", "Ravin", "Rishi");
    echo str_ireplace(array("\n", " "), array("<br>", " "), print_r($student, true));

    ?>

</body>

</html>
