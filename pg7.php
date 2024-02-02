<html>

<body>
    <?php
    $num = 123;
    $temp = $num;
    $sum = 0;

    while ($num != 0) {
        $sum += $num % 10;
        $num = $num / 10;
    }

    echo "Sum of the digits of the number $temp = $sum";
    ?>
</body>

</html>
