<?php

session_start();

if (isset($_SESSION['nombre_admin'])) {
    $sesioniniciada=true;
} else {
    header ('location:iniciarsesion.php?sesioniniciada=false');
};

include_once '../../CRUD/conexionbd.php';

$id_facpro=$_GET['id_facpro'];

$consultar="SELECT * FROM facturaprdo_pro WHERE id_facpro='$id_facpro'";
$sql=$conexion->prepare($consultar);
$sql->execute();

$factura = $sql->fetchAll(PDO::FETCH_OBJ);

foreach ($factura as $f){}

$consultar2="SELECT * FROM proveedor";
$sql2=$conexion->prepare($consultar2);
$sql2->execute();

$proveedor=$sql2->fetchAll(PDO::FETCH_OBJ);

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
                        <th><h1>Actualizar factura de proveedor</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="../../CRUD/Facturas/actualizarfacturaprdo_pro.php" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="cantidad_prdopro">Cantidad del producto</label>
                                    <input type="number" name="cantidad_prdopro" id="cantidad_prdopro" required value="<?php echo $f->cantidad_prdopro?>">
                                </td>
                                <td>
                                    <label for="vlrtotal_facpro">Valor total de la factura</label>
                                    <input type="number" name="vlrtotal_facpro" id="vlrtotal_facpro" required value="<?php echo $f->vlrtotal_facpro?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nrodcmnto_ven">Proveedor</label>
                                    <select name="nrodcmnto_ven" id="nrodcmnto_ven" required>
                                        <option hidden selection value="">Elige proveedor</option>
                                        <?php foreach ($proveedor as $p) { ?>
                                        <option value="<?php echo $p->nrodcmnto_pro; ?>"><?php echo $p->nombre_pro; ?></option>
                                        <?php }; ?>
                                    </select>
                                </td>
                                <td>
                                    <label for="codigo_prdospro">Códigos de los productos</label>
                                    <textarea name="codigo_prdospro" id="codigo_prdospro" required value="<?php echo $f->codigo_prdospro?>"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="lote_prdospro">Lote del producto</label>
                                    <input type="number" name="lote_prdospro" id="lote_prdospro" required value="<?php echo $f->lote_prdospro?>">
                                </td>
                                <td>
                                    <label for="fechacompra_facpro">Fecha de compra del producto</label>
                                    <input type="date" name="fechacompra_facpro" id="fechacompra_facpro" required value="<?php echo $f->fechacompra_facpro?>">
                                </td>
                                <td>
                                    <input type="hidden" name="id_facpro" value="<?php echo $id_facpro; ?>" readonly>
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
                            <a href="../Listados/listadofacturaspro.php"><button>Volver al listado</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>