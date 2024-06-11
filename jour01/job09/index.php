<?php 
function bonjour($jour = false) {
    if ($jour === false) {
        echo "bonsoir";
    } else {
        echo "bonjour";
    }
}

bonjour();
?>