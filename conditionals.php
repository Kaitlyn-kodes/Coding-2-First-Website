<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Variable Conditional Statements
    $x = 6;

    if ($x == 6) {
            echo "Kaitlyn is so smart!";
    } 
    elseif($x == 4){
            echo "Kaitlyn is smartish!";
    }
    elseif($x == 2){
            echo "Kaitlyn is smartish!";
    }
    elseif($x == 8){
        echo "Kaitlyn is smartish!";
    }   
    else {
        echo "Kaitlyn is not so smart!";
    }

//This is for space purposes
echo " space ";

    //Switch Statements
    $y = 2;

    switch($y){
        case 7:
            echo "7 is correct!";
        break;
        case "number":
            echo "5 is correct!";
        break;
        case "number":
            echo "3 is correct!";
        break;
        case "number":
            echo "9 is correct!";
        break;
        default:
            echo "Answer cannot be found.";
    }
    ?>
</body>
</html>