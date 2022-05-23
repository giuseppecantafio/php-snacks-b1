<?php
// Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

 $classe_59 = [
        'alunni' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni',
                'voti' => [7, 8 , 7, 4]
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri',
                'voti' => [10, 10, 2, 8]
            ],
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini',
                'voti' => [10, 10, 10, 10]
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini',
                'voti' => [5, 5, 5, 9]
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
    <title>Document</title>
    <style>
        .ev{
            color: red;
        }
    </style>
</head>
<body>
    <div>
    <?php foreach($classe_59['alunni'] as $key => $v) { ?>
    <p>
        <span class="ev">Nome:</span> <?php echo $v['name']; ?>
        <span class="ev">Cognome:</span> <?php echo  $v['lastname']; ?>
        <span class="ev">Media voti:</span> <?php echo $media = round((array_sum($v['voti']) / 4), 1); ?>
    </p>
    <?php }?>    
    </div>
</body>
</html>