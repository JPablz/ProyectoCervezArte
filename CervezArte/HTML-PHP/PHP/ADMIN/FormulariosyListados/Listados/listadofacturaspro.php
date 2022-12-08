<?php

session_start();

if (isset($_SESSION['nombre_admin'])) {
    $sesioniniciada=true;
} else {
    header ('location:../Formularios/iniciarsesion.php?sesioniniciada=false');
};

include_once '../../CRUD/conexionbd.php';

$sql="SELECT * FROM facturaprdo_pro";
$consultar=$conexion->prepare($sql);
$consultar->execute();
$facturaprdo_pro = $consultar->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/estilolistados.css">
</head>
<body>
    <main>
        <section class="datos">
        <a href="../Formularios/registrarfacturapro.php"><button>Volver al registro</button></a>
            <h1>Listado de las facturas de los proveedores</h1>
            <table style="margin: none !important; width: 100%;">
                <thead>
                    <tr>
                        <th>ID de la factura</th>
                        <th>Cantidad de productos</th>
                        <th>Valor total de la factura</th>
                        <th>Número de documento</th>
                        <th>Código de producto</th>
                        <th>Lote del producto</th>
                        <th>Fecha de la compra del producto</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($facturaprdo_pro as $f){?>
                    <tr>
                        <td><?php echo $f->id_facpro?></td>
                        <td><?php echo $f->cantidad_prdopro?></td>
                        <td><?php echo $f->vlrtotal_facpro?></td>
                        <td><?php echo $f->nrodcmnto_ven?></td>
                        <td><?php echo $f->codigo_prdospro?></td>
                        <td><?php echo $f->lote_prdospro?></td>
                        <td><?php echo $f->fechacompra_facpro?></td>
                        <td>
                            <a href="../Formularios/actualizarfacturasprdo_pro.php?id_facpro=<?php echo $f->id_facpro;?>">  <button>Actualizar</button></a>
                            <a href="../../CRUD/Facturas/borrarlistadofacturaspro.php?id_facpro=<?php echo $f->id_facpro;?>"><button>Borrar</button></a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody> 
            </table>
        </section>
    </main>
</body>
</html>