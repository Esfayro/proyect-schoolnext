<?php
    session_start();
    $servidor = "localhost:3306";
    $usuario = "root";
    $clave = 'So76699/#/$"/';
    $basedatos = "escuela";
    $link = mysqli_connect($servidor, $usuario, $clave, $basedatos);
?>