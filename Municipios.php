<?php include("includes/header.php");?>
<head>
   <title>Municipiosi</title>
</head>
<center>
    <h2>Registro de Municipios </h2>
    <form class="forgot" action="/MiniProyecto3/Registros/Registrar_municipos.php" method="GET">
        <input type="text" name="CLAVE" value="" placeholder="CLAVE" maxlength="10" required><br>
        <input type="text" name="NOMBRE" value="" placeholder="NOMBRE" maxlength="100" required><br>
        <input type="submit" name="" value="Registrar" class="animated">
    </form>
</center>
<?php include("includes/fooder.php");?>