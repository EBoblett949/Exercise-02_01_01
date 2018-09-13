<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.12.18 

        DaysArray.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Days Array</h2>
    <?php
        $days = array();
        $days[] = "Sunday";
        $days[] = "Monday";
        $days[] = "Tuesday";
        $days[] = "Wednesday";
        $days[] = "Thursday";
        $days[] = "Friday";
        $days[] = "Saturday";

        echo "The days of the week in English are: ",  $days[0], ", ", $days[1], ", ", $days[2], ", ", $days[3], ", ", $days[4], ", ", $days[5], ", ", $days[6], "<br>";

        $days[0] = "Dimanche";
        $days[1] = "Lundi";
        $days[2] = "Mardi";
        $days[3] = "Mercedi";
        $days[4] = "Jeudi";
        $days[5] = "Venderdi";
        $days[6] = "Samedi";

        echo "The days of the week in French are: ",  $days[0], ", ", $days[1], ", ", $days[2], ", ", $days[3], ", ", $days[4], ", ", $days[5], ", ", $days[6];
    ?>
</body>
</html>