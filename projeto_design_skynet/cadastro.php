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
    <body class="blue darken-2" style="background-image: URL('images/box-1472804.png');">
        <div class="container">
            <div style="margin-top: 3%;" class="card-panel hoverable"><a class="right-align" href="index.php">Voltar</a>
                <div class="left-align">
                    <div class="blue-text text-darken-2">
                        <h5>SkyNet</h5>
                    </div>
                    <div class="white-text card-panel blue">
                        <div class="container">
                            <h6>Quer criar uma conta?</h6>
                        </div>
                        <div style="margin-left: 14%;" class="container">
                            <div class="card transparent z-depth-1-half">
                                <div class="row"></div>
                                <div style="margin-left: 3%;">
                                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                        <fieldset style="border-color: white; margin-right: 3%;">
                                            <legend>SkyNet | Cadastro de usuário</legend>
                                            <div class="col">
                                                Insira seu nome:
                                                <input type="text" name="nome" placeholder="Digite seu nome" class="white-text" required="" autofocus="">
                                                <br><br>
                                                Insira um email:
                                                <input type="email" name="email" placeholder="Digite seu email" class="white-text" required="">
                                                Re-Insira um email:
                                                <input type="email" name="email1" placeholder="Digite seu email" class="white-text" required="">
                                                <br><br>
                                                Insira uma senha:
                                                <input type="password" name="pass" placeholder="Digite sua senha" class="white-text" required="">
                                                Re-Insira uma senha:
                                                <input type="password" name="pass1" placeholder="Digite sua senha" class="white-text" required="">
                                                <br><br>
                                                Quando você nasceu?
                                                <input type="date" name="data" class="white-text">
                                                <div class="row"></div>
                                                <input type="submit" name="env" class="btn blue darken-1" value="Cadastrar"> uma nova conta
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="row"></div>
                                <div class="row"></div>
                            </div>
                        </div>
                    </div>
                    <span class="grey-text text-darken-2" style="margin-left: 1%">© 2019 SkyNet - Todos os direitos reservados</span>
                </div>
            </div>
            <?php
            if (isset($_POST['env'])) {
                $nome = $_POST['nome'];
            }
            ?>
        </div>
        <script src="materialize/js/materialize.min.js" type="text/javascript"></script>
        <script src="materialize/jquery/jquery-3.3.1.js" type="text/javascript"></script>
        <script type="text/javascript">
            M.AutoInit();
        </script>
    </body>
</html>
