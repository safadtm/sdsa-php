<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rverse of a number</title>
</head>
<body>
    <?php
    $num=23456;
    $temp=$num;
    $revnum=0;

    while($num > 1){
    $rem = $num % 10;
    $revnum = ($revnum*10) + $rem;
    $num = ($num/10);
    }

    echo "Reverse number of $temp is : $revnum";
    ?>
</body>
</html>
