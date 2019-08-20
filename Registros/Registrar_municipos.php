<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/MiniProyecto3/css/formulario.css">
    <title>Exito</title>
  </head>
  <body>
    <?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basedatos = "Escuela";
    $link = mysqli_connect($servidor, $usuario, $clave, $basedatos);
    if(!$link)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
      $link->set_charset("utf8");
      $clave=$_GET['CLAVE'];
      $nombre=$_GET['NOMBRE'];
      header("Agregar Municipio");

      $consulta="INSERT INTO municipios (CLAVE, NOMBRE) values
      ('$clave','$nombre')";
      $res = $link->query($consulta);
      echo "<h2>Se agregro con exito un Municipio<h2>";
      echo "<a href=\"/MiniProyecto3/Estados.html\"> Regresar</a> <a href=\"/MiniProyecto3/inicio.html\"> Home</a><BR>";
    }
    ?>
  </body>
</html>
