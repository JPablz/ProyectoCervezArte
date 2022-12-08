<?php

include_once '../conexionbd.php';

$nrodcmnto_pro=$_POST['nrodcmnto_pro'];
$nombre_pro = $_POST['nombre_pro'];
$apellido_pro=$_POST['apellido_pro'];
$correo_pro=$_POST['correo_pro'];
$numcelular_pro=$_POST['numcelular_pro'];
$direccion_pro=$_POST['direccion_pro'];
$dependencia_pro=$_POST['dependencia_pro'];

$actualizar="UPDATE proveedor SET nombre_pro='$nombre_pro', apellido_pro='$apellido_pro', correo_pro='$correo_pro',numcelular_pro='$numcelular_pro',direccion_pro='$direccion_pro',dependencia_pro='$dependencia_pro' WHERE nrodcmnto_pro='$nrodcmnto_pro'";

$sql=$conexion->prepare($actualizar);
$sql->execute();

header ('../../FormulariosyListados/Listados/listadoproveedores.php');

?>