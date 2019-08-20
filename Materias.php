<?php include("includes/header.php");?>
<center>
    <h2>Registro de Materias</h2>
    <form class="forgot" action="registrar_materias.php" method="GET">
      <input type="text" name="Clave" value="" placeholder="Clave Materia" maxlength="10" required><br>
      <input type="text" name="Nombre" value="" placeholder="Nombre" maxlength="30" required><br>
      <input type="text" name="Creditos" value="" placeholder="Creditos" maxlength="30" required><br>
      <br>
      <input type="submit" name="" value="Registrar" class="animated">
    </form>
</center>
<?php include("includes/fooder.php");?>