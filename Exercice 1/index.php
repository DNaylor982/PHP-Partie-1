<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 1</title>
</head>
<body>
    <?php
    $objet = 'Ordinateur';
    $message = 'veuillez redémarrer !';
    $color = 'blue';
    ?>
    <p> <?php echo $objet; ?> </p>
    <p> <?php echo $message; ?> </p>

    <p class="<?=$color?>"> <?= $objet; ?> </p>   
    <p> <?= $message; ?> </p>

    <img src="<?=$image?>">
    
</body>
</html>