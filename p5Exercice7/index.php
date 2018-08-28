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
        <title>Exercice 7</title>
    </head>
    <body>
        <!-- Ajoute un nouvel élément au tableau ayant pour clé(key) 51 -->
        <?php $myTab['51'] =  'Marne'; ?> 
        <!-- Affiche l'élément ayant pour clé(key) 51 -->
        <p><?php echo $myTab['51'] ?></p>
    </body>
</html>
