<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $action = $_POST['action'];

    switch ($action) {
        case 'gras':
            // Mise en gras des mots commençant par une majuscule
            $str = preg_replace('/\b[A-Z]\w*/i', '<strong>$&</strong>', $str);
            break;

        case 'cesar':
            // Décalage César par défaut de 2
            $decalage = isset($_POST['decalage'])? $_POST['decalage'] : 2;
            $str = str_rot13(str_repeat($str, $decalage));
            break;

        case 'plateforme':
            // Ajout de "_" aux mots finissant par "me"
            $str = preg_replace('/\b\w*me$/i', '$0_', $str);
            break;
    }

    echo "<p>Résultat:</p>";
    echo nl2br(htmlspecialchars($str)); // Affichage sécurisé de la chaîne
}
?>