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
      $curso=$_GET['Curso'];
      $profesor=$_GET['Profesores'];
      $materias=$_GET['Materias'];
      $periodo=$_GET['Periodo'];
      $seciones=$_GET['Seciones'];

      $consulta="INSERT INTO cursos (CURSO, PROFESOR, MATERIA, PERIODO, SECIONES) values
      ('$curso','$profesor','$materias','$periodo','$seciones')";
      $res = $link->query($consulta);
      echo "<h2>Se agrego correntamnte un curso nuevo<h2>";
      echo "<a href=\"/MiniProyecto3/cursos.php\"> Regresar</a> <a href=\"/MiniProyecto3/inicio.html\"> Home</a><BR>";
    }
    ?>
  </body>
</html>
