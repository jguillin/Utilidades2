<?php
session_start();
?>
Administración
<br/>

<?php
	if (isset($_SESSION['nombre'])){
			echo "<p> Hola Usuario:(" . $_SESSION['nombre']. ")[<a href='logout.php'> SALIR </a>]";
?>

<br/>

<a href="show_demo.php">DEMO</a><br/>
<a href="show_ciudad.php">CIUDAD</a><br/>
<a href="show_demo_ciudad.php">DEMO_CIUDA</a><br/>

<?php }else{ ?>
<br/>
error con la sesión
<?php }?>