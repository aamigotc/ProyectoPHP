<?php
include_once "Empleado.php";
class EmpleadoPorComision extends Empleado{
    private $horas;
    private $tarifa;
    private $base;

    public function __construct($nombre, $apellido, $numeroSeguridadSocial, $horas, $tarifa, $base){
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
        $this->horas = $horas;
        $this->tarifa = $tarifa;
        $this->base = $base;
    }



    public function mostrar(){
        $texto = parent::mostrar();
        $texto .= "Ingresos: " . $this->ingresos() ." <br/>";
        return $texto;
    }

    public function ingresos(){
        return ($this->base + $this->horas) * $this->tarifa;
    }
}