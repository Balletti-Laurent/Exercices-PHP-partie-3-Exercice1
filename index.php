<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>
        <div>
            <?php
            $compteur = 0;
            // Tant que $compteur n'est pas = 10 je continue a l'incrémenter avec un pas de 1 en 1
            while ($compteur <= 10)
            {
                echo '<p>Affichage du compteur ' .$compteur. '</p>';
                $compteur++;
            }
            ?>
            <?php
            $number = 3;
            $max = 20;
            // je pars de $number pour aller a $max avec un pas de 1 en 1
            for ($number; $number <= $max; $number++){
                echo '<p>Valeur de ma variable ' . $number . '</p>';
            }
            ?>
        </div>
    </body>
</html>