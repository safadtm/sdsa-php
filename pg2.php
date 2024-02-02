<!DOCTYPE html>
<html>
<head>
    <title>Circle Properties Calculator</title>
</head>
<body>
    <h2>Circle Properties Calculator</h2>
    <form method="post">
        Enter the radius of the circle: <input type="number" name="radius">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];
        $area = number_format(M_PI * $radius * $radius, 2);
        $circumference = number_format(2 * M_PI * $radius, 2);
        $diameter = number_format(2 * $radius, 2);

        echo "<h3>Results:</h3>";
        echo "Radius of the circle: $radius <br>";
        echo "Area of the circle: $area <br>";
        echo "Circumference of the circle: $circumference <br>";
        echo "Diameter of the circle: $diameter <br>";
    }
    ?>
</body>
</html>
