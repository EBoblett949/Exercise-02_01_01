<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.18.18 

        TempConversion.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temp Conversion</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Temp Conversion</h2>
    <?php
    // these are the variables for fahrenheit and celsius
        $temp = 0;
        $celc = 0;

        // This loops through 100 times and it calculates the temperature in celsius and then prints both fahrenheit and celsius
        while ($temp <= 100) {
            $celc = (($temp - 32) * (5/9));
            echo "<font color=\"red\">Fahrenheit is: $temp</font><br>";
            echo "<font color=\"blue\"> Celsius is: " . number_format($celc, 2) . "</font><br><br>";
            $temp++;
        }
    ?>
</body>
</html>