<?php
// Déclaration d'un tableau contenant les mois
$myTab = [
    0 => 'janvier',
    1 => 'février',
    2 => 'mars',
    3 => 'avril',
    4 => 'mai',
    5 => 'juin',
    6 => 'juillet',
    7 => 'août',
    8 => 'septembre',
    9 => 'octobre',
    10 => 'novembre',
    11 => 'décembre'
];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2</title>
    </head>
    <body>
        <!-- Affiche l'élément stocké à l'index 2 -->
        <p><?php echo $myTab[2] ?></p>
    </body>
</html>
