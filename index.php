<?php
include_once "includes/cabecera.php";
include_once "EmpleadoPlantilla.php";
include_once "EmpleadoPorComision.php";
include_once "PruebaPolimorf.php";
echo "EMPLEADO PLANTILLA <br/>";
$empleado1 = new EmpleadoPlantilla("Aitor", "Amigot", 23333, 1500, 1000);
echo $empleado1->mostrar();
echo "<br/>EMPLEADO POR COMISION <br/>";

$empleado2 = new EmpleadoPorComision("Paco", "Gómez", 2352512,12,2,1500);
echo $empleado2->mostrar();
echo "<br/>PRUEBA POLIMORF<br/>";
echo PruebaPolimorf::calcular($empleado2);
include_once "includes/pie.php";