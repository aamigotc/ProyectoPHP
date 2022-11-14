<?php
include_once "includes/cabecera.php";
include_once "EmpleadoPlantilla.php";
$empleado1 = new EmpleadoPlantilla("Aitor", "Amigot", 23333, 1500, 1000);
echo $empleado1->mostrar();


include_once "includes/pie.php";