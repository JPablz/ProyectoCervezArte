<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CervezArte: Iniciar Sesión</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="../../CSS/estiloiniciarsesion.css">
        <link rel="icon" type="image/x-icon" href="../../iconos_imagenes/IconoCervezArte.ico">
    </head>
    <body>
        <header>
            <a href="index.php" class="LogoCervezArteHV"><img src="../../iconos_imagenes/LogoCervezArte.svg" class="LogoCervezArte"></a>
            <a href="index.php" class="LogoCervezArteHV"><img src="../../iconos_imagenes/LogoCervezArte2.svg" class="LogoCervezArte2"></a>
            <nav class="menu">
                <a href="http://localhost/CervezArte/HTML-PHP/PHP/iniciarsesion.php"><button id="iniciarsesion">Iniciar sesión</button></a>
                <a href="http://localhost/CervezArte/HTML-PHP/PHP/registrarse.php"><button id="registrarse">Registrarse</button></a>
                <a href="../HTML/ayuda.html"><button id="ayuda">Ayuda</button></a>
                <a href="../HTML/sobrenosotros.html"><button id="sobrenosotros">Sobre nosotros</button></a>
            </nav>
        </header>
        <main>
            <section class="datosiniciosesion">
                <form action="CRUD/iniciarsesioncliente.php" method="POST" autocomplete="off">
                    <label for="tipodedocumento">Tipo de documento</label>
                    <select name="tpdcmnto_cli" id="tipodedocumento" required>
                        <option hidden selection value="">Selecciona tu tipo de documento</option>
                        <option value="Cédula de Ciudadanía">Cédula de ciudadanía</option>
                        <option value="Cédula de Extranjería">Cédula de extranjería</option>
                        <option value="NUIP">NUIP</option>
                    </select>
                    <label for="documento">Nº Documento</label>
                    <input type="text" id="documento" name="nrodcmnto_cli" required>
                    <label for="contraseña">Contraseña</label>
                    <input type="password" id="contraseña" name="cntrsna_cli" required>
                    <article class="error">
                        <?php if (isset($_GET['errornrodcmnto']) && $_GET['errornrodcmnto']==true) {
                            ?> <h3>El número de documento no esta registrado. Reingresa tus datos o <a href="registrarse.php">regístrate</a>.</h3> <?php
                        } elseif (isset($_GET['errortpdcmnto']) && $_GET['errortpdcmnto']==true) {
                            ?> <h3>El tipo de documento no coincide con la información ingresada. Reingresa los datos.</h3> <?php
                        } elseif (isset($_GET['errorcntra']) && $_GET['errorcntra']==true) {
                            ?> <h3>Contraseña incorrecta. Ingresa nuevamente los datos.</h3> <?php
                        }; ?>
                    </article>
                    <input type="submit" value="Iniciar sesión" id="iniciar">
                </form>
                <button onclick="document.location='recuperarcontrasena.html'" id="recuperar">Recuperar contraseña</button>
            </section>
        </main>
        <footer>
            <section class="contacto">
                <h1>Contacto</h1>
                <p>Teléfono: 12345</p>
                <p>Correo: demostracion@demostracion.com</p>
            </section>
            <section class="redes">
                <h1>Redes Sociales</h1>
                <a href="https://www.facebook.com/" target="_blank"><img src="../../iconos_imagenes/iconofacebook.svg" alt="Facebook"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="../../iconos_imagenes/iconoinstagram.svg" alt="Instagram"></a>
                <a href="https://www.youtube.com/" target="_blank"><img src="../../iconos_imagenes/iconoyoutube.svg" alt="YouTube"></a>
            </section>
        </footer>
    </body>
</html>