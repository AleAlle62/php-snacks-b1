<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
?>



<?php
    $array_match = [
        // prima partita 
        [
            // casa 
            $home1 = [
                'score' => 120 . ' -',
                'team' => 'golden state -',
            ],
            // ospite 
            $guest1 = [
                'score' => 125,
                'team' => 'cleveland |',
            ],
        ],
        // seconda partita 
        [
            // casa 
            $home2 = [
                'score' => 100 . ' -',
                'team' => 'sacramento -',
            ],
            // ospite 
            $guest2 = [
                'score' => 85,
                'team' => 'toronto |',
            ],
        ],
        // terza partita 
        [
            // casa 
            $home3 = [
                'score' => 125 . ' -',
                'team' => 'memphis -',
            ],
            // ospite 
            $guest3 = [
                'score' => 99,
                'team' => 'minnesota |',
            ],
        ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snak 1</title>
</head>
<body>
    <h1> PRIMA PARTITA:
        <h4>
            <?php echo $home1['team']?>
            <?php echo $guest1['team']?>
            <?php echo $home1['score']?>
            <?php echo $guest1['score']?>
        </h4>
    </h1>

    <h1> SECONDA PARTITA:
        <h4>
            <?php echo $home2['team']?>
            <?php echo $guest2['team']?>
            <?php echo $home2['score']?>
            <?php echo $guest2['score']?>
        </h4>
    </h1>

    <h1> TERZA PARTITA:
        <h4>
            <?php echo $home3['team']?>
            <?php echo $guest3['team']?>
            <?php echo $home3['score']?>
            <?php echo $guest3['score']?>
        </h4>
    </h1>
</body>
</html>