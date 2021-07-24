<?php
    //get.php?censura=odio
    $stringa= 'Ciao a tutti sono Roberto e vi odio';
    $censura=$_GET['censura'];
    $newStringa=str_replace($censura, '***', $stringa)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <p>
            stringa di partenza: 
        <?php
            var_dump($stringa);
        ?>
        </p>
        <p>
            parola da censurare:
        <?php
            echo $censura;
        ?>
        </p>

        <p>
            stringa finale:
        <?php

            var_dump($newStringa);

        ?>
        </p>

       

</body>
</html>