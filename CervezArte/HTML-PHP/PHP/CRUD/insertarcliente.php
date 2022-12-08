<?php

include_once 'conexionbd.php';

$nrodcmnto_cli=$_POST['nrodcmnto_cli'];
$nmbr_cli=$_POST['nmbr_cli'];
$aplldo_cli=$_POST['aplldo_cli'];
$crro_cli=$_POST['crro_cli'];
$numcllar_cli=$_POST['numcllar_cli'];
$cntrsna_cli=$_POST['cntrsna_cli'];
$cnfcntrsna_cli=$_POST['cnfcntrsna_cli'];

if ($cnfcntrsna_cli != $cntrsna_cli) {
    header('location:../registrarse2.php?nrodcmnto_cli='.$nrodcmnto_cli);
} else {
    $cntrsna_cli=password_hash($cnfcntrsna_cli,PASSWORD_ARGON2I);
    $sql2="UPDATE cliente SET nombre_cli='$nmbr_cli',apellido_cli='$aplldo_cli',correo_cli='$crro_cli',numcelular_cli='$numcllar_cli',contrasena_cli='$cntrsna_cli' WHERE nrodcmnto_cli='$nrodcmnto_cli'";
    $insertar=$conexion->prepare($sql2);
    $insertar->execute();
    header('location:../iniciarsesion.php');
};

?>