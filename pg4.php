<html>

<body>
    <?php
    function generateFibonacci($n)
    {
        $fibonacci = array(0, 1);

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        // 2-1 + 2-2 = 1 (0,1,1)
        // 3-1 ,2 = 1 + 3-2 ,1= 1 = 1 ,  (0,1,1,2)
        //  5-1 = 4 + 5- 2 = 3 , (0,1,1,2,3)
        return $fibonacci;
    }

    $n = 10;
    $fibonacciSequence = generateFibonacci($n);


    echo "The first $n numbers in the Fibonacci sequence are: ";
    echo implode(", ", $fibonacciSequence);
    ?>
</body>

</html>
