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
    <title>Odd Numbers</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Odd Numbers</h2>
    <?php
        $number = 1;
        $result = "";
        while ($number < 101) {
            ($number % 2 == 1) ? $result = "<p>$number is odd</p><br>" : $result = "<p>$number is not odd</p><br>";
            $number++; 
            echo "$result";
        }
    ?>
</body>
</html>