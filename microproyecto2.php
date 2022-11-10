<?php
$altura = readline("Ingrese la altura del árbol de navidad a generar: ");
echo "\n";

for ($i = 1; $i <= $altura; $i++) {
    echo str_repeat("*", $i) . "\n";
}