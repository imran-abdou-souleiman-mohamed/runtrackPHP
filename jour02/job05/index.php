<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des champs POST
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Vérifier les informations de connexion
    if ($username === 'John' && $password === 'Rambo') {
        echo "<h1>Ce n'est pas ma guerre</h1>";
    } else {
        echo "<h1>Votre pire cauchemar</h1>";
    }
} else {
    // Si la page est accédée sans soumission de formulaire
    echo "<p>Veuillez soumettre le formulaire de <a href='index.html'>connexion</a>.</p>";
}
?>
