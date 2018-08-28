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
        <title>Exercice 10</title>
    </head>
    <body>
        <p>
            <?php
            // pour chaque élément du tableau $myTab affiche l'élément stocké ainsi que la clé(key) correspondante
            foreach ($myTab as $key => $value) {
                ?>
                <br />
                <?php
                // Affiche un string contenant la clé et sa valeur correspondante
                echo 'Le département ' . $value . ' a le numéro ' . $key;
            }
            ?>
        </p>
    </body>
</html>
