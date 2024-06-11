<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat de la construction</title>
    <style>
        .maison {
            width: 0;
            height: 0;
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 20px solid brown;
            position: relative;
            margin-top: 20px;
        }
        .toit {
            width: 100%;
            height: 0;
            border-left: 50px solid transparent;
            border-right: 50px solid transparent;
            border-bottom: 50px solid red;
            position: absolute;
            top: -50px;
        }
    </style>
</head>
<body>
    <h2>Résultat de la construction</h2>
    <?php
    // Récupérer les valeurs de largeur et hauteur depuis le formulaire GET
    $largeur = $_GET['largeur'] ?? 0;
    $hauteur = $_GET['hauteur'] ?? 0;

    // Vérifier si les valeurs sont valides (supérieures à zéro)
    if ($largeur > 0 && $hauteur > 0) {
        echo "<div class='maison'>";
        echo "<div class='toit'></div>";
        echo "</div>";
    } else {
        echo "<p>Veuillez entrer des valeurs valides pour la largeur et la hauteur.</p>";
    }
    ?>
</body>
</html>
