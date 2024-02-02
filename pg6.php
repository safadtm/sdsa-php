<html>

<body>
  <?php
  $num1 = 450;
  $num2 = 80;
  $num3 = 40;

  if ($num1 > $num2 && $num1 > $num3) {
    echo "Largest among the $num1,$num2 and $num3 is $num1 ";
  } else if ($num2 > $num1 && $num2 > $num3) {
    echo "Largest among the $num1,$num2 and $num3 is $num2 ";
  } else {
    echo "Largest among the $num1,$num2 and $num3 is $num3 ";
  }

  ?>

</body>

</html>
