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
        <title>Exercice 9</title>
    </head>
    <body>
        <p>
            <?php
            // pour chaque élément du tableau $myTab affiche l'élément stocké
            foreach ($myTab as $value) {
                ?>
                <br />
                <?php
                // Affiche $value qui correspond à l'élément stocké
                echo $value;
            }
            ?>
        </p>
    </body>
</html>
