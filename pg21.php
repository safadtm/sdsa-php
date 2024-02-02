<html>
    <body>
        <h2>String functions</h2>
        <br>
        <!-- String length -->
        <!-- Reverse of a string -->
        <!-- Words count -->
        <?php
        echo "<h2>String Length</h2><br>";
        $str_len = "Hello world!";
        echo "$str_len<br>";
        echo strlen($str_len);
        echo "<h2>String Reverse</h2><br>";
        $str_rev = "Hello world!";
        echo "$str_rev<br>";
        echo strrev($str_rev);
        echo "<h2>Word Count</h2><br>";
        $str_count = "Hello world!";
        echo "$str_count<br>";
        echo str_word_count($str_count);
        ?>
    </body>
</html>
