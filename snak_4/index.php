<?php
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
?>



<?php
    $numeri = [];
    while (count($numeri) < 15) {
        $numran .= rand(0,100);
        if (!in_array($numran,$numeri)) {
            $numeri[] = $numran;
        };
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snak 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="centro">
        <h1><?php echo($numran)?></h1>
    </div>
</body>
</html>