<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Integrantes del equipo</title>
    <link rel=icon href="https://cdn.icon-icons.com/icons2/1736/PNG/512/4043233-anime-away-face-no-nobody-spirited_113254.png">

</head>

<body>

    <div class="cab">

        <center>
            <h1>Lista de Integrantes del Equipo</h1>
        </center>

    </div>

    <div class=azucena>
        <div class=ima>
            <img src="la azucena.jpg" alt="foto azucena" class="fot1" width="180" height="180px">
        </div>
        <div class="data">
            <ul>
                <!-- Aqui se moestrara la lista de los integrantes-->
                <?php
                // <?php
                // Array de integrantes del equipo
                $integrantes = array("NOMBRE: AZUCENA HERNANDEZ NEQUIZ", "GRUPO: EVINED 21", "TURNO: MATUTINO", "PUESTO: BASE DE DATOS", "NO DE ISTA: 8");

                // Mostrar cada integrante como elementos de lista
                foreach ($integrantes as $integrante) {
                    echo "<li>$integrante</li>";
                }

                ?>
            </ul>
        </div>
    </div>

    <div class="fatima">
        <div class="imt">
            <img src="la tima.jpg" alt="foto fatima" class="fot2" width="180" height="180px">
        </div>
        <div class="datt">
            <ul>
                <!-- Aqui se moestrara la lista de los integrantes-->
                <?php
                // <?php
                // Array de integrantes del equipo
                $integrantes = array("NOMBRE: FATIMA ZULEYMA NAVA CEJAS", "GRUPO: EVINED 21", "TURNO: MATUTUINO", "PUESTO: BASE DE DATOS", "NO DE LISTA: 15");

                // Mostrar cada integrante como elementos de lista
                foreach ($integrantes as $integrante) {
                    echo "<li>$integrante</li>";
                }

                ?>

            </ul>
        </div>
    </div>
    <div class="lore">
        <div class="iml">
            <img src="la lore.jpg" alt="foto lore" class="fot3" width="180" height="180px">
        </div>
        <div class="datl">
            <ul>
                <!-- Aqui se moestrara la lista de los integrantes-->
                <?php
                // <?php
                // Array de integrantes del equipo
                $integrantes = array("NOMBRE: ROJAS CRUZ LORENA VIANNEY", "GRUPO: EVINED 21", "TURNO: VESPERTINO", "PUESTO: DISENO Y CODIGO", "NO DE LISTA: 9");

                // Mostrar cada integrante como elementos de lista
                foreach ($integrantes as $integrante) {
                    echo "<li>$integrante</li>";
                }

                ?>

            </ul>
        </div>
    </div>
    <div class="geo">
        <div class="img">
            <img src="el geo.jpg" alt="foto geo" class="fot4" width="180" height="180px">
        </div>
        <div class="datg">
            <ul>
                <!-- Aqui se moestrara la lista de los integrantes-->
                <?php
                // <?php
                // Array de integrantes del equipo
                $integrantes = array("NOMBRE: SANDOVAL RAMOS BRAYAN GEOVANY", "GRUPO: EVINED 21", "TURNO: VESPERTINO", "PUESTO: DISENO Y CODIGO ", "NO DE LISTA: 11");

                // Mostrar cada integrante como elementos de lista
                foreach ($integrantes as $integrante) {
                    echo "<li>$integrante</li>";
                }

                ?>

            </ul>
        </div>
    </div>

    <div class="will">
        <div class="imw">
            <img src="el will.jpg" alt="foto will" class="fot5" width="180" height="180px">
        </div>
        <div class="datw">
            <ul>
                <!-- Aqui se moestrara la lista de los integrantes-->
                <?php
                // <?php
                // Array de integrantes del equipo
                $integrantes = array("NOMBRE: ROMERO DE LA ROSA JOSE IVAN", "GRUPO: EVINED 21", "TURNO: VESPERTINO", "PUESTO: DISENO ", "NO DE LISTA: 10");

                // Mostrar cada integrante como elementos de lista
                foreach ($integrantes as $integrante) {
                    echo "<li>$integrante</li>";
                }

                ?>

            </ul>
        </div>
    </div>
    <style>
        body {
            background-image: url(https://e1.pxfuel.com/desktop-wallpaper/815/957/desktop-wallpaper-black-brick-wall-texture-masonry.jpg);
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            background-size: cover;
        }

        .ima {
            float: left;

            border: solid white;
            width: 180px;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            margin-left: 5px;
            box-shadow: 0 0 9px 7px rgb(255 174 0 /60%), 0 0 9px 7px rgb(255 174 0 /60%) inset;
            animation-name: luces5;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .fot1 {
            border-radius: 15px;
        }

        .data {
            background: rgb(33, 34, 34);
            float: left;
            border: solid white;
            width: 32%;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            box-shadow: 0 0 9px 7px rgb(255 174 0 /60%), 0 0 9px 7px rgb(255 174 0 /60%) inset;
            animation-name: luces5;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .imt {

            float: left;
            border: solid white;
            width: 180px;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            margin-left: 5px;
            box-shadow: 0 0 9px 7px rgb(238 255 0 /60%), 0 0 9px 7px rgb(238 255 0 /60%) inset;
            animation-name: luces4;
            animation-duration: 5s;
            animation-iteration-count: infinite;

        }

        .fot2 {
            border-radius: 15px;
        }

        .datt {
            background: rgb(33, 34, 34);
            float: left;
            border: solid white;
            width: 32%;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            box-shadow: 0 0 9px 7px rgb(238 255 0 /60%), 0 0 9px 7px rgb(238 255 0 /60%) inset;
            animation-name: luces4;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .iml {

            float: left;
            border: solid white;
            width: 180px;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            margin-left: 5px;
            box-shadow: 0 0 9px 7px rgb(152 96 255 /60%), 0 0 9px 7px rgb(152 96 255 /60%) inset;
            animation-name: luces3;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .fot3 {
            border-radius: 15px;
        }

        .datl {
            background: rgb(33, 34, 34);
            float: left;
            border: solid white;
            width: 32%;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            box-shadow: 0 0 9px 7px rgb(152 96 255 /60%), 0 0 9px 7px rgb(152 96 255 /60%) inset;
            animation-name: luces3;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .img {

            float: left;
            border: solid white;
            width: 180px;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            margin-left: 5px;
            box-shadow: 0 0 9px 7px rgb(56 241 241 /60%), 0 0 9px 7px rgb(56 241 241 /60%) inset;
            animation-name: luces2;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .fot4 {
            border-radius: 15px;
        }

        .datg {
            background: rgb(33, 34, 34);
            float: left;
            border: solid white;
            width: 32%;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            box-shadow: 0 0 9px 7px rgb(56 241 241 /60%), 0 0 9px 7px rgb(56 241 241 /60%) inset;
            animation-name: luces2;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .cab {
            background: rgb(33, 34, 34);
            height: 80px;
            margin: 11px;
            border-radius: 9px;
            text-align: center;
            padding: 1px;
            border: solid white;
            color: white;
            box-shadow: 0 0 9px 7px rgb(255 0 0 /60%), 0 0 9px 7px rgb(255 0 0 /60%) inset;
            animation-name: luces6;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .imw {

            float: left;
            border: solid white;
            width: 180px;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            margin-left: 5px;
            box-shadow: 0 0 9px 7px rgb(32 212 92 /60%), 0 0 9px 7px rgb(32 212 92 /60%) inset;
            animation-name: luces;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .fot5 {
            border-radius: 15px;
        }

        .datw {
            background: rgb(33, 34, 34);
            float: left;
            border: solid white;
            width: 32%;
            height: 180px;
            border-radius: 20px;
            margin: 9px;
            box-shadow: 0 0 9px 7px rgb(32 212 92 /60%), 0 0 9px 7px rgb(32 212 92 /60%) inset;
            animation-name: luces;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        .azucena {
            margin: 3px;
        }

        .fatima {
            margin: 3px;
        }

        .lore {
            margin: 3px;
        }

        .geo {
            margin: 3px;
        }

        .will {
            margin: 3px;
        }

        @keyframes luces {
            0% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            25% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(32 212 92 /60%), 0 0 9px 7px rgb(32 212 92 /60%) inset;
                border: solid white;
            }

            50% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(32 212 92 /60%), 0 0 9px 7px rgb(32 212 92 /60%) inset;
                border: solid white;
            }

            75% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);
            }

            78% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(32 212 92 /60%), 0 0 9px 7px rgb(32 212 92 /60%) inset;
                border: solid white;
            }

            80% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            100% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(32 212 92 /60%), 0 0 9px 7px rgb(32 212 92 /60%) inset;
                border: solid white;
            }
        }

        @keyframes luces2 {
            0% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            25% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(56 241 241 /60%), 0 0 9px 7px rgb(56 241 241 /60%) inset;
                border: solid white;
            }

            50% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(56 241 241 /60%), 0 0 9px 7px rgb(56 241 241 /60%) inset;
                border: solid white;
            }

            75% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);
            }

            78% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(56 241 241 /60%), 0 0 9px 7px rgb(56 241 241 /60%) inset;
                border: solid white;
            }

            80% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            100% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(56 241 241 /60%), 0 0 9px 7px rgb(56 241 241 /60%) inset;
                border: solid white;
            }
        }

        @keyframes luces3 {
            0% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            25% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(152 96 255 /60%), 0 0 9px 7px rgb(152 96 255 /60%) inset;
                border: solid white;
            }

            50% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(152 96 255 /60%), 0 0 9px 7px rgb(152 96 255 /60%) inset;
                border: solid white;
            }

            75% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);
            }

            78% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(152 96 255 /60%), 0 0 9px 7px rgb(152 96 255 /60%) inset;
                border: solid white;
            }

            80% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            100% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(152 96 255 /60%), 0 0 9px 7px rgb(152 96 255 /60%) inset;
                border: solid white;
            }
        }


        @keyframes luces4 {
            0% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            25% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(238 255 0 /60%), 0 0 9px 7px rgb(238 255 0 /60%) inset;
                border: solid white;
            }

            50% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(238 255 0 /60%), 0 0 9px 7px rgb(238 255 0 /60%) inset;
                border: solid white;
            }

            75% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);
            }

            78% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(238 255 0 /60%), 0 0 9px 7px rgb(238 255 0 /60%) inset;
                border: solid white;
            }

            80% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            100% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(238 255 0 /60%), 0 0 9px 7px rgb(238 255 0 /60%) inset;
                border: solid white;
            }
        }


        @keyframes luces5 {
            0% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            25% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(255 174 0 /60%), 0 0 9px 7px rgb(255 174 0 /60%) inset;
                border: solid white;
            }

            50% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(255 174 0 /60%), 0 0 9px 7px rgb(255 174 0 /60%) inset;
                border: solid white;
            }

            75% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);
            }

            78% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(255 174 0 /60%), 0 0 9px 7px rgb(255 174 0 /60%) inset;
                border: solid white;
            }

            80% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border: solid rgb(85, 85, 85);

            }

            100% {
                background: rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(255 174 0 /60%), 0 0 9px 7px rgb(255 174 0 /60%) inset;
                border: solid white;
            }
        }


        
        @keyframes luces6 { 
            0% {
                background:rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border:solid rgb(85, 85, 85)

            }

            25% {
                background:rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(255 0 0 /60%), 0 0 9px 7px rgb(255 0 0 /60%) inset;
                border:solid white;
            }

            50% {
                background:rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(255 0 0 /60%), 0 0 9px 7px rgb(255 0 0 /60%) inset;
                border:solid white;
            }

            75% {
                background:rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border:solid rgb(85, 85, 85)
            }

            78% {
                background:rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(255 0 0 /60%), 0 0 9px 7px rgb(255 0 0 /60%) inset;
                border:solid white;
            }

            80% {
                background:rgb(33, 34, 34);
                box-shadow: 0 0 0px 0px rgb(85 85 85 /0%), 0 0 0px 0px rgb(85 85 85 /0%) inset;
                border:solid rgb(85, 85, 85)
            
            }

            100% {
                background:rgb(33, 34, 34);
                box-shadow: 0 0 9px 7px rgb(255 0 0 /60%), 0 0 9px 7px rgb(255 0 0 /60%) inset;
                border:solid white;
            }
        }
    </style>

</body>

</html>