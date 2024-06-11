<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat de vérification</title>
</head>
<body>
    <h2>Résultat de vérification</h2>
    <?php
    // Vérifier si le paramètre "nombre" a été envoyé
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        // Vérifier si c'est un nombre valide
        if (is_numeric($nombre)) {
            // Vérifier si c'est pair ou impair
            if ($nombre % 2 == 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    } else {
        echo "<p>Aucun nombre entré.</p>";
    }
    ?>
</body>
</html>
