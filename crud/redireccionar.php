<?php
include("conexion.php");
$con = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprobar si se han proporcionado tanto el nombre de usuario como la contraseña
    if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        // Consulta para verificar si el nombre de usuario y la contraseña proporcionados coinciden con un registro en la base de datos
        $sql = "SELECT * FROM user WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
        $resultado = mysqli_query($con, $sql);

        if ($resultado) {
            // Si se encontraron resultados, significa que las credenciales son válidas
            if (mysqli_num_rows($resultado) > 0) {
                // Iniciar sesión y almacenar información del usuario si es necesario
                session_start();
                $_SESSION['usuario'] = $usuario;

                // Redirigir a calificaciones.php
                header("Location:calificaciones.php");
                exit();
            } else {
                // Usuario o contraseña incorrectos, redirigir de nuevo a la página de inicio de sesión con un mensaje de error
                header("Location: login.php?error=credenciales_invalidas");
                exit();
            }
        } else {
            // Error en la consulta, redirigir de nuevo a la página de inicio de sesión con un mensaje de error
            header("Location: login.php?error=error_consulta");
            exit();
        }
    } else {
        // Nombre de usuario o contraseña no proporcionados, redirigir de nuevo a la página de inicio de sesión con un mensaje de error
        header("Location: login.php?error=credenciales_faltantes");
        exit();
    }
} else {
    // Redirigir de nuevo a la página de inicio de sesión si se accede directamente
    header("Location: login.php");
    exit();
}
?>
