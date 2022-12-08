<?php

session_start();

if (isset($_SESSION['nombre_admin'])) {
    $sesioniniciada=true;
} else {
    header ('location:../Formularios/iniciarsesion.php?sesioniniciada=false');
};

include_once '../../CRUD/conexionbd.php';

$sql="SELECT * FROM proveedor";
$consultar=$conexion->prepare($sql);
$consultar->execute();
$proveeedor = $consultar->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Proveedores</title>
    <link rel="stylesheet" href="../../CSS/estilolistados.css">
    <link rel="icon" href="../../../../../iconos_imagenes/IconoCervezArte.ico" type="image/x-icon">
</head>
<body>
    <main>
        <section class="datos">
            <a href="../Formularios/registrarproveedor.php"><button>Volver al registro</button></a>
            <h1>Listado de los Proveedores</h1>
            <table>
                <thead>
                    <tr>
                        <th>Número de documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo electrónico</th>
                        <th>Celular</th>
                        <th>Dirección</th>
                        <th>Tipo de documento</th>
                        <th>Dependencia</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($proveeedor as $p){?>
                    <tr>
                        <td><?php echo $p->nrodcmnto_pro?></td>
                        <td><?php echo $p->nombre_pro?></td>
                        <td><?php echo $p->apellido_pro?></td>
                        <td><?php echo $p->correo_pro?></td>
                        <td><?php echo $p->numcelular_pro?></td>
                        <td><?php echo $p->direccion_pro?></td>
                        <td><?php echo $p->tipodocumento_pro?></td>
                        <td><?php echo $p->dependencia_pro?></td>
                        <td>
                            <a href="../Formularios/actualizarproveedores.php?nrodcmnto_pro=<?php echo $p->nrodcmnto_pro;?>"><button>Actualizar</button></a>
                            <a href="../../CRUD/Proveedores/borrarproveedor.php?nrodcmnto_pro=<?php echo $p->nrodcmnto_pro;?>"><button>Borrar</button>
                        </td>
                    </tr>
                    <?php }?>
                </tbody> 
            </table>
        </section>
    </main>
</body>
</html>