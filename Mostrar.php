
<?php
include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";

  echo $c->getId() . "  && " .$c->getNombre() . "  && " .$c->getParcial(). "  && " .$c->getNfinal(). "  && " .$c->getMejoraiento();  
  echo "<a href = 'formulario.php' >Ingresar</a>";  
  echo "</div>"; 
}

?>
