<?php
session_start();
include 'conexion_be.php';

$clave = $_POST['clave'];
$usuario = $_POST['usuario'];
$clave = hash('sha512', $clave);

$verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'");

if (mysqli_num_rows($verificar_login) > 0) {
    $filas = mysqli_fetch_array($verificar_login);

    // Crear página personalizada para el usuario si no existe
    $user_page_dir = "../usuarios/";
    if (!is_dir($user_page_dir)) {
        mkdir($user_page_dir, 0777, true);
    }
    $user_page = $user_page_dir . $usuario . ".php";

    if (!file_exists($user_page)) {
        // Leer contenido de inicio.php
        $inicio_content = file_get_contents('../operador.php');

        // Modificar el contenido para personalizarlo
        $user_page_content = "<?php\n";
        $user_page_content .= "if (session_status() == PHP_SESSION_NONE) {\n";
        $user_page_content .= "    session_start();\n";
        $user_page_content .= "}\n";
        $user_page_content .= "if (!isset(\$_SESSION['usuario']) || \$_SESSION['usuario'] !== '$usuario') {\n";
        $user_page_content .= "    header('Location: ../index.php');\n";
        $user_page_content .= "    exit();\n";
        $user_page_content .= "}\n";
        $user_page_content .= "?>\n";
        $user_page_content .= $inicio_content;

        file_put_contents($user_page, $user_page_content);
    }

    $_SESSION['usuario'] = $usuario;
    
    if ($filas['id_rol'] == 1) {
        header("Location: ../admin.php");
        exit();
    } elseif ($filas['id_rol'] == 2) {
        header("Location: ../admin2.php");
        exit();
    } elseif ($filas['id_rol'] == 3) {
        header("Location: $user_page");
        exit();
    } else {
        header("Location: ../index.php");
        exit();
    }
} else {
    echo '
        <script>
            alert("Usuario no existente, por favor verifique los datos introducidos");
            window.location = "../zona_registro.php";
        </script>
    ';
}

mysqli_free_result($verificar_login);
mysqli_close($conexion);
?>



