<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_demo'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
    function deleteDemo($id){
        echo "processing delete id:". $id ."<br>";
        $deleterow = self::$db->deleteRow("DELETE FROM public.demo WHERE id_demo= ?", array("{$id}"));
        echo "delete completed<br>";
    }
}
?>

