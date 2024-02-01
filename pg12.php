<html>

<body>
    <?php
    $arr = array(1, 4, 3, 2, 6);
    echo "<h2>Array Sorting Function</h2>";
    echo "Before Sorting :";
    print_r($arr);
    // array sorting

    sort($arr);
    echo "<br>After sorting ";
    print_r($arr);

    // array splitting
    echo "<h2>Array Splitting Function</h2>";
    $split_arrray = array('a', 'b', 'c', 'd', 'e');
    print_r(array_chunk($split_arrray, 3));

    // array combining
    echo '<h2>Array Combining Function</h2>';
    $array1 = array("Ram", "Akash", "Rishav");
    $array2 = array("24", "30", "45");

    print_r(array_combine($array1, $array2));

    // array count
    echo "<h2>Array Count Function</h2>";
    $count_array = array("SAFAD","ANSAF","SAFAD","A","D");
    print_r(array_count_values($count_array));
   
   // array Flip
   echo "<h2>Array Flipping Function</h2>";
   $flip_array =  array("aakash" => "rani", "rishav" => "sristi",
   "gaurav" => "riya", "laxman" => "rani");
   echo "Before Array Flipping";
   print_r($flip_array);
   echo "<br>After Array Flipping";
   print_r(array_flip($flip_array));
   ?>
</body>

</html>
