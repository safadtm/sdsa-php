<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Array</title>
</head>
<body>
    <?php
    $cars = array("Volvo","BMW","Toyota");

   print_r($cars);
   echo"<br>";
   var_dump($cars);
   echo "<br>";

   $a = array(
    "Peter"=> "35",
    "Ben"=> "37",
    "Joe"=> "43"
   );
   print_r($a);
    ?>
</body>
</html>
