<?php

include_once 'CRUD/conexionbd.php';

if (isset($_GET['nrodcmnto_cli'])) {
    $nrodcmnto_cli=$_GET['nrodcmnto_cli'];    
};

if (isset($_GET['registrarse1pass']) && $_GET['registrarse1pass']==true){
    $tpdcmnto_cli=$_POST['tpdcmnto_cli'];
    $nrodcmnto_cli=$_POST['nrodcmnto_cli'];
    $fchaexpdcncdla_cli=$_POST['fchaexpdcncdla_cli'];


    $sql="INSERT INTO cliente VALUES ('$nrodcmnto_cli',' ',' ',' ',' ',' ','$tpdcmnto_cli','$fchaexpdcncdla_cli')";
    $insertar=$conexion->prepare($sql);
    $insertar->execute();

    $sql2="SELECT * FROM cliente WHERE nrodcmnto_cli='$nrodcmnto_cli'";
    $consultar=$conexion->prepare($sql2);
    $consultar->execute();

    $cliente=$consultar->fetchAll(PDO::FETCH_OBJ);
};

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CervezArte: Registrarse</title>
        <link rel="stylesheet" href="../../CSS/estiloregistrarse2.css">
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
            <section class="datosregistrarse2">
                <form action="CRUD/insertarcliente.php" method="POST" autocomplete="off">
                    <table>
                        <tr>
                            <td><label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nmbr_cli" required></td>
                            <td><label for="contrasena">Apellido</label>
                            <input type="text" id="Apellido" name="aplldo_cli" required></td>
                        </tr>
                        <tr>
                            <td><label for="correo">Correo electrónico</label>
                            <input type="email" id="correo" name="crro_cli" required></td>
                            <td><label for="numcelular">Número de celular</label>
                            <input type="number" id="numcelular" name="numcllar_cli" required></td>
                        </tr>
                        <tr>
                            <td><label for="contrasena">Contraseña</label>
                            <input type="password" id="contrasena" name="cntrsna_cli" required></td>
                            <td><label for="confcontrasena">Confirmar contraseña</label>    
                            <input type="password" id="confcontrasena" name="cnfcntrsna_cli" required></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="nrodcmnto_cli" value="<?php echo  $nrodcmnto_cli; ?>"></td>
                        </tr>
                    </table>
                    <button type="submit">Crear cuenta</button>
                </form>
                <a href="CRUD/atrasregistro.php?nrodcmnto_cli=<?php echo $nrodcmnto_cli; ?>"><button>Atrás</button></a>
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