<?php

session_start();

session_destroy();

header ('location:../FormulariosyListados/Formularios/iniciarsesion.php');

?>