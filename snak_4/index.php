<?php
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
?>



<?php
    $n_random = 15;
    $arr_random = [];
    $min = 0;
    $max = 100;
    while (count($arr_random) < $n_random) {
        $random_number = rand($min, $max);
        if (!in_array($random_number, $arr_random)) {
            $arr_random[] = $random_number;
        };
    };
    var_dump($arr_random);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snak 4</title>
</head>
<body>
</body>
</html>