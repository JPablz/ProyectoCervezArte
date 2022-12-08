<?php

session_start();

if (isset($_SESSION['nombre_admin'])) {
    $sesioniniciada=true;
} else {
    header ('location:iniciarsesion.php?sesioniniciada=false');
};

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
        <section class="datosregistrar">
            <table>
                <thead>
                    <tr>
                        <th><h1>REGISTRAR PROVEEDOR</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="../../CRUD/Proveedores/ingresarproveedor.php" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="tpdcmnto_pro">Tipo de documento</label>
                                    <select name="tpdcmnto_pro" id="tpdcmnto_pro" required>
                                        <option hidden selection value="">Elige tipo de documento</option>
                                        <option value="Cédula de ciudadanía">Cédula de ciudadanía</option>
                                        <option value="Cédula de extranjería">Cédula de extranjería</option>
                                    </select>
                                </td>
                                <td>
                                    <label for="nrodcmnto_pro">Número de documento</label>
                                    <input type="number" name="nrodcmnto_pro" id="nrodcmnto_pro" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nom_pro">Nombre de proveedor</label>
                                    <input type="text" name="nom_pro" id="nom_pro" required>
                                </td>
                                <td>
                                    <label for="aplldo_pro">Apellido de proveedor</label>
                                    <input type="text" name="aplldo_pro" id="aplldo_pro" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="crro_pro">Correo electrónico</label>
                                    <input type="email" name="crro_pro" id="crro_pro" required>
                                </td>
                                <td>
                                    <label for="numcel_pro">Número de celular</label>
                                    <input type="number" name="numcel_pro" id="numcel_pro" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="drcn_pro">Dirección</label>
                                    <input type="text" name="drcn_pro" id="drcn_pro" required>
                                </td>
                                <td>
                                    <label for="depen_pro">Dependencia</label>
                                    <input type="text" name="depen_pro" id="depen_pro" required>
                                </td>
                            </tr>
                        </table>
                        <tr>
                            <td>
                                <button type="submit" class="registrar">Registrar proveedor</button>
                            </td>
                        </tr>
                    </form>
                    <tr>
                        <td>
                            <a href="../Listados/listadoproveedores.php"><button>Ver listado de proveedores</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="menuadmin.php"><button>Volver a menú</button></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>