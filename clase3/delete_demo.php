<?php
session_start();
?>
<html>
    <head></head>
    <body>
        <div>
        <?php
            $id=$_GET["id"];
            include_once("DemoCollector.php");
            $DemoCollectorObj = new DemoCollector();
            $DemoCollectorObj->deleteDemo($id);
            echo "valor id" . htmlspecialchars($id) . " ha sido eliminado correctamente.";
        ?>
        </div>
    </body>
</html>