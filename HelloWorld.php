<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.11.18 

        HelloWorld.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
        $worldVar = "World";
        $sunVar = "Sun";
        $moonVar = "Moon";
        define("WORLD_INFO", 92897000);
        define("SUN_INFO", 72000000);
        define("MOON_INFO", 3456);

        echo "<p>Hello $worldVar!<br>";
        echo "The $worldVar is ", number_format(WORLD_INFO, 0), " miles from the $sunVar. <br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temperature is approximately ", number_format(SUN_INFO, 2), " degrees Fahrenheit.<br>";
        echo "Hello", $moonVar, "!<br>";
        echo "The $moonVar is ",number_format(MOON_INFO, 0), " miles in diameter.</p>";
    ?>
</body>
</html>