<?php
// afficher_post.php

// Compter le nombre d'arguments POST
$nombre_arguments = count($_POST);

// Afficher le résultat
echo "Nombre d'arguments POST reçus : " . $nombre_arguments . "<br>";

// Afficher les noms et valeurs des arguments POST pour vérification
if ($nombre_arguments > 0) {
    echo "Détails des arguments POST :<br>";
    echo "<table border='1'>";
    echo "<tr><th>Nom de l'argument</th><th>Valeur</th></tr>";

    foreach ($_POST as $nom => $valeur) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($nom) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun argument POST reçu.";
}
?>
