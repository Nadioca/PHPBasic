<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php

    include('vehiculos.php');


    $ford = new Coche("ford");
    $suzuki = new Moto("suzuki");

    echo $ford->getRuedas()."<br>";
    echo $ford->arrancar();
    echo $ford->pintar("rojo");

    include('concecionario.php');

    $car = new Concecionario("deportivo");


    echo "el vehículo " .$ford->getNombre()." te costará ". $car->precio_final()."€";


    echo "<br>***********************************<br>";

    echo $suzuki->getRuedas()."<br>";
    echo $suzuki->arrancar();
    echo $suzuki->pintar("azul");

   ?>

</body>
</html>
