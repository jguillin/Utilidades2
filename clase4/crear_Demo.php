<?php
session_start();
include_once("DemoCollector.php");
?>
<div><a href="admin.php">administracion</a></div><br>
<?php

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "  && " .$c->getNombre();
  echo "<a href='formularioDemoEditar.php'>editar-</a>";
  echo "<a href='delete_demo.php?id=".$c->getIdDemo() ."'>eliminar</a>";
  echo "</div>";
}
  echo "<div>";
  echo "<a href='formularioDemoCrear.php'>crear</a>";
  echo "</div>";
?>
