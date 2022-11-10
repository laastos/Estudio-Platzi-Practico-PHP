<?php
require 'palabras.php';

foreach ($PALABRAS as $index => $palabra) {
    if ($_REQUEST["palabra$index"] == $palabra) {
        echo "La palabra $palabra es correcta.<br />";
    } else {
        echo "La palabra ".$_REQUEST["palabra$index"]." es incorrecta. La correcta es $palabra.<br />";
    }
}