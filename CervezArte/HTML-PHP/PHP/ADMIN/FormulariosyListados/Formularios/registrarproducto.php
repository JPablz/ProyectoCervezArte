<?php

session_start();

if (isset($_SESSION['nombre_admin'])) {
    $sesioniniciada=true;
} else {
    header ('location:iniciarsesion.php?sesioniniciada=false');
};

include_once '../../CRUD/conexionbd.php';

$consultar="SELECT * FROM facturaprdo_pro";

$sql=$conexion->prepare($consultar);
$sql->execute();

$factura=$sql->fetchAll(PDO::FETCH_OBJ);

$consultar2="SELECT codigo_prdo FROM producto";

$sql2=$conexion->prepare($consultar2);
$sql2->execute();

$codigo_prdo=$sql2->fetchAll(PDO::FETCH_OBJ);

foreach ($codigo_prdo as $c) {}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Productos</title>
    <link rel="stylesheet" href="../../CSS/estiloregistros.css">
    <link rel="icon" href="../../../../../iconos_imagenes/IconoCervezArte.ico" type="image/x-icon">
</head>
<body>
    <main style="margin-top: 4%;">
        <section class="datosregistrar">
            <table>
                <thead>
                    <tr>
                        <th><h1>REGISTRAR PRODUCTO</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="../../CRUD/Productos/ingresarproducto.php" method="POST" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>
                                    <label for="nom_prdo">Nombre del producto</label>
                                    <input type="text" name="nom_prdo" id="nom_prdo" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="vlrunit_prdo">Valor unitario del producto</label>
                                    <input type="number" name="vlrunit_prdo" id="vlrunit_prdo" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="cntnido_prdo">Contenido del producto</label>
                                    <input type="number" name="cntnido_prdo" id="cntnido_prdo" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="cntnidolml_prdo">Contenido del producto (Lt o Ml)</label>
                                    <select name="cntnidolml_prdo" id="cntnidolml_prdo" required>
                                        <option hidden selection value="">Elige Lt o Ml</option>
                                        <option value="Lt">Litros</option>
                                        <option value="Ml">Militros</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="fermen_prdo">Fermentación de la cerveza</label>
                                    <input type="text" name="fermen_prdo" id="fermen_prdo" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="fchacon_prdo">Fecha de consumo preferente del producto</label>
                                    <input type="date" name="fchacon_prdo" id="fchacon_prdo" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="prcn_prdo">Porcentaje de alcohol</label>
                                    <input type="number" name="prcn_prdo" id="prcn_prdo" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="fac_prdo">Factura de producto</label>
                                    <select name="fac_prdo" id="fac_prdo" required>
                                        <option hidden selection value="">Elige factura</option>
                                        <?php foreach ($factura as $fa) { ?>
                                        <option value="<?php echo $fa->id_facpro; ?>"><?php echo $fa->id_facpro; ?></option>
                                        <?php }; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="descrip_prdo">Descripción del producto</label>
                                    <textarea name="descrip_prdo" id="descrip_prdo" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php if (isset($c->codigo_prdo)) { ?>
                                    <label for="codigo_prdo">Código de este producto</label>
                                    <input type="text" name="codigo_prdo" id="codigo_prdo" value="<?php echo $c->codigo_prdo+1;?>" readonly>
                                    <?php } else { ?>
                                        <label for="codigo_prdo">Código de este producto</label>
                                        <input type="text" name="codigo_prdo" id="codigo_prdo" value="1" readonly>
                                    <?php }; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit">Registrar producto</button>
                                </td>
                            </tr>
                        </table>
                    </form>
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