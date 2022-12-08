<?php

include_once '../conexionbd.php';

$id_facpro=$_POST['id_facpro'];
$cantidad_prdopro=$_POST['cantidad_prdopro'];
$vlrtotal_facpro=$_POST['vlrtotal_facpro'];
$nrodcmnto_ven=$_POST['nrodcmnto_ven'];
$codigo_prdospro=$_POST['codigo_prdospro'];
$lote_prdospro=$_POST['lote_prdospro'];
$fechacompra_facpro=$_POST['fechacompra_facpro'];

$actualizar="UPDATE facturaprdo_pro SET cantidad_prdopro='$cantidad_prdopro',vlrtotal_facpro='$vlrtotal_facpro',nrodcmnto_ven='$nrodcmnto_ven',codigo_prdospro='$codigo_prdospro',lote_prdospro='$lote_prdospro',fechacompra_facpro='$fechacompra_facpro' WHERE id_facpro='$id_facpro'";
$sql=$conexion->prepare($actualizar);
$sql->execute();

header('location:../../FormulariosyListados/Listados/listadofacturaspro.php')

?>