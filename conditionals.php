<?php
    include 'includes/header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conditionals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

