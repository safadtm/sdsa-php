<html>

<body>
    <h2>Leap year or not using POST METHOD</h2>
    <form action="" method="POST">
        <input type="text" name="year" id="year"><br><br>
        <input type="submit" value="submit">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['year'];
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "$year is an leap year";
        } else {
            echo "$year is not an leap year";
        }
    }
    ?>
</body>

</html>
