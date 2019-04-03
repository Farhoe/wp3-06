<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Šrouby od Matky</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
    
    $age=filter_input(INPUT_POST, 'age');
    $belt=getBelt($age);
    echo "Zapsali jste číslo: " . $age ;
    
    ?>


    <div style="display:block; width:40px; height:40px; border:2px black solid; background-color:<?php echo $belt ?>;">
    
    </div>
</body>
</html>