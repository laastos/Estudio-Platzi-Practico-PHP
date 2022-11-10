<?php
$edades = [4, 6, 10, null];

function validarEdad($edad) {
    if (is_numeric($edad)) {
      if ($edad < 5) {
          return "El estudiante con $edad años tendrá sus juguetes en la parte inferior de la bodega.";
      } elseif (($edad >= 5) and ($edad <= 7)) {
          return "El estudiante con $edad años tendrá sus juguetes en la parte media de la bodega.";
      } elseif ($edad > 7) {
          return "El estudiante con $edad años tendrá sus juguetes en la parte alta de la bodega.";
      }
    } else {
        return "El estudiante sin registro de años tendrá sus juguetes en la bodega de al lado.";
    }
}

foreach ($edades as $edad) {
    echo validarEdad($edad) . "\n";
}