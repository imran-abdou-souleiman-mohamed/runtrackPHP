<?php
for ($i = 1; $i <= 1337; $i++) {
    if ($i == 26 or $i == 37 or $i == 88 or $i == 1111) {
        echo "<span style='display: none;'>" . $i . "</span>"; 
    
    } else {
        echo $i . "\n"; 
    }
}
?>