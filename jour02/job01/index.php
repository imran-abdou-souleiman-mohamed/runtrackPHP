<?php
// afficher_get.php

// Compter le nombre d'arguments GET
$nombre_arguments = count($_GET);

// Afficher le résultat
echo "Nombre d'arguments GET reçus : " . $nombre_arguments . "<br>";

// Afficher les noms et valeurs des arguments GET pour vérification
if ($nombre_arguments > 0) {
    echo "Détails des arguments GET :<br>";
    foreach ($_GET as $nom => $valeur) {
        echo htmlspecialchars($nom) . ": " . htmlspecialchars($valeur) . "<br>";
    }
} else {
    echo "Aucun argument GET reçu.";
}
?>
