<?php
session_start();
?>

<?php
if (isset($_SESSION['nombre'])){
	session_destroy();
	echo "Se ha destruido sesión correctamente <br/>";
	echo "<a href='index.php'> VOLVER </a>";

}else{
	echo "ERROR.... <br/>";
	echo "<a href='index.php'> VOLVER </a>";
}
?>
