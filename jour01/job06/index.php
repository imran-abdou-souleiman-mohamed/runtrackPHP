<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 20) {
        echo "<i>" . $i . "</i>";
    }if ($i >= 25 && $i <= 50) {
        echo "<u>" . $i . "</u>";
    }if ($i == 42 ) {
        echo "La Plateforme_" ; 
    
    } else {
        echo $i . "\n"; 
    }
}
?>