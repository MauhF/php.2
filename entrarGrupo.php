<?php
require('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Entrar em um grupo</title>
</head>
<style>
    .landbox{
        border: 1px solid #000;
        padding: 20px;
        width: 40%;
        height: 40%;
        background: white;
        box-shadow: 10px 20px grey;
        border-radius: 10px 20px 30px;
        position: relative;
        padding-bottom: 5px;
        margin-bottom: 40px;
        bottom: -125px;
    }

    button{
        width: 30%;
border: none;
padding: 15px;
color: black;
font-size: 15px;
cursor: pointer;
border-radius: 10px;
background-color: whitesmoke;
    }
    button:hover{
    background-color: #528B8B;
}
</style>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>
                    <ion-icon name="cafe-outline">

                    </ion-icon>
                    S.R.A
                </h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item">
                        <a href="menu.html" class="nav-link">
                            Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="principal.php" class="nav-link">
                            Menu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Sobre
                        </a>
                    </li>
                </ul>
            </div>
            
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()">
                    <img class="icon" src="assets/img/menu_white_36dp.svg" alt="">
                </button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item">
                    <a href="menu.html" class="nav-link">
                        Início
                    </a>
                </li>
                <li class="nav-item">
                    <a href="principal.php" class="nav-link">
                        Projetos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Sobre
                    </a>
                </li>
            </ul>
           
               
            </div>
        </div>
    </header>
    <center>
        <br><br>
        <div class="landbox">
            <br>
    <h1>Entrar em um Projeto</h1>
    <br>
    <form method="POST" action="novo_colaborador.php">
        <label for="codigo_entrada">Digite o ID do Projeto:</label>
        <input type="text" name="codigo_entrada" id="codigo_entrada" required>
        <br>
       <div class="bts"><br> <br><button type="submit">Entrar</button> </div>

        </div>
    </form>

    </center>

    <script src="./js/script.js"></script>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>