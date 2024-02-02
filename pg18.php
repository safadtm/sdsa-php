<html>
    <body>
        <h2>Array of books using foreach() inTwo-Dimensional Array</h2>
    <?php
    $books = array(
        array("Book Name","Author","Genre"),
        array("The Hitchhiker's Guide to the Galaxy", "Douglas Adams", "Science Fiction"),
        array("The Lord of the Rings", "J.R.R. Tolkien", "Fantasy"),
        array("Nineteen Eighty-Four", "George Orwell", "Dystopian")
      );

       // display the array elements in a table format
    echo "<table border='2'>";
    foreach ($books as $row) {
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
