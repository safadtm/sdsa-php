<html>

<body>
    <h2>Two-Dimensional Array</h2>
    <?php
    $data = array(
        array("Name", "Age", "Gender"),
        array("Alice", 25, "F"),
        array("Bob", 32, "M"),
        array("Charlie", 28, "M")
    );

    // display the array elements in a table format
    echo "<table border='1'>";
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>
