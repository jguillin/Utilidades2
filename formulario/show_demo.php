<?php
session_start();
include_once("DemoCollector.php");
?>

<div><a href="admin.php"> Administracion </a></div><br/>
<?php

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "   " .$c->getNombre();
  echo "<a href='ormularioDemoEditar.php'>Editar</a> - ";
  echo "<a href='delete_demo.php?id=".$c->getIdDemo() ."'>Eliminar</a> ";
  echo "</div>"; 
}


?>
