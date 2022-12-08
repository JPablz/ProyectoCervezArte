<?php

include_once '../../CRUD/conexionbd.php';

$id_facpro = $_GET['id_facpro'];

$sql = "DELETE FROM facturaprdo_pro WHERE id_facpro='$id_facpro'";

$borrar=$conexion->prepare($sql);
$borrar->execute();

header("location:../../FormulariosyListados/Listados/listadofacturaspro.php");

?>