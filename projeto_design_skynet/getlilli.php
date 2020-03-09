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
    <body style="background-image: URL('images/milky-way-2695569_1920.jpg');">
        <!-- NAV -->
        <?php include_once './menu.php'; ?>
        <div class="row">
            <div class="parallax-container">
                <div class="parallax"><img src="images/woman-3508435_1920.jpg"></div>

            </div>
            <div class="section grey darken-4">
                <div class="row container">
                    <div class="col s12 m10 offset-m1">
                        <span><a href="index.php" class="grey-text text-lighten-3">Página Inicial</a> -> <a href="loja.php" class="grey-text text-lighten-3">Loja</a> -> <a href="lillishop.php" class="grey-text text-lighten-3">Informações da Lilli</a> -> <a href="getlilli.php" class="grey-text text-lighten-3">Obter a Lilli</a></span>
                        <h5 class="header white-text">Negociar</h5>
                        <div class="card-panel hoverable blue darken-4 white-text center">
                            <h6>Digite suas informações abaixo para concluir!</h6>
                        </div>

                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="card hoverable s12">
                                        <div class="card-content grey darken-3">
                                            <h6 class="white-text"><b>Preencha os campos abaixo para se inscrever no programa de Inteligência Artificial Com Interface Linkada (Lilli):</b></h6>
                                            <div class="s6 col" style="margin-left: 1%;"><br>
                                                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                                                <div class="row white-text">
                                                    Digite seu nome: <input type="text" placeholder="Nome:" name="nome" required="">
                                                </div>
                                                <div class="row white-text">
                                                    Digite seu email: <input type="email" placeholder="Email:" name="email" required="">
                                                </div>
                                                <div class="row">
                                                    <div class="white-text">Coloque sua data de nascimento: </div><input type="text" class="datepicker black-text" placeholder="Data:" name="data" required="">
                                                </div>
                                                <div class="row">
                                                    <div class="white-text"><input type="submit" name="env" class="btn blue darken-2" value="Cadastrar"> seu novo usuário de IA
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                            <div class="hide-on-med-and-down">
                                                <img src="images/lilli.png" width="300px;" style="margin-left: 50px;">
                                            </div>
                                            
                                            <br><br>
                                    </div>
                                </div>
                                    <?php
                                        if(isset($_POST['env'])){
                                            $nome = $_POST['nome'];
                                            $email = $_POST['email'];
                                            
                                            echo '<div class="center-align card-panel grey darken-2 white-text">'
                                            . "Olá, $nome! Você receberá um link de confirmação no email $email<br>Desde já, seja muito bem vindo a SkyNet!"
                                                    . '</div>';
                                        }else{
                                            echo '<div class="center-align card-panel grey darken-2 white-text">Status...</div>';
                                        }
                                    ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer class="page-footer blue darken-2">
                <div class="container">
                    <div class="row">
                        <div class="col l6 s12">
                            <h5 class="white-text">Documentação</h5>
                            <p class="grey-text text-lighten-4">SkyNet Corp tem todos os direitos reservados.</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">Dados e informações</h5>
                            <ul>
                                <li><a class="grey-text text-lighten-3" href="ajuda.php">Ajuda</a></li>
                                <li><a class="grey-text text-lighten-3" href="termos.php">Politica de Privacidade<br>Termos de Uso</a></li>
                                <li><a class="grey-text text-lighten-3" href="coockies.php">Politica de Cookies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2019 Etec - Todos os direitos reservados
                    </div>
                </div>
            </footer>
    </body>
    <script src="materialize/js/materialize.min.js" type="text/javascript"></script>
    <script src="materialize/jquery/jquery-3.3.1.js" type="text/javascript"></script>
    <script type="text/javascript">
        M.AutoInit();

    </script>
</html>
