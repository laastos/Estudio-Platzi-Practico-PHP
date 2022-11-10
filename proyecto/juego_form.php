<?php
require 'palabras.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="main.php">
    <table>
    <?php
    foreach ($PALABRAS as $index => $palabra) {
        echo "<tr>";
        echo "<td>Las letras de la palabra son: " . str_shuffle($palabra) . "</td>";
        echo '<td><input type="text" name="palabra'.$index.'"></td>';
    }
    ?>
    </table>
    <button type="submit">Enviar</button>
  </form>  
</body>
</html>