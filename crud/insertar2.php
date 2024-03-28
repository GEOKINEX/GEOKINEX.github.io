<?php
include("conexion.php");
$con = conectar();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$grupo=$_POST['grupo'];

$cal1=$_POST['cal1'];
$cal2=$_POST['cal2'];
$cal3=$_POST['cal3'];
$cal4=$_POST['cal4'];
$cal5=$_POST['cal5'];
$cal6=$_POST['cal6'];
$cal7=$_POST['cal7'];
$cal8=$_POST['cal8'];

// Insertar en la tabla user
$sql_user = "INSERT INTO user (usuario, contrasena) VALUES ('$usuario', '$contrasena')";
$query_user = mysqli_query($con, $sql_user);

// Insertar en la tabla alumno
$sql_alumno = "INSERT INTO alumno (usuario, contrasena, dni, nombres, apellidos, grupo, trurno, cal1, cal2, cal3, cal4, cal5, cal6, cal7, cal8)  VALUES ('$usuario', '$contrasena','$dni','$nombres','$apellidos','$grupo','$turno','$cal1','$cal2','$cal3','$cal4','$cal5','$cal6','$cal7','$cal8')";
$query_alumno = mysqli_query($con, $sql_alumno);

// Verificar si ambas consultas se realizaron con éxito
if ($query_user && $query_alumno) {
    Header("Location: index.php");
}
?>
