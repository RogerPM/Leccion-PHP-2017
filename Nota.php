<?php

class Nota
{
    private $id;
    private $nombre;
    private $parcial;
    private $nfinal;
    private $mejoramiento;
    private $aprueba;
    
     function __construct($id, $nombre,$parcial,$nfinal,$mejoramiento) {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
       $this->nfinal = $nfinal;
       $this->mejoramiento = $mejoramiento;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     }

     function setNfinal($nfinal){
       $this->nfinal = $nfinal;
     } 
     function getNfinal(){
       return $this->nfinal;
     }

     function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoraiento(){
       return $this->mejoramiento;
     }

     function setAprueba($aprueba){
       $this->aprueba = $aprueba;
     } 
     function getAprueba(){
       return $this->aprueba;
     } 
}

?> 
