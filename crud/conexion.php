<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="GEO0987654321";

    $bd="crud";

    $con=mysqli_connect($host,$user,$pass,$bd);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
