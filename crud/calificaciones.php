<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Examen 2do parcial Metodologia de Software</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
         <link rel=icon href="https://cdn.icon-icons.com/icons2/1736/PNG/512/4043233-anime-away-face-no-nobody-spirited_113254.png">
        
        <style>
            body{
                background-image: url(https://png.pngtree.com/background/20230526/original/pngtree-futuristic-scifi-hallway-with-glowing-neon-lights-picture-image_2741892.jpg);
                background-size: cover;
            }

            table {
            
                background:linear-gradient(#5B2096,#7704A7)  ;
                
                border: 1px solid white ;
                border-collapse: collapse;
                width: 100%;
                letter-spacing:2px;
                border-radius:10px;
                font-family: monospace;
                
            }
            
            th {
                padding: 8px;
                text-align: left;
               
                border: 1px solid white ;
                letter-spacing:2px;
                border-radius: 20px;
                margin:30px;
            }

            .col2{
                border: 15px ridge #8BF500;
                border-radius: 8px;
                color: white;
                margin:30px;
            }

            .nom{
                background:linear-gradient(#5B2096,#7704A7);
                margin:30px;
                border: 15px ridge #8BF500;
                border-radius:20px;
                color:white;
                text-align: center;
                font-family: monospace;
            }

            .col{
                background:#ABEBEB;
                border: 10px solid #4DB7E8;
                border-radius:20px;
                text-align: center;
                margin:30px;
            }

            .bor{
                background:linear-gradient(#5B2096,#7704A7);
                border: 15px ridge #8BF500;
                width:420px;
                height: 310px;
                font-size: larger;
                color: gold;
                font-family: Arial, Helvetica, sans-serif;
                text-align:center;
                margin: 30px;
                line-height: 15px;
                text-align: center;
                border-radius: 20px;
                animation-name:but;
                animation-duration:2s;
                animation-iteration-count:infinite;
                padding-top:1%;
            }

            .btn-btn-info {
                background-color:#5CE670;
                color:white;
                padding: 5px;
                border-radius:5px;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif ;
                font-size: large;
                margin:5px;
            }

            .btn-btn-danger {
                background:linear-gradient(#EB5441,#F4A316,#EFC83F)  ;
                color:white;
                padding: 5px;
                border-radius:5px;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif ;
                font-size: large;
                margin:5px;
                box-shadow: 0 0 1px 1px rgb(0 0 0 /100%), 0 0 1px 3px rgb(255 255 255 /30%);
                
            }

            .btn-btn-primary {
                background-color:#EA7C01;
                color:white;
                padding: 5px;
                border-radius:5px;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif ;
                font-size: large;
                margin: 10px;
            }

            .btn{
                background:linear-gradient(#EB5441,#F4A316,#EFC83F)  ;
                color:white;
                padding: 5px;
                border-radius:5px;
                text-decoration: none;
                font-family: Arial, Helvetica, sans-serif ;
                font-size: medium;
                font-weight: bold;
                margin: 10px;
                box-shadow: 0 0 1px 1px rgb(0 0 0 /100%);
                animation-name:bot;
                animation-duration:2s;
                animation-iteration-count:infinite;
            }

            @keyframes bot{
                0% {
                    width:420px;
                    padding-top:1%;
                    text-align: center;
                }

                50% {
                    width:34%;
                    color:white;
                    text-align: center;
                    padding-top:1%;
                    font-size:large;
                }

                100% {
                    width:420px;
                    padding-top:1%;
                    text-align: center;
                }
            }

            @keyframes but{
                0% {
                    width:420px;
                    padding-top:1%;
                    text-align: center;
                }

                50% {
                    width:34%;
                    color:white;
                    text-align: center;
                    padding-top:1%;
                    
                }

                100% {
                    width:420px;
                    padding-top:1%;
                    text-align: center;
                }
            }

            .form-control{
                border-radius:5px;
            }
            
            .soc{
                color:transparent;
                margin:10px;
            }
        </style>
    </head>
    <body>
            <div class="container mt-5">
                
                    <div class="row"> 
                        
                        <div class="nom">
                            <h1>TABLA</h1>
                        </div>
                        
                        <div class="col2">
                            <table class="table" >
                                <thead class="table-striped" >
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Dni</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Grupo</th>
                                        <th>Base de datos</th>
                                        <th>Programacion</th>
                                        <th>Met y Mod de Software</th>
                                        <th>Diseno digital</th>
                                        <th>Matematicas</th>
                                        <th>Foso</th>
                                        <th>redes</th>
                                        <th>Ingles</th>
                                        <th>generar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['usuario']?></th>
                                            
                                                <th><?php  echo $row['dni']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>  
                                                <th><?php  echo $row['grupo']?></th> 
                                                 
                                                <th><?php  echo $row['cal1']?></th> 
                                                <th><?php  echo $row['cal2']?></th> 
                                                <th><?php  echo $row['cal3']?></th>
                                                <th><?php  echo $row['cal4']?></th> 
                                                <th><?php  echo $row['cal5']?></th> 
                                                <th><?php  echo $row['cal6']?></th> 
                                                <th><?php  echo $row['cal7']?></th> 
                                                <th><?php  echo $row['cal8']?></th> 
                                               
                                                <th><a href="delete.php" class="btn-btn-danger">PDF</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
                </div>
        <center>  
            <div class="bor">
                <center>
                    <center><h3>ESTA PAGINA FUE HECHA EN EQUIPO </h2></center>
                    <center><a href="integrantesexamen.php" class="btn">LISTA DE INTEGRANTES </a></center>                    
                    <div class=soc>
                        .............
                        <center><img src="https://media0.giphy.com/media/uzWoRrlxnbL6TJgIbP/200w.gif?cid=6c09b9520ow23hrnouzpdwstw57cmzhlcvqav56lgvh01xkk&ep=v1_gifs_search&rid=200w.gif&ct=g" alt="Descripción de la imagen"
                        width="280" height="200px"></center>
                    </div>
                </center>
            </div>
        </center>    
        </div>
    </body>
</html>