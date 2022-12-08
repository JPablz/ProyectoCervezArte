<?php

session_start();

include 'conexionbd.php';

$nrodcmnto_cli=$_POST['nrodcmnto_cli'];
$tpdcmnto_cli=$_POST['tpdcmnto_cli'];
$cntrsna_cli=$_POST['cntrsna_cli'];

$consultar="SELECT * FROM cliente WHERE nrodcmnto_cli='$nrodcmnto_cli'";

$sql=$conexion->prepare($consultar);
$sql->execute();

$cliente=$sql->fetchAll(PDO::FETCH_OBJ);

foreach ($cliente as $ce) {}

if (empty($cliente)) {
    header ('location:../iniciarsesion.php?errornrodcmnto=true');
} else {
    if ($tpdcmnto_cli!=$ce->tipodocumento_cli) {
        header ('location:../iniciarsesion.php?errortpdcmnto=true');
    } elseif (password_verify($cntrsna_cli,$ce->contrasena_cli)) {
        $_SESSION['nom_cli']=$ce->nombre_cli;
        $_SESSION['aplldo_cli']=$ce->apellido_cli;
        $_SESSION['crro_cli']=$ce->correo_cli;
        $_SESSION['numcel_cli']=$ce->numcelular_cli;
        header('location:../../PHP/');
    } else {
        header ('location: ../iniciarsesion.php?errorcntra=true');
    };
}

?>