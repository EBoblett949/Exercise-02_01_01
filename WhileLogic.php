<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.14.18 

        OddNumbers.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Logic</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>While Logic</h2>
    <?php
        $counter = 0;
        while ($counter <= 100) {
            $numbers[] = $counter;
            ++$counter;
        }
        foreach ($numbers as $currentNum) {
            echo "$currentNum<br>";
        }
    ?>
</body>
</html>