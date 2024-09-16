<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$x = 80; 
$a = 40;

//this is the calculation being done
function firstCalc( $x ){
    $firstnum = $x * 0.25;
    echo "Here is 25% of what you typed: ".$firstnum;
}

//these are the function being called. 
firstCalc($x);

echo "<br>";

firstCalc($a);

?>

</body>
</html>