<?php
session_start();
$_SESSION["nombre"] = $_POST["nombre"];

echo "Sesión creada existosamente ";
echo "<a href=\"formulario.php\">Volver</a>"
 ?>