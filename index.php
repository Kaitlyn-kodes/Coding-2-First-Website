<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

//This is a "sumbit form";
<form method="GET">
    <input type= "text" name= "person">
    <button> SUBMIT </button>
</form>

    <?php
    
        $name= $_GET ['person'];
        echo $name. " is awesome sauce!";

    ?>

</body>
</html>