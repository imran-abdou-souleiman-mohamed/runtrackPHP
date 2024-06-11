<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Transformation</title>
</head>
<body>

<form action="traitement.php" method="post">
    <label for="str">Entrez votre chaîne :</label><br>
    <input type="text" id="str" name="str"><br>
    
    <label for="action">Choisissez une action :</label><br>
    <select id="action" name="action">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select><br>
    
    <input type="submit" value="Valider">
</form>

</body>
</html>