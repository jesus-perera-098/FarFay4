<?php
    session_start();
    session_destroy();
    header("location: ../zona_registro.php");

?>