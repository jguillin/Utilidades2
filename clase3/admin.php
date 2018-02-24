<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<?php
            if (isset($_SESSION['nombre'])){
                    echo "<p> Hola Usuario:(" . $_SESSION['nombre']. ")[<a href='logout.php'> SALIR </a>]";
        ?>
        <br>
        <a href="show_demo.php">demo</a><br>
        <a href="show_ciudad.php">ciudad</a><br>
        <a href="show_demo_ciudad.php">demo_ciudad</a><br>
        <?php } else { ?>
        <br>
        error con la sesion<br>
        <a href="index.php">volver</a>
        <?php } ?>
	</body>
</html>