<?php

include_once 'conexionbd.php';

$nrodcmnto_cli=$_GET['nrodcmnto_cli'];

$sql="DELETE FROM cliente WHERE nrodcmnto_cli='$nrodcmnto_cli'";
$eliminar=$conexion->prepare($sql);
$eliminar->execute();

header('location:../registrarse.php');

?>