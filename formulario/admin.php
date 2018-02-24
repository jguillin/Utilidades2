<?php
session_start();
?>
<br/>
<?php
	if (isset($_SESSION['nombre'])){
	    echo "<p> Hola Usuario:(" . $_SESSION['nombre']. ")[<a href='logout.php'> SALIR </a>]";
?>

<br/>
<a href="show_demo.php"> Demo </a><br>
<a href="show_ciudad.php"> Ciudad </a><br>
<a href="show_demo_ciuda.php"> Demo Ciudad </a><br/>
<?php	}else{ ?>
<br>
error en la sesion<br>
<a href="index.php"> Volver </a>
<?php }
?>
