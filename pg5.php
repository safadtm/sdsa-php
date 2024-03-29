<html>

<body>
    <?php
    function calculateTriangle($base, $height)
    {
        $area = 0.5 * $base * $height;
        $c = sqrt($base * $base + $height * $height); // length of the third side / Hypotenuse
        $perimeter = $base + $height + $c; 
        return array('area' => $area, 'perimeter' => number_format($perimeter,2));
    }

    function calculateRectangle($length, $width)
    {
        $area = $length * $width;
        $perimeter = 2 * ($length + $width);
        return array('area' => $area, 'perimeter' => $perimeter);
    }

    function calculateSquare($side)
    {
        $area = $side * $side;
        $perimeter = 4 * $side;
        return array('area' => $area, 'perimeter' => $perimeter);
    }

    function calculateParallelogram($base, $height)
    {
        $area = $base * $height;
        $perimeter = 2 * ($base + $height);
        return array('area' => $area, 'perimeter' => $perimeter);
    }

    $triangle = calculateTriangle(5, 8);
    $rectangle = calculateRectangle(6, 10);
    $square = calculateSquare(7);
    $parallelogram = calculateParallelogram(5, 9);

    echo "Triangle - Area: " . $triangle['area'] . ", Perimeter: " . $triangle['perimeter'] . "<br>";
    echo "Rectangle - Area: " . $rectangle['area'] . ", Perimeter: " . $rectangle['perimeter'] . "<br>";
    echo "Square - Area: " . $square['area'] . ", Perimeter: " . $square['perimeter'] . "<br>";
    echo "Parallelogram - Area: " . $parallelogram['area'] . ", Perimeter: " . $parallelogram['perimeter'] . "<br>";
    ?>
</body>

</html>
