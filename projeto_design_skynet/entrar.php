<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>SkyNet</title>
        <link href="stylesheet/global.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-image: URL('images/polygon-2189646_1920.jpg');">
        <div class="container">
            <div class="center">
                <img src="images/logo-EPA.png" class="hide-on-med-and-down" width="150px" style="margin-top: 2%;">
            </div>
            <div style="margin-top: 3%;" class="card-panel hoverable"><a class="right-align" href="index.php">Voltar</a>
                <div class="left-align">
                    <div class="blue-text text-darken-2 hide-on-large-only">
                        <h5>SkyNet</h5>
                    </div>
                    <div class="white-text card-panel blue darken-3">
                        <div class="container">
                            <h6>Entre em sua conta:</h6>
                        </div>
                        <div style="margin-left: 14%;" class="container">
                            <div class="card transparent z-depth-1-half">
                                <div class="row"></div>
                                <div style="margin-left: 3%;">
                                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                        <fieldset style="border-color: white; margin-right: 3%;">
                                            <legend>SkyNet | Login de usuário</legend>
                                            <div class="col" style="margin-right: 150px; margin-left: 100px;">
                                                Email:
                                                <input type="email" name="email" placeholder="Digite seu email" class="white-text" required="" autofocus="">
                                                Senha:
                                                <input type="password" name="pass" placeholder="Digite sua senha" class="white-text">
                                                <br>
                                                <input type="submit" name="env" class="btn blue darken-2" value="Entrar">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="row"></div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                if(isset($_POST['env'])){
                    echo '';
                }
            ?>
        </div>
    </body>
</html>
