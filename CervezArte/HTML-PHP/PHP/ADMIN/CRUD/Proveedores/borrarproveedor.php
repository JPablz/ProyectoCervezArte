<?php

include_once '../conexionbd.php';

$nrodcmnto_pro=$_GET['nrodcmnto_pro'];

$borrar="DELETE FROM proveedor WHERE nrodcmnto_pro='$nrodcmnto_pro'";

$sql=$conexion->prepare($borrar);
$sql->execute();

header ('location:../../FormulariosyListados/Listados/listadoproveedores.php');

?>