<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.11.18 

        VariableScope.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Variable Scope</h2>
    <?php
        $globalVariable = "global variable";

        function scopeExample() {
            $localVariable = "local variable";
            echo "<p>This is a $localVariable</p>";
        }

        function globalExample() {
            global $globalVariable;
            echo "<p>This is a $globalVariable</p>";
        }

        scopeExample();
        echo "<p>This is a $globalVariable</p>";   
        globalExample();     
    ?>
</body>
</html>