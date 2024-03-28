<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=icon href="https://cdn.icon-icons.com/icons2/1736/PNG/512/4043233-anime-away-face-no-nobody-spirited_113254.png">
    <title>registro</title>
</head>
<body>
<div class="row"> 
                    <center>
                        <div class="h">
                            <div class="col">
                                <h1>REGISTRATE</h1>
                                    <form action="insertar2.php" method="POST">

                                        <input type="text" class="form-control" name="usuario" placeholder="USUARIO">
                                        <input type="text" class="form-control" name="contrasena" placeholder="CONTRASEÑA">
                                        <input type="text" class="form-control" name="dni" placeholder="Dni">
                                        <input type="text" class="form-control" name="nombres" placeholder="Nombres">
                                        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
                                        <input type="text" class="form-control" name="grupo" placeholder="Grupo">
                                        <input type="text" class="form-control" name="cal1" placeholder="Base de datos">
                                        <input type="text" class="form-control" name="cal2" placeholder="Programacion">
                                        <input type="text" class="form-control" name="cal3" placeholder="Met y Mod de Software">
                                        <input type="text" class="form-control" name="cal4" placeholder="Diseno">
                                        <input type="text" class="form-control" name="cal5" placeholder="Matematicas">
                                        <input type="text" class="form-control" name="cal6" placeholder="Foso">
                                        <input type="text" class="form-control" name="cal7" placeholder="Redes">
                                        <input type="text" class="form-control" name="cal8" placeholder="Ingles">

                                        <center><input type="submit" class="btn-btn-primary"></center>
                                    </form>
                            </div>
                        </div>
                    </center>    
</body>
<style>
        body{
            background-image:url(https://static.vecteezy.com/system/resources/previews/010/394/589/non_2x/blue-orange-techno-background-free-vector.jpg);
            
        }

        .col{
            background:linear-gradient(#3A96E8,#4263D6,#0F2A8A)  ;
            border:15px ridge #FFD769;
            width: 40%;
            height: 700px;
            line-height: 40px;
            color:white ;
            border-radius:1px;
            text-align: center;
            box-shadow: 0 0 10px 15px rgb(0 0 0 /40%);
        }

        .form-control{
            font-family: 'Times New Roman', Times, serif;
            box-shadow: 0 0 2px 2px rgb(0 0 0 /20%);
            border: 3px solid #FFD769;
            border-radius:5px;
            font-size: larger;
            height: 20px;;
            width:60%;
            margin:40%,
        }
        
        .btn-btn-primary{
            background:linear-gradient(#EB5441,#F4A316,#EFC83F)  ;
            color:white;
            padding: 5px;
            border-radius:5px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif ;
            font-size: large;
            margin: 10px;
        }

        .h{
            padding-top:50px;
        }
    </style>
</html>