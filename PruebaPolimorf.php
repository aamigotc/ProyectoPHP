<?php
class PruebaPolimorf{
    public static function calcular($empleado){
        if($empleado instanceof Empleado){
            return "Los ingresos de " .$empleado->getNombre() . " son " .$empleado->ingresos() ."<br/>";
        }else{
            return "Debes pasar un empleado";
        }
    }
}