<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_demo'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function deleteDemo($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.demo WHERE id_demo= ?", array("{$id}"));

}
}
?>

