<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>funciones 1</title>
</head>
<body>
  <?php

    $numero = 5;

    function incrementa(&$valor){

      $valor++;

      return $valor;
    }
    
    echo incrementa($numero). "<br>";

    echo $numero;

   ?>
</body>
</html>
