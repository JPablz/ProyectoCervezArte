<?php

include_once 'CRUD/conexionbd.php';

$consultar="SELECT * FROM producto";

$sql=$conexion->prepare($consultar);
$sql->execute();

$productos=$sql->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CervezArte</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="../../CSS/semantic.css">
        <script src="../../JS/jquery-3.1.1.min.js"></script>
        <script src="../../JS/semantic.js"></script>
        <link rel="stylesheet" href="../../CSS/estiloindex.css">
        <link rel="icon" type="image/x-icon" href="../../iconos_imagenes/IconoCervezArte.ico">
    </head>
    <body>
        <header>
            <a href="index.php" class="LogoCervezArteHV"><img src="../../iconos_imagenes/LogoCervezArte.svg" class="LogoCervezArte"></a>
            <a href="index.php" class="LogoCervezArteHV"><img src="../../iconos_imagenes/LogoCervezArte2.svg" class="LogoCervezArte2"></a>
            <nav class="navegacion">
                <section class="menu">
                    <a href="http://localhost/CervezArte/HTML-PHP/PHP/iniciarsesion.php"><button id="iniciarsesion">Iniciar sesión</button></a>
                    <a href="http://localhost/CervezArte/HTML-PHP/PHP/registrarse.php"><button id="registrarse">Registrarse</button></a>
                    <a href="../HTML/ayuda.html"><button id="ayuda">Ayuda</button></a>
                    <a href="../HTML/sobrenosotros.html"><button id="sobrenosotros">Sobre nosotros</button></a>
                </section>
                <form action="" method="POST">
                    <table class="barradebusqueda">
                        <tr>
                            <td>
                                <input type="text" placeholder="¿Qué buscas?" name="var_barradebusqueda">
                                <button type="submit" class="btn"><i class="fas fa-search icon"></i></button>
                            </td>
                        </tr>
                    </table>
                </form>
            </nav>
        </header>
        <main class="ui container">
            <section class="carrito">
                <a href="carrito.php"><button type="submit"><img src="../../iconos_imagenes/carrito.svg" alt=""></button></a>
            </section>
            <section class="ui link cards">
                <?php foreach ($productos as $ps) { ?>
                <article class="card"> 
                    <article class="image">
                        <img src="../../iconos_imagenes/imgs_prdos/<?php echo $ps->img_prdo; ?>" alt="Cerveza">
                    </article>
                    <article class="content">
                        <h1 class="header center"><?php echo $ps->nombre_prdo; ?></h1>
                    </article>
                    <article class="extra content">
                        <article class="item">
                            <i class="percent icon"></i>
                            <p><?php echo $ps->porcentaje_prdo; ?></p>
                            
                        </article>
                    </article>
                </article>
                <?php }; ?>
            </section>
        </main>
        <footer>
            <article class="contacto">
                <h1>Contacto</h1>
                <p>Teléfono: 12345</p>
                <p>Correo: demostracion@demostracion.com</p>
            </article>
            <article class="redes">
                <h1>Redes Sociales</h1>
                <a href="https://www.facebook.com/" target="_blank"><img src="../../iconos_imagenes/iconofacebook.svg" alt="Facebook"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="../../iconos_imagenes/iconoinstagram.svg" alt="Instagram"></a>
                <a href="https://www.youtube.com/" target="_blank"><img src="../../iconos_imagenes/iconoyoutube.svg" alt="YouTube"></a>
            </article>
        </footer>
    </body>
</html>