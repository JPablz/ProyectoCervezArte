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
    <title>Menú Administrador</title>
    <link rel="stylesheet" href="../../CSS/estilomenu.css">
    <link rel="icon" href="../../../../../iconos_imagenes/IconoCervezArte.ico" type="image/x-icon">
</head>
<body>
    <main>
        <section class="lista">
            <article>
                <h1>¡IMPORTANTE!</h1>
                <p>A continuación, se presentan las instrucciones a seguir para registrar productos.</p>
                <ol>
                    <li>Registrar proveedor.</li>
                    <li>Registrar factura de proveedor.</li>
                    <li>Registrar producto.</li>
                </ol>
            </article>
        </section>
        <section class="menu">
            <h1>MENÚ DE ADMINISTRADOR</h1>
            <?php if (isset($sesioniniciada) && $sesioniniciada==true) { ?>
            <article class="sesioniniciada">
                <h2>¡Bienvenido, <?php echo $_SESSION['nombre_admin']; ?>!</h2>
            </article>
            <?php }; ?>
            <article>
                <a href="registrarproducto.php"><button>REGISTRAR PRODUCTO</button></a>
                <a href="registrarproveedor.php"><button>REGISTRAR PROVEEDOR</button></a>
                <a href="registrarfacturapro.php"><button>REGISTRAR FACTURA DE PROVEEDOR</button></a>
                <a href="../../Sesiones/cerrarsesion.php"><button class="cerrarsesion">CERRAR SESIÓN</button></a>
            </article>
        </section>
    </main>
</body>
</html>