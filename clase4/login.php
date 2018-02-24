<?php
session_start();
$_SESSION['nombre'] = $_POST['Nombre'];

if($_SESSION['nombre']=="valor"){
    echo "session creada exitosamente<br>";
    echo "<a href='admin.php'> administracion </a>";
}else{
    echo "error<br>";
    session_destroy();
    echo "<a href='index.php'> volver </a>";
}
?>
