<?php
// Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
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
        .teachers{
            border: 1px solid red;
        }
        .pm{
            border: 1px solid green;
        }
    </style>
</head>
<body>
    <?php foreach($db as $key => $v) { ?>
    <div class="<?php echo $key; ?>">
        <?php echo $v[0]['name']." ".$v[0]['lastname']; ?>
    </div>
    <div class="<?php echo $key; ?>">
        <?php echo $v[1]['name']." ".$v[1]['lastname']; ?>
    </div>
        
    <?php } ?>
</body>
</html>
