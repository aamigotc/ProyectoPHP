<?php
class PruebaPolimorf{
    public static function calcular($empleado){
        if($empleado instanceof Empleado){
            return $empleado->ingresos();
        }else{
            return "Debes pasar un empleado";
        }
    }
}