<?php
function toLeetSpeak($str) {
    // Tableau de correspondance entre les lettres et leurs équivalents en Leet Speak
    $leetMap = array(
        'A' => '4', 'E' => '3', 'G' => '6', 'I' => '1', 'O' => '0',
        'S' => '5', 'T' => '7'
    );

    // Remplacer chaque lettre par son équivalent en Leet Speak
    foreach ($leetMap as $letter => $replacement) {
        $str = str_replace($letter, $replacement, $str);
    }

    return $str;
}

// Exemple d'utilisation :
$str = "Hello World!";
$leetSpeakStr = toLeetSpeak($str);

echo "Original: $str\n";
echo "En Leet Speak: $leetSpeakStr\n";
?>