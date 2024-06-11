<?php
// afficher_tableau_get.php

// Vérifier s'il y a des arguments GET
if (count($_GET) > 0) {
    // Démarrer la création du tableau HTML
    echo "<table border='1'>";
    echo "<tr><th>Nom de l'argument</th><th>Valeur</th></tr>";

    // Parcourir et afficher chaque argument GET
    foreach ($_GET as $nom => $valeur) {
        echo "<tr>";
        // Échapper les caractères spéciaux pour éviter les failles XSS
        echo "<td>" . htmlspecialchars($nom) . "</td>";
        echo "<td>" . htmlspecialchars($valeur) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    // Afficher un message si aucun argument GET n'est reçu
    echo "Aucun argument GET reçu.";
}
?>
