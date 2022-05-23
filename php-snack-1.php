<?php
// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$partite = [
    'girone_1' => [
        [
            $squadra = 'Olimpia Milano',
            $punteggio = 55
        ],
        [
            $squadra = 'Cantù',
            $punteggio = 60
        ]
    ],
    'girone_2' => [
        [
            $squadra = 'Olimpia Milano',
            $punteggio = 50
        ],
        [
            $squadra = 'Torino',
            $punteggio = 45
        ]
    ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h2>Risultato gironi:</h2>
    <h3>Primo girone</h3>
    <p><?php echo $partite["girone_1"][0][0]; ?> <span><?php echo $partite["girone_1"][0][1]; ?></span></p>
    <p><?php echo $partite["girone_1"][1][0]; ?> <span><?php echo $partite["girone_1"][1][1]; ?></span></p>
    <h3>Secondo girone</h3>
    <p><?php echo $partite["girone_2"][0][0]; ?> <span><?php echo $partite["girone_2"][0][1]; ?></span></p>
    <p><?php echo $partite["girone_2"][1][0]; ?> <span><?php echo $partite["girone_2"][1][1]; ?></span></p>
</body>
</html>