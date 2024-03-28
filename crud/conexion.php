<?php
function conectar(){
    $host="mysql.webcindario.com";
    $user="sabo";
    $pass="GEO0987654321";

    $bd="sabo";

    $con=mysqli_connect($host,$user,$pass,$bd);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
