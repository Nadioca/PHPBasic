<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones mat y casting</title>
  </head>
  <body>
    <a href="http://php.net/manual/es/ref.math.php">Funciones matemáticas</a><br/><br/>

    <?php

      $num1=rand(1,100);

      echo "<p>Numero aleatorio: ".$num1."</p>";

      $num2=pow(5,3);

      echo "<p>5 elevado a 3 es: ".$num2."</p>";

      $num3=12.987654;

      echo "<p>12.987654 redondeado: ".round($num3,2)."</p>";

      $str="5";
      $res=(int)$str;

      echo '<p> $str es una string</p>';
      echo "<p>".gettype($str)."</p>";
      echo '<p> pero con casting lo puedo pasar a int guardandolo en $res';
      echo "<p>".gettype($res)."</p>";


     ?>

  </body>
</html>
