<?php

session_start();

if (isset($_SESSION['nombre_admin'])) {
    $sesioniniciada=true;
} else {
    header ('location:iniciarsesion.php?sesioniniciada=false');
};

include_once '../../CRUD/conexionbd.php';

$nrodcmnto_pro=$_GET['nrodcmnto_pro'];

$consultar="SELECT * FROM proveedor where nrodcmnto_pro='$nrodcmnto_pro'";
$sql=$conexion->prepare($consultar);
$sql->execute();
$proveedor = $sql->fetchAll(PDO::FETCH_OBJ);

foreach ($proveedor as $p){}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Proveedor</title>
    <link rel="stylesheet" href="../../CSS/estiloregistrarproveedor.css">
    <link rel="icon" href="../../../../../iconos_imagenes/IconoCervezArte.ico" type="image/x-icon">
</head>
<body>
    <main>
        <section class="datosregistrar" style="margin-top: 8%;">
            <table>
                <thead>
                    <tr>
                        <th><h1>REGISTRAR PROVEEDOR</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="../../CRUD/Proveedores/actualizarproveedor.php" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="nombre_pro">Nombre del proveedor</label>
                                    <input type="text" name="nombre_pro" id="nombre_pro" required value="<?php echo $p->nombre_pro?>">
                                </td>
                                <td>
                                    <label for="aplldo_pro">Apellido del proveedor</label>
                                    <input type="text" name="aplldo_pro" id="aplldo_pro" required value="<?php echo $p->apellido_pro?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="correo_pro">Correo electrónico del proveedor</label>
                                    <input type="email" name="correo_pro" id="correo_pro" required value="<?php echo $p->correo_pro?>">
                                </td>
                                <td>
                                    <label for="numcelular_pro">Número de celular</label>
                                    <input type="number" name="numcelular_pro" id="numcelular_pro" required value="<?php echo $p->numcelular_pro?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="direccion_pro">Dirección del proveedor</label>
                                    <input type="text" name="direccion_pro" id="direccion_pro" required value="<?php echo $p->direccion_pro?>">
                                </td>
                                <td>
                                    <label for="dependencia_pro">Dependencia de proveedor</label>
                                    <input type="text" name="dependencia_pro" id="dependencia_pro" required value="<?php echo $p->dependencia_pro?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="hidden" name="nrodcmnto_pro" value="<?php echo $nrodcmnto_pro; ?>">
                                </td>
                            </tr>
                        </table>
                        <tr>
                            <td>
                                <button type="submit" class="registrar">Guardar</button>
                            </td>
                        </tr>
                    </form>
                    <tr>
                        <td>
                            <a href="../Listados/listadoproveedores.php"><button>Volver al listado</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>