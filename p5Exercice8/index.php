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
// Dénombre les éléments contenu dans $myTab
$myArrlength = count($myTab);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8</title>
    </head>
    <body>
        <p>
            <?php
            // Boucle qui parcourt le nombre d'élément du tableau
            for ($i = 0; $i < $myArrlength; $i++) {
                ?>
                <br />
                <?php
                // Affiche l'élément ayant pour index la valeur de $i
                echo $myTab[$i];
            }
            ?>
        </p>
        <p>
            <?php
            foreach($myTab as $element) { ?>
            <li><?php  echo $element ?></li>              
            <?php } ?>
        </p>
    </body>
</html>
