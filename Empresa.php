<?php
include_once "Empleado.php";
class Empresa{
    private $empresa = array();

    public function addEmpleado($empleado){
        if($empleado instanceof Empleado){
            array_push($this->empresa, $empleado);
        }else{
            return "Debes pasar un empleado";
        }
    }

    public function listarEmpleados(){
        $texto = "";
        $ingresos = 0;
        if(sizeof($this->empresa) != 0){

            foreach($this->empresa as $emp){
                $texto.= $emp->mostrar() . "<br/>";
                $ingresos += $emp->ingresos();
            }

        }else{
            return "la lista está vacía";
        }
        
        return $texto;
    }

    public function sumaIngresos(){
        $ingresos = 0;
        if(sizeof($this->empresa) != 0){

            foreach($this->empresa as $emp){
                $ingresos += $emp->ingresos();
            }

        }else{
            return "la lista está vacía";
        }
        
        return $ingresos;
    }
}