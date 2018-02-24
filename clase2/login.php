<?php
session_start();
$_SESSION['nombre'] = $_POST['Nombre'];

if ($_SESSION["nombre"] == "valor"){
	echo "<h1>Sesión creada exitosamente</h1>";
	echo "<a href='admin.php'> Administraci&oacute;n</a>";

}

else{
	echo "error";
	session_destroy();
	echo "<a href='index.php'>Volver</a>";
}


?>
