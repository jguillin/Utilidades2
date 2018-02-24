<?php
session_start();
?>

<div id="main">
<?php
$id=$_GET["id"];
include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->deleteDemo($id);
//echo "valor id". htmlspecialchars($id) . " 
echo "<a href='show_demo.php'> Volver al Inicio</a>"
</div>
