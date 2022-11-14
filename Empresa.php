<?php
include_once "Empleado.php";
class Empresa implements Empleado{
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
        if(sizeof($this->empresa) == 0){

            foreach($this->empresa as $emp){
                $texto.= "$emp <br/>";
            }

        }else{
            return "la lista está vacía";
        }
        
        return $texto;
    }
}