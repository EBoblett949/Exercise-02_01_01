<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.12.18 

        IsEven.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Is Even</h2>
    <?php
        $numbersArray = array(rand(100, 999), rand(100, 999), rand(100, 999), rand(100, 999), rand(100, 999), rand(100, 999), rand(100, 999), rand(100, 999), rand(100, 999), rand(100, 999));
        echo $numbersArray[0], " is an ", ($numbersArray[0] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[1], " is an ", ($numbersArray[1] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[2], " is an ", ($numbersArray[2] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[3], " is an ", ($numbersArray[3] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[4], " is an ", ($numbersArray[4] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[5], " is an ", ($numbersArray[5] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[6], " is an ", ($numbersArray[6] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[7], " is an ", ($numbersArray[7] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[8], " is an ", ($numbersArray[8] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
        echo $numbersArray[9], " is an ", ($numbersArray[9] % 2 == 0) ? "<strong>EVEN</strong> number <br>" : "<strong>ODD</strong> number <br>";
    ?>
</body>
</html>