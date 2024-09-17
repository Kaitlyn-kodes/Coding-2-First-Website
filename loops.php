<?php
    include 'header.php'
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

