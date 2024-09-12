<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    //loop

    //While loop
    $x = 2;
    while($x < 7){
        echo "How do ya do? <br>";
        $x++; //this will stop the loop by adding a number to $x until the loop isnt true
    }

    //Do while loop
    $y = 4;
    do{
        echo "Wyd girl ? <br>";
        $y++; 
    }
    while($y <= 8);  
    
    //For loop
    for($z = 1; $z <= 6; $z++){
        echo "Hey friend!<br>";
    }

    //Foreach loop
    $array = array("Kaitlyn", "Marshal", "Beyonce", "Sam Smith", "Maverick");
    foreach($array as $loopdata){
        echo "Me llamo ". $loopdata. "<br>";
    }
?>

</body>
</html>