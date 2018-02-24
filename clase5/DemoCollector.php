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

//Edita un usuario
  function showDemo($id){
    $row = self::$db->getRows("SELECT * FROM demo where id_demo= ? ", array("{$id}"));

    $ObjDemo = new Demo($row[0]{'id_demo'},$row[0]{'nombre'});
    return $ObjDemo;

}
/*
//Actualiza un usuario
function updateDemo($id,$user){
	$insertrow = self::$db->updateRow("UPDATE public.demo SET user= ? WHERE id_demo= ?", array("{$user}", $id));

}
*/
//Elimina un usuario
function deleteDemo($id){
	$deleterow = self::$db->deleteRow("DELETE FROM public.demo WHERE id_demo= ?", array("{$id}"));

}

//Crea un nuevo usuario
function createDemo($nombre){
	$insertarrow = self::$db->insertRow("INSERT INTO public.demo (nombre) VALUES (?)", array ("{$nombre}"));

}

}
?>

