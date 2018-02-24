<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario</title>
</head>
<body>
<?php
	if (isset($_SESSION["nombre"])){
		echo "<p>Hola usuario: (" . $_SESSION["nombre"]. ")"</p> [<a href= "logout.php">Salir</a>]";
}
?>
	<form action="datos1.php" method="post">
		<fieldset>
			<label>Nombre</label>
			<input type="text" name="nombre"><br/>
			<button type="submit">Enviar</button>
		</fieldset>	
	</form>
</body>
</html>