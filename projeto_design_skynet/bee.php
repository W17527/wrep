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
                <div class="parallax"><img src="images/shop.jpg"></div>

            </div>
            <div class="section white">
                <div class="row container">
                    <div class="col s12 m10 offset-m1">
                        <span><a href="index.php" class="grey-text text-darken-3">Página Inicial</a> -> <a href="loja.php" class="grey-text text-darken-3">Loja</a> -> <a href="bee.php" class="grey-text text-darken-3">Bee</a></span>

                        <h5 class="header">Negociar</h5>
                        <div class="card-panel hoverable blue darken-1 white-text center">
                            <h6>Quer negociar um produto?</h6>
                        </div>

                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="card hoverable">
                                        <div class="card-image">
                                            <img src="images/bee-2984342_1920.jpg">
                                            <span class="card-title grey-text">Bee</span>
                                        </div>
                                        <div class="card-content">
                                            <h6 class=""><b>Negocie agora um pacote Bee</b></h6>
                                            <p>
                                                O pacote "bee" é sua solução contra fungos e bactérias que atacam suas plantações!
                                                Além de ajudar na polinização do planeta, as Bee's tem um sistema de reconhecimento
                                                local integrado!<br>
                                                <br>Confira agora suas especificações:
                                            <blockquote>
                                                <b>
                                                    <p>Sua bateria tem o prazo de vida de 5 anos.</p>
                                                    <p>Carregamento com base energia solar integrado!</p>
                                                    <p>As Bee's agem conforme o estudo artificial local de migração de abelhas locais!</p>
                                                    <p>Elas tem uma câmera 10x10 em sincronia o com seu servidor! Lhe oferecendo muito mais segurança!</p>
                                                    <br><p>Vem com a LBRA (Lilli Basic Recognition and Action).</p>
                                                </b>
                                            </blockquote>
                                            </p>
                                            <br>
                                            <fieldset class="center-align grey lighten-4 z-depth-3">
                                                <legend class="left-align black-text">Negociar:</legend>
                                                <h6>
                                                    Eai, gostou? Pronto para negociar?
                                                </h6><br>
                                                <a href="negociar.php" style="margin-bottom: 12px;" class="btn blue darken-3">Negociar</a>
                                            </fieldset>

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
