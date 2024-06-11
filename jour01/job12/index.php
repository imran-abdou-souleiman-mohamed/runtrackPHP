<?php
function occurrences($str, $char) {
    return substr_count($str, $char);
}

// Exemple d'utilisation :
$str = "Bonjour";
$char = "o";

$resultat = occurrences($str, $char);

echo "Le nombre d'occurrences de '$char' dans '$str' est : $resultat\n";
?>