<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 9 exercice 5</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <div align="center">
                        <h1 align="center">PHP Partie 9 exercice 5</h1>
                        <h3 align="center">Exercice 5</h3>
                        <p class="text">Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>
                        <?php
                        // Calcul de l'interval avec date_diff
                        $datetime1 = date_create('2016-05-16');
                        $datetime2 = date_create('now');
                        $interval = date_diff($datetime1, $datetime2);
                        ?>
                        <p align="center">Le nombre de jours écoulés entre le 16 Mai 2016 et aujourd'hui est :<b><?= $interval->format(' %a jours'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


