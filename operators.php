<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
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
</body>
</html>