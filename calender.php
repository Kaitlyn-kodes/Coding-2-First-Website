<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<?php

$dayofweek = date("w");

switch($dayofweek) {
    case 1:
        echo "<p>Happy Monday!</p>";
    break;
    case21:
        echo "<p> Happy Tuesda!</p>";
    break;
    case 3:
        echo " <p> Happy Wednesday!</p>";
    break;
    case 4:
        echo "<p>Happy Thursday!</p>";
    break;
    case 5:
        echo "<p>Happy Friday</p>";
    break;
    case 6:
        echo "<p>Happy Saturday!</p>";
    break;
    case 0:
        echo "<p>Happy Sunday!</p>";
    break;
}
?>


</body>
</html>