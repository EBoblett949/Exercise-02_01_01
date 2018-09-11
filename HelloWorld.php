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
        $worldInfo = 92897000;
        $sunInfo = 72000000;
        $moonInfo = 3456;

        echo "<p>Hello $worldVar!<br>";
        echo "The $worldVar is $worldInfo miles from the $sunVar. <br>"
    ?>
</body>
</html>