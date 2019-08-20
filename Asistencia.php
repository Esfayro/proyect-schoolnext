<?php include("includes/header.php") ?>
   <center>
      <h2>Registro de asistencias</h2>
      <form class="" action="Registros/registro_clases.php" method="GET">
        <input type="text" name="CLAVE" value="" placeholder="Clave de materia" maxlength="10" required><br>
        <input type="text" name="Matricula" value="" placeholder="Matricula" maxlength="30" required><br>
        <input type="date" name="Fecha" value="" required><br><br>
        <input type="submit" name="" value="Registrar" class="animated">
      </form>
   </center>
<?php include("includes/fooder.php") ?>
