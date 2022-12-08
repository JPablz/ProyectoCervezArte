<?php

include_once '../conexionbd.php';

$tpdcmnto_pro=$_POST['tpdcmnto_pro'];
$nrodcmnto_pro=$_POST['nrodcmnto_pro'];
$nom_pro=$_POST['nom_pro'];
$aplldo_pro=$_POST['aplldo_pro'];
$crro_pro=$_POST['crro_pro'];
$numcel_pro=$_POST['numcel_pro'];
$drcn_pro=$_POST['drcn_pro'];
$depen_pro=$_POST['depen_pro'];

$insertar="INSERT INTO proveedor VALUES ('$nrodcmnto_pro','$nom_pro','$aplldo_pro','$crro_pro','$numcel_pro','$drcn_pro','$tpdcmnto_pro','$depen_pro')";

$sql=$conexion->prepare($insertar);
$sql->execute();

header ('location:../../FormulariosyListados/Listados/listadoproveedores.php');

?>