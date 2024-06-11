<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Compter le nombre d'arguments POST
    $nombre_arguments = count($_POST);

    // Afficher le nombre d'arguments POST reçus
    echo "<h1>Nombre d'arguments POST reçus : " . $nombre_arguments . "</h1>";

    // Si des arguments POST ont été reçus, les afficher dans un tableau HTML
    if ($nombre_arguments > 0) {
        echo "<h2>Détails des arguments POST :</h2>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Nom de l'argument</th><th>Valeur</th></tr>";

        // Parcourir chaque argument POST et les afficher dans le tableau
        foreach ($_POST as $nom => $valeur) {
            echo "<tr>";
            // Échapper les caractères spéciaux pour éviter les failles XSS
            echo "<td>" . htmlspecialchars($nom) . "</td>";
            echo "<td>" . htmlspecialchars($valeur) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Aucun argument POST reçu.</p>";
    }
} else {
    // Si la page est accédée sans soumission de formulaire
    echo "<p>Veuillez soumettre le formulaire via <a href='index.html'>index.html</a>.</p>";
}
?>
