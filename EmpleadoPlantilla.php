<?php
include_once "Empelado.php";
class EmpleadoPlantilla extends Empleado{
    private $sueldo;
    private $dietas;

    public function __construct($nombre, $apellido, $numeroSeguridadSocial, $sueldo, $dietas){
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
        $this->sueldo = $sueldo;
        $this->dietas = $dietas;
    }

    /**
     * Get the value of dietas
     */ 
    public function getDietas(){
        return $this->dietas;
    }

    /**
     * Set the value of dietas
     */ 
    public function setDietas($dietas){
        $this->dietas = $dietas;
    }

    /**
     * Get the value of sueldo
     */ 
    public function getSueldo(){
        return $this->sueldo;
    }

    /**
     * Set the value of sueldo
     */ 
    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    public function mostrar(){
        $texto = parent::mostrar();
        $texto .= "Sueldo: $this->sueldo <br/>";
        $texto .= "Dietas: $this->dietas <br/>";
        $texto .= "Ingresos: " . $this->ingresos() ." <br/>";
        return $texto;
    }

    public function ingresos(){
        return $this->sueldo + $this->dietas;
    }

}