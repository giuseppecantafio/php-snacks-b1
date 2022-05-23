<?php
// Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [
    '10/01/2020' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Pinco pallo'
        ]
    ],
    '10/02/2020' => [
        [
            'title' => 'Post 2',
            'author' => 'Diletta Santini',
            'text' => 'Amico frizz'
        ]
    ],
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
    <?php foreach($posts as $key => $v) { ?>
        <h3><?php echo $v[0]['title']." - "."{$key}"; ?></h3>
        Titolo: <?php echo $v[0]["title"]; ?><br />
        Autore: <?php echo $v[0]["author"]; ?><br />
        Testo: <strong><?php echo $v[0]["text"]; ?></strong>
        <?php } ?>
</body>
</html>