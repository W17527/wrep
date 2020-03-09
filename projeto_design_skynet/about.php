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
    <body class="grey lighten-4">
        <!-- NAV -->
        <?php include_once './menu.php'; ?>
        <div class="row">
            <div class="parallax-container">
                <div class="parallax"><img src="images/eye.jpg"></div>

            </div>
            <div class="section white">
                <div class="row container">
                    <div class="col s12 m10 offset-m1">
                        <span><a href="index.php" class="grey-text text-darken-3">Página Inicial</a> -> <a href="about.php" class="grey-text text-darken-3">Quem somos nós?</a></span>

                        <h5 class="header">Sobre nós!</h5>
                        <div class="card-panel hoverable blue lighten-2 white-text">

                            <h6>Encontre todas as informações que precisa saber sobre nós bem aqui!</h6>
                        </div>

                    </div>
                    <div class="row"></div>

                    <div class="row">

                        <div class="col s12">
                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="card hoverable">
                                        <div class="card-image">
                                            <img src="images/sec.jpg">
                                            <span class="card-title">Quem somos nós?</span>
                                        </div>
                                        <div class="card-content">
                                            <p>Nós somos uma empresa global que quer levar ao mundo a melhor experiência possível, desde
                                                robôs domésticos à uma inteligência artificial extremamente complexa e segura com todas as informações existentes
                                                conhecidas pelo homem. Tudo isso ao seu dispôr!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="card hoverable">
                                        <div class="card-image">
                                            <img src="images/interrogacao.jpg">
                                            <span class="card-title">Por quê queremos um mundo melhor?</span>
                                        </div>
                                        <div class="card-content">
                                            <p>Nosso mundo é um mundo mais rápido quando está conectado! Então por quê não conectar o mundo inteiro num só lugar?
                                                Nos preocupamos com o bem estar das pessoas, dos animais e estamos inteiramente a favor da preservação da natureza.
                                                Se depender de nós, esse mundo só vai melhorar! Mais arvores, mais flores, mais felicidade a todos!
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s6" style="margin-left: 7%;">
                        <div class="row">
                            <div class="col s12 m10">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/cadeadovet.png">
                                        <span class="card-title blue-text text-lighten-3">Segurança</span>
                                    </div>
                                    <div class="card-content">
                                        <p>A SkyNet tem a mais completa segurança de rede, com mais de 500 Mil servidores em cada país, somos a maior em database!
                                            Nossa segurança passa por criptografias criadas e conversadas por inteligências artificiais entre sí.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s6" style="margin-left: -7%;">
                        <div class="row">
                            <div class="col s12 m10">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/interrogacao.png">
                                        <span class="card-title blue-text text-lighten-3">Gostou?</span>
                                    </div>
                                    <div class="card-content">
                                        <p>
                                            Então faça parte de tudo isso com apenas um clique! Você vai adorar!
                                            <?php
                                            for($i = 0;$i <= 3; $i++){
                                                echo '<br>';
                                            } ?>
                                            <a href="cadastro.php" class="btn blue darken-1">Fazer parte</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './footer.php'; ?>
    </body>
    <script src="materialize/js/materialize.min.js" type="text/javascript"></script>
    <script src="materialize/jquery/jquery-3.3.1.js" type="text/javascript"></script>
    <script type="text/javascript">
        M.AutoInit();

    </script>
</html>
