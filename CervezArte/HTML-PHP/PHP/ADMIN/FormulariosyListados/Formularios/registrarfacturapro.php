<?php

session_start();

if (isset($_SESSION['nombre_admin'])) {
    $sesioniniciada=true;
} else {
    header ('location:iniciarsesion.php?sesioniniciada=false');
};

include_once '../../CRUD/conexionbd.php';

$consultar="SELECT * FROM proveedor";

$sql=$conexion->prepare($consultar);
$sql->execute();

$vendedor=$sql->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Factura</title>
    <link rel="stylesheet" href="../../CSS/estiloregistros.css">
    <link rel="icon" href="../../../../../iconos_imagenes/IconoCervezArte.ico" type="image/x-icon">
</head>
<body>
    <main>
        <section class="datosregistrar">
            <table>
                <thead>
                    <tr>
                        <th><h1>REGISTRAR FACTURA DE PROVEEDOR</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="../../CRUD/Facturas/ingresarfacturapro.php" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="cntidad_prdos">Cantidad total de productos</label>
                                    <input type="number" name="cntidad_prdos" id="cntidad_prdos" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="vlrttl_fac">Valor total de la factura</label>
                                    <input type="number" name="vlrttl_fac" id="vlrttl_fac" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nrodcmnto_ven">Proveedor</label>
                                    <select name="nrodcmnto_ven" id="nrodcmnto_ven" required>
                                        <option hidden selection value="">Elige proveedor</option>
                                        <?php foreach ($vendedor as $v) { ?>
                                        <option value="<?php echo $v->nrodcmnto_pro; ?>"><?php echo $v->nombre_pro; ?></option>
                                        <?php }; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="cdgos_prdos">Código de productos</label>
                                    <textarea name="cdgos_prdos" id="cdgos_prdos" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="lote_prdos">Lote de productos</label>
                                    <input type="number" name="lote_prdos" id="lote_prdos">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="fchacom_fac">Fecha de compra</label>
                                    <input type="date" name="fchacom_fac" id="fchacom_fac">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit">Registrar factura</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <tr>
                        <td>
                            <a href="../Listados/listadofacturaspro.php"><button>Ver listado de facturas</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="menuadmin.php"><button>Volver al menú</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>