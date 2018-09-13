<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.11.18 

        ArithmeticOperators.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
        echo "<h1>Arithmetic Operators</h1>";
        
        // addition
        $x = 100;
        $y = 200;
        $returnValue = $x + $y;
        echo "<h3>Addition</h3>";
        echo '<p>$returnValue after addition expression: ', $returnValue, "</p>";

        // subtraction 
        $x = 10;     
        $y = 7;
        $returnValue = $x - $y;
        echo "<h3>Subtraction</h3>";
        echo '<p>$returnValue after subtraction expression: ', $returnValue, "</p>";

        // division
        $x = 24;     
        $y = 3;
        $returnValue = $x / $y;
        echo "<h3>Division</h3>";
        echo '<p>$returnValue after division expression: ', $returnValue, "</p>";

        // modulus
        $x = 10;     
        $y = 7;
        $returnValue = $x % $y;
        echo "<h3>Modulus</h3>";
        echo '<p>$returnValue after modulus expression: ', $returnValue, "</p>";

        // unary
        echo "<h3>Unary increment: Prefix Notation</h3>";
        $studentID = 100;     
        $curStudentID = ++$studentID;
        echo "The first student ID is: ", $curStudentID, "<br>";
        $curStudentID = ++$studentID;
        echo "The second student ID is: ", $curStudentID, "<br>";
        $curStudentID = ++$studentID;
        echo "The third student ID is: ", $curStudentID, "<br>";
        
        // postfix
        echo "<h3>Unary increment: Prefix Notation</h3>";
        $studentID = 100;     
        $curStudentID = $studentID++;
        echo "The first student ID is: ", $curStudentID, "<br>";
        $curStudentID = $studentID++;
        echo "The second student ID is: ", $curStudentID, "<br>";
        $curStudentID = $studentID++;
        echo "The third student ID is: ", $curStudentID, "<br> <br>";

        echo "<h1>Assignment Operators</h1>";
        $number = 100;
        $number += 50;
        echo '$number: ', $number;

        echo "<h1>Conditional Operators</h1>";
        $value1 = "First text string";
        $value2 = "Second text string";
        $returnValue = ($value1 == $value2) ? "👍🏻" : "👎🏻";
        echo '$returnValue is: ', $returnValue;
    ?>
</body>
</html>