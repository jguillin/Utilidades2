<?php

class credencial
{
    private $idCredencial;
    private $usuario;
    private $clave;

     function __construct($usuario, $clave) {
       $this->usuario = $usuario;
       $this->clave = $clave;
     }
    
     function __construct($idCredencial, $usuario, $clave) {
       $this->idCredencial = $idCredencial;
       $this->usuario = $usuario;
       $this->clave = $clave;
     }
    
     function setIdCredencial($idCredencial){
       $this->idCredencial = $idCredencial;
     } 
     function getIdCredencial(){
       return $this->idCredencial;
     }
     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     } 
     function setNombre($clave){
       $this->clave = $clave;
     } 
     function getNombre(){
       return $this->clave;
     } 
}
?> 
