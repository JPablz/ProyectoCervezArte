<?php

session_start();

include_once '../CRUD/conexionbd.php';

$usu_admin=$_POST['usu_admin'];
$contra_admin=$_POST['contra_admin'];

$consultar="SELECT * FROM admins WHERE dcmnto_admin='$usu_admin'";

$sql=$conexion->prepare($consultar);
$sql->execute();

$admin=$sql->fetchAll(PDO::FETCH_OBJ);

foreach ($admin as $a) {};

if (empty($admin)) {
    header ('location:../FormulariosyListados/Formularios/iniciarsesion.php?error='.true);
} else {
    if (password_verify($contra_admin,$a->contrasena_admin)) {
        $_SESSION['nombre_admin']=$a->nombre_admin;
        header ('location:../FormulariosyListados/Formularios/menuadmin.php');
    } else {
        header ('location:../FormulariosyListados/Formularios/iniciarsesion.php?error='.true);
    };
};

?>