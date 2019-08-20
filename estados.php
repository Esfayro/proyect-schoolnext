<?php include("includes/header.php");?>
<head>
   <title>Estados</title>
</head>
<center>
    <h2>Registro de Estados</h2>
    <form class="forgot" action="Registros/registrar_estados.php" method="GET">
      <input type="text" name="ClvEstado" value="" placeholder="Clave" maxlength="10" required><br>
      <input type="text" name="Nombre" value="" placeholder="Nombre" maxlength="30" required><br>
      <input type="submit" name="" value="Registrar" class="animated">
    </form>
</center>
<?php include("includes/fooder.php");?>