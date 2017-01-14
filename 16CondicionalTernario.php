<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>condicional ternario</title>
  </head>
  <body>

    <form class="" action="" method="post">
      <label for="nombre">Introduce tu nombre</label>
      <input type="text" name="nombre" value="">

      <label for="pass">Introduce tu edad</label>
      <input type="password" name="pass" value="">

      <br><br>

      <button type="submit" name="enviar">Enviar</button>

    </form>

    <br>

    <?php
      if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];

        echo $nombre=="Aco" && $pass=="1234" ? "Bienvenido" : "No tienes acceso";
      }
     ?>

  </body>
</html>
