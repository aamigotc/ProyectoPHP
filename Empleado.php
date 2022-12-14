<?php
abstract class Empleado{
    private $nombre;
    private $apellido;
    private $numeroSeguridadSocial;

    public function __construct($nombre, $apellido, $numeroSeguridadSocial){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    /**
    * Get the value of numeroSeguridadSocial
    */ 
    public function getNumeroSeguridadSocial(){
        return $this->numeroSeguridadSocial;
    }

    /**
     * Set the value of numeroSeguridadSocial
    */ 
    public function setNumeroSeguridadSocial($numeroSeguridadSocial){
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido(){
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     */ 
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */ 
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function mostrar(){
        $texto = "";

        $texto .= "Está empleado $this->nombre $this->apellido con el NSS: $this->numeroSeguridadSocial <br/>";
        
        return $texto;
    }

    public abstract function ingresos();
}