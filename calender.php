<?php
    include 'includes/header.php';
    include_once 'includes/dbh.inc.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body>
        <?php

        $dayofweek = date("w");

        switch($dayofweek) {
            case 1:
                echo "<p>Happy Monday!</p>";
            break;
            case 2:
                echo "<p> Happy Tuesday!</p>";
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

