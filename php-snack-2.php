<?php
// Snack 2
//Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$message = '';

if ((!empty($_GET['name'])) || (!empty($_GET['mail'])) || (!empty($_GET['age']))) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $message = 'ciao';
    var_dump($name);
    var_dump($mail);
    var_dump($age);
    if (strlen($name) < 3){
        $message = "Accesso non riuscito, inserire un nome superiore a 3 caratteri";
    } elseif ((strpos($mail, '@') == false) || (strpos($mail, '.') == false)) {
        $message = "Accesso non riuscito, si prega di inserire una mail in formato corretto: aaa@aaa.aa";
    } elseif (is_numeric($age) == false) {
        $message = "Accesso non riuscito, l'età deve essere un numero";
    }
} else {
    $message = 'Accesso riuscito';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack  2</title>
</head>
<body>
    <p><?php echo $message; ?></p>
</body>
</html>