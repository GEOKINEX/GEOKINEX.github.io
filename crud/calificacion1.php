<?php
include 'conexion.php';

// Conectarse a la base de datos
$con = conectar();

// Consulta SQL para seleccionar los últimos datos registrados
$query = "SELECT * FROM alumno ORDER BY TIEMPO DESC LIMIT 1";

$resultado = mysqli_query($con, $query);

if($resultado) {
    // Obtener los datos y mostrarlos
    $fila = mysqli_fetch_assoc($resultado);
    
    // Mostrar los datos como necesites
    echo "Último registro:<br>";
    echo "tu codigo es : " . $fila['cod_estudiante'] . "<br>";
    echo "tu  dni es : " . $fila['dni'] . "<br>";
    echo "tus nombres son : " . $fila['nombres '] . "<br>";
    echo "tus apellidos son : " . $fila['apellidos'] . "<br>";
    echo "tu grupo es el : " . $fila['grupo'] . "<br>";
    echo "base de datos: " . $fila['cal1'] . "<br>";
    echo " programacion : " . $fila['cal2'] . "<br>";
    echo "met y mod de software: " . $fila['cal3'] . "<br>";
    echo "diseno : " . $fila['cal4'] . "<br>";
    echo "matematicas : " . $fila['cal5'] . "<br>";
    echo "foso : " . $fila['cal6'] . "<br>";
    echo "redes: " . $fila['cal7'] . "<br>";
    echo "ingles: " . $fila['cal8'] . "<br>";
    
    // Continúa mostrando otros campos según tu estructura de base de datos
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($con);
}

// Cerrar la conexión
mysqli_close($con);
?>