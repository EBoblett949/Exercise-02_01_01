<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_01_01

        Author: Eli Boblett
        Date: 9.11.18 

        Concerts.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concerts</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <h1>Central Valley Civic Center</h1>
    <h2>Summer Concert Season</h2>
    <?php
        $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
        $concerts[] = "Bob Dylan";
        $concerts[] = "Ryan Cabrera";

        echo "<p>the following ", count($concerts), " concerts are scheduled:</p><p>";
        echo "$concerts[0]<br>";
        echo "$concerts[1]<br>";
        echo "$concerts[2]<br>";
        echo "$concerts[3]<br>";
        echo "$concerts[4]<br>";
        echo "$concerts[5]<br>";
        echo "$concerts[6]</p>";
    ?>
</body>
</html>