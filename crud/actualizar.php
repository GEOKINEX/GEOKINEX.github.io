<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE cod_estudiante='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel=icon href="https://cdn.icon-icons.com/icons2/1736/PNG/512/4043233-anime-away-face-no-nobody-spirited_113254.png">
        <title>Actualizar</title>
       
    </head>
    <body>
        <center>
                <div class="conta">
                    <h2>ACTUALICEMOS TUS DATOS</h2>
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante']  ?>">
                                <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['cod_estudiante']  ?>">
                                <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="grupo" placeholder="Grupo" value="<?php echo $row['grupo']  ?>">
                               
                                <input type="text" class="form-control mb-3" name="cal1" placeholder="BASE DE DATOS" value="<?php echo $row['cal1']  ?>">
                                <input type="text" class="form-control mb-3" name="cal2" placeholder="PROGRAMACION" value="<?php echo $row['cal2']  ?>">
                                <input type="text" class="form-control mb-3" name="cal3" placeholder="MET Y MOD DE SOFTWARE" value="<?php echo $row['cal3']  ?>">
                                <input type="text" class="form-control mb-3" name="cal4" placeholder="DISENO" value="<?php echo $row['cal4']  ?>">
                                <input type="text" class="form-control mb-3" name="cal5" placeholder="MATEMATICAS" value="<?php echo $row['cal5']  ?>">
                                <input type="text" class="form-control mb-3" name="cal6" placeholder="FOSO" value="<?php echo $row['cal6']  ?>">
                                <input type="text" class="form-control mb-3" name="cal7" placeholder="REDES" value="<?php echo $row['cal7']  ?>">
                                <input type="text" class="form-control mb-3" name="cal8" placeholder="INGLES" value="<?php echo $row['cal8']  ?>">
                                <center>
                                    <input type="submit" class="btn-btn-primary-btn-block" value="Actualizar">
                                </center>
                    </form>
                    
                </div>
        </center>        
    </body>
    <style>
        body{
            background-image: url(https://i.imgur.com/TBjBilg.jpeg);
        }

        .conta{
            background:rgb(8, 95, 37);
            border: 10px solid rgb(126, 96, 26);
            width: 40%;
            height: 630px;
            line-height: 40px;
            color:white;
            border-radius:20px;
        }

        .form-control{
            border-radius:5px;
            width:60%;
            margin:40%,
        }
        
        .btn-btn-primary-btn-block{
            background-color:#4B6BDD;
            color:white;
            padding: 5px;
            border-radius:5px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif ;
            font-size: large;
            margin: 10px;
        }
    </style>
</html>