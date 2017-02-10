<?php

include_once('Nota.php');
include_once('Collector.php');

class NotaCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM nota ");        
   // echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Nota($c{'id'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejoramiento'},$c{'aprobar'} );
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

 function deleteDemo($a) 
 {
    $rows = self::$db->deleteRow("delete FROM demo where id=$a",null);        
           
 }

 function insertarNota($n,$p,$f,$m,$a) 
 {
    $rows = self::$db->insertRow("insert into nota (nombre, parcial, final, mejoramiento, aprobar) values ($n,$p,$f,$m,$a)",null);        
           
 }

}
?>

