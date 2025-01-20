<?php

$maxStars = 5;

for ($i = 1; $i <= $maxStars; $i++) {
    echo str_repeat("*", $i) . "\n";
}

for ($i = $maxStars - 1; $i >= 1; $i--) {
    echo str_repeat("*", $i) . "\n";
}

?>
