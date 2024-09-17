<?php
    include 'includes/header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operators</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body>
    <?php
        // This is for spacing purposes.
        echo " Arithmetic Operators: ";
            //Arithmetic Operators

                echo 10%4; // Modulus Operator. It leave the remainder.

            // This is for spacing purposes.
            echo " space ";

                echo 5+7; //addition

            // This is for spacing purposes.
            echo " space ";

                echo 6**3; // 5 to the power of 5

            // This is for spacing purposes.
            echo " space ";

                echo 6/3; //division 

            // This is for spacing purposes.
            echo " space ";

                echo 5-7; //subtraction

            // This is for spacing purposes.
            echo " space ";

                echo 6*3; //multiplication
        
            
        // This is for spacing purposes.
        echo " Assignment Operators: ";

            //Assignment Operators
            $x = 200;
            $x += 30;

            // you can also use 
            //the other oder of operations 
            //we did above, instead of addition.

            echo $x;
            
        // This is for spacing purposes.
        echo " Comparison  Operators: ";
            //Comparison Operators
            $x=6; // right here, 6 is an interger here
            $y="6";  // right here, 6 is a string.

            // above is an example of them not being the same data type.

            // !== this checks that the variables are not the same data type or number
            //!= mean "not equal"
            // == means "these are equal"
            // = means " this thing is this. ex: x is 5
            // === means " if x is equal to y, then these are the same data type and same nunmber.   
            // you can also use <, >, >=, and <=

            if($x !== $y){
                echo "True!";
            }
            else {
                echo "False!";
            }

        // This is for spacing purposes.
        echo " Increment/Deccrement Operators: ";
            //Increment/Deccrement Operators
            $x = 9;
            echo --$x  ; // this will give you 99 because you subtract 10-1, 
                        //making the new $x the number 8, and then when you 
                        //echo $x again, it will still be 8
                        
            echo $x;

            // ++ means we add "1"; -- means we subtract "1".
            // putting the pluses before mean you add 1 then echo $x
            // if you put the pluses after this means you will echo $x and then $x + 1

        // This is for spacing purposes.
        echo " Logical Operators: ";
            //Logical Operators
            $x = 15;
            $y = 15;

            // || means or 
            // && means and
            // xor means one of these conditions has to be true, but it can't be both
            if($x == $y xor 2 == 2) {
                echo "True";
            }


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>