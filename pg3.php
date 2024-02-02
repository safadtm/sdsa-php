<!DOCTYPE html>
<html>

<head>
    <title>Greeting Display</title>
</head>

<body>
    <?php

    $hour = date('H');

    if ($hour >= 20) {
        $greetings = "Good Night";
    } else if ($hour > 17) {
        $greetings = "Good Evening";
    } else if ($hour > 11) {
        $greetings = "Good Afternoon";
    } else if ($hour < 12) {
        $greetings = "Good Morning";
    }
    echo $greetings;
    ?>
</body>

</html>
