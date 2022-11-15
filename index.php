<?php
include_once "includes/cabecera.php";
include_once "EmpleadoPlantilla.php";
include_once "EmpleadoPorComision.php";
include_once "PruebaPolimorf.php";
include_once "Empresa.php";

echo "<strong>Empleado:</strong> <br/><br/>";

echo "<strong>EMPLEADO PLANTILLA</strong> <br/>";
$empleado1 = new EmpleadoPlantilla("Aitor", "Amigot", "14-7878786-45", 750, 10);
echo $empleado1->mostrar();

echo "<br/><strong>EMPLEADO POR COMISION </strong><br/>";
$empleado2 = new EmpleadoPorComision("Paco", "Gómez", "12-7889346-25",2,2,500);
echo $empleado2->mostrar();

echo "<br/><strong>PRUEBA POLIMORF</strong><br/>";
echo PruebaPolimorf::calcular($empleado1);
echo PruebaPolimorf::calcular($empleado2);


echo "<br/><strong>Listado Empresa</strong><br/>";
$empresaAitor = new Empresa();
$empresaAitor->addEmpleado($empleado1);
$empresaAitor->addEmpleado($empleado2);
$empresaAitor->addEmpleado(new EmpleadoPlantilla("José", "Martín", "16-82827472-21", 700, 50));
echo $empresaAitor->listarEmpleados();

echo "<br/><strong>Los ingresos totales son: </strong>";
echo $empresaAitor->sumaIngresos();
include_once "includes/pie.php";