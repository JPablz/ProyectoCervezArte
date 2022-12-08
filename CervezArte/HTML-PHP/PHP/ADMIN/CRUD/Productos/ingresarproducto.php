<?php

include_once '../conexionbd.php';

$codigo_prdo=$_POST['codigo_prdo'];
$nom_prdo=$_POST['nom_prdo'];
$img_prdo=$codigo_prdo.".svg";
$vlrunit_prdo=$_POST['vlrunit_prdo'];
$cntnido_prdo=$_POST['cntnido_prdo']." ".$_POST['cntnidolml_prdo'];
$fermen_prdo=$_POST['fermen_prdo'];
$prcn_prdo=$_POST['prcn_prdo']."%";
$fchacon_prdo=$_POST['fchacon_prdo'];
$fac_prdo=$_POST['fac_prdo'];
$descrip_prdo=$_POST['descrip_prdo'];

$insertar="INSERT INTO producto (nombre_prdo,img_prdo,vlrunit_prdo,fechaconsumo_prdo,fac_prdo,descrip_prdo) VALUES ('$nom_prdo','$img_prdo','$vlrunit_prdo','$cntnido_prdo,'$fermen_prdo','$prcn_prdo','$fchacon_prdo','$fac_prdo','$descrip_prdo')";

$sql=$conexion->prepare($insertar); 
$sql->execute();

header ('location:../../FormulariosyListados/Formularios/registrarproducto.php');

?>