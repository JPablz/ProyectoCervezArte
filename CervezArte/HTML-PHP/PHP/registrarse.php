<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CervezArte: Registrarse</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="../../CSS/estiloregistrarse.css">
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
            <section class="datosregistrarse">
                <form action="registrarse2.php?registrarse1pass=true" method="POST">
                    <label for="tipodedocumento">Tipo de documento</label>
                    <select name="tpdcmnto_cli" required>
                        <option hidden selection value="">Selecciona tu tipo de documento</option>
                        <option value="Cédula de Ciudadanía">Cédula de ciudadanía</option>
                        <option value="Cédula de Extranjería">Cédula de extranjería</option>
                        <option value="NUIP">NUIP</option>
                    </select>
                    <label for="documento">Nº Documento</label>
                    <input type="number" id="documento" name="nrodcmnto_cli" required>
                    <label for="fechaexpedicion">Fecha de expedición</label>
                    <input type="date" id="fechaexpedicion" name="fchaexpdcncdla_cli" required>
                    <button type="submit" id="siguiente">Siguiente</button>
                </form>
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