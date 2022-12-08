<?php

try {
    $conexion=new PDO('mysql:host=localhost;dbname=cervezarte','root','');
} catch (PDOException $error) {
    echo "Error de conexión. Código: ".$error->getMessage();
};

?>