<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.13.18 

        Concerts.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Passing Parameters </h2>
    <?php
        function incrementByValue($countByValue) {
            ++$countByValue;
            echo "<p> incrementByValue() value is $countByValue</p>";
        }
        function incrementByReference(&$countByReference) {
            ++$countByReference;
            echo "<p> incrementByValue() value is $countByReference</p>";
        }

    // main program
    $count = 1;
    echo "<p>Main Program starting value is $count</p>";
    incrementByValue($count);
    echo "<p>Main Program after incrementByValue() is $count</p>";

    $count = 1;
    echo "<p>Main Program starting value is $count</p>";
    incrementByReference($count);
    echo "<p>Main Program after incrementByReference() is $count</p>";
    ?>

<h2>Default Arguments</h2>
    <?php 
        function paint($room = "office", $color = "red") {
            return "<p>The color of the $room is {$color}</p>";
        }

        echo paint();
        echo paint("bedroom", "blue");
        echo paint("bedroom", null);
        echo paint("bedroom");
        echo paint("blue");
    ?>
</body>
</html>