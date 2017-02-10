
<?php
include_once("NotaCollector.php");

$id =1;

$NotaCollectorObj = new NotaCollector();

foreach ($NotaCollectorObj->showDemos() as $c){
  echo "<div>";

  echo $c->getId() . "  && " .$c->getNombre() . "  && " .$c->getParcial(). "  && " .$c->getNfinal(). "  && " .$c->getMejoraiento();  
  echo "<a href = 'formulario.php' >Ingresar</a>";  
  echo "</div>"; 
}

?>
