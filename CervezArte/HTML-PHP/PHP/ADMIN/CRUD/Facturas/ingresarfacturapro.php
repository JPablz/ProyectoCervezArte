<?php

include_once '../conexionbd.php';

$cntidad_prdos=$_POST['cntidad_prdos'];
$vlrttl_fac=$_POST['vlrttl_fac'];
$nrodcmnto_ven=$_POST['nrodcmnto_ven'];
$cdgos_prdos=$_POST['cdgos_prdos'];
$lote_prdos=$_POST['lote_prdos'];
$fchacom_fac=$_POST['fchacom_fac'];

$insertar="INSERT INTO facturaprdo_pro (cantidad_prdopro,vlrtotal_facpro,nrodcmnto_ven,codigo_prdospro,lote_prdospro,fechacompra_facpro) VALUES ('$cntidad_prdos','$vlrttl_fac','$nrodcmnto_ven','$cdgos_prdos','$lote_prdos','$fchacom_fac')";

$sql=$conexion->prepare($insertar);
$sql->execute();

header ('location:../../FormulariosyListados/Listados/listadofacturaspro.php');

?>