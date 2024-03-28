<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
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

$sql="UPDATE alumno SET dni='$dni',nombres='$nombres',apellidos='$apellidos',grupo=
'$grupo',cal1='$cal1',cal2='$cal2',cal3='$cal3',cal4='$cal4',cal5='$cal5',cal6=
'$cal6',cal7='$cal7',cal8='$cal8' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>


