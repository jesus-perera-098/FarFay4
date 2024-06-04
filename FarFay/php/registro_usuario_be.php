<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave = hash('sha512', $clave);

// Asignar rol por defecto (3)
$rol_defecto = 3;

// Verificar si el usuario ya existe
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya ha sido registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>      
    ';
    exit();
}

// Insertar usuario en la base de datos
$query = "INSERT INTO usuarios(nombre_completo, usuario, clave, id_rol) 
          VALUES('$nombre_completo', '$usuario', '$clave', '$rol_defecto')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Usuario no almacenado, inténtelo una vez más");
            window.location = "../index.php";
        </script>
    ';
}

mysqli_close($conexion);

?>
