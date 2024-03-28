<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM user";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=icon href="https://cdn.icon-icons.com/icons2/1736/PNG/512/4043233-anime-away-face-no-nobody-spirited_113254.png">
    <title>Document</title>
</head>
<body>
<style>
    body{
        background-image: url(https://i.imgur.com/cjbs5pE.jpeg);
    }
</style>

<div class="row"> 
                    
                    <center>
                        <div class="h">
                            <div class="col">
                                <h1>INICIAR SESION</h1>
                                    <form action="redireccionar.php" method="POST">

                                        <center>
                                            <input type="text" class="forn" name="usuario" placeholder="USUARIO">
                                            <input type="text" class="forn" name="contrasena" placeholder="CONTRASEÑA">
                                        </center>

                                        <div class="cont1">
                                            <center><input type="submit" class="btn-btn-primary"></center>
                                        </div>
                                        <div class="cont2">
                                            <div class="cont3">
                                                Sin una cuenta?
                                            </div>
                                            <center><a href="registro.php" class="btn">Registro</a></center>
                                        </div>
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
            width: 35%;
            height: 270px;
            line-height: 40px;
            color:white ;
            border-radius:1px;
            text-align: center;
            box-shadow: 0 0 10px 15px rgb(0 0 0 /40%);
        }

        .forn{
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
            padding-top:15%;
        }

        .cont1 {
            float:left;
            text-align: center;
            padding-left:24%;
            padding-top:34px;
        }

        .cont2{
            float:right;
            text-align: center;
            padding-right:20%;
            
        }
        
        .cont3{
            letter-spacing:1px;
            font-size: medium;
        }

        .btn{
            background:linear-gradient(#EB5441,#F4A316,#EFC83F)  ;
            color:white;
            padding: 5px;
            border-radius:5px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif ;
            font-size: large;
            margin: 10px;
            box-shadow: 0 0 1px 1px rgb(0 0 0 /100%);
        }
    </style>
</html>