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
    $basedatos = "escuela";
    $link = mysqli_connect($servidor, $usuario, $clave, $basedatos);
    if(!$link)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
      $link->set_charset("utf8");
      $clave=$_GET['CLAVE'];
      $matricula=$_GET['Matricula'];
      $fech=$_GET['Fecha'];
      header("Asistencias");

      $consulta="INSERT INTO asistencias (CLAVE,MATRICULA, FECHA) values
      ('$clave','$matricula','$fech')";
      $res = $link->query($consulta);
      echo "<h2>Se confirmó asistencia<h2>";

      echo "<a href=\"/MiniProyecto3/Asistencia.html\"> Regresar</a> <a href=\"/MiniProyecto3/inicio.html\"> Home</a><BR>";
    }
    ?>
  </body>
</html>
