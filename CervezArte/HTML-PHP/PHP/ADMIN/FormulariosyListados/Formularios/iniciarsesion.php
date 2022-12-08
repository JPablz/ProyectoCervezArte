<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión Admin</title>
    <link rel="stylesheet" href="../../CSS/estiloiniciarsesion.css">
    <link rel="icon" href="../../../../../iconos_imagenes/IconoCervezArte.ico" type="image/x-icon">
</head>
<body>
    <main>
        <section class="datosiniciarsesion">
            <form action="../../Sesiones/verificardatos.php" method="POST">
                <table>
                    <thead>
                        <tr>
                            <th><h1>INICIAR SESIÓN ADMINISTRADOR</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <table>
                            <tr>
                                <td>
                                    <label for="usu_admin">Usuario</label>
                                    <input type="number" name="usu_admin" id="usu_admin">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="contra_admin">Contraseña</label>
                                    <input type="password" name="contra_admin" id="contra_admin">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit">Iniciar sesión</button>
                                </td>
                            </tr>
                        </table>
                    </tbody>
                </table>
            </form>
            <?php if (isset($_GET['error']) && $_GET['error']==true) { ?>
            <article class="error">
                <h2>Los datos ingresados son incorrectos.</h2>
            </article>
            <?php } elseif (isset($_GET['sesioniniciada']) && $_GET['sesioniniciada']==false) { ?>
            <article class="error">
                <h2>Para ingresar a menú, inicia sesión primero.</h2>
            </article>
            <?php }; ?>
        </section>
    </main>
</body>
</html>