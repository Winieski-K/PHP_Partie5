<?php
// Déclaration d'un tableau contenant les départements de Haut de France
$myTab = [
    '02' => 'Aisne',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme',
    '59' => 'Nord'
];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5</title>
    </head>
    <body>
        <!-- Affiche l'élément ayant pour clé(key) 02 -->
        <p><?php echo $myTab['02']; ?></p>
    </body>
</html>
