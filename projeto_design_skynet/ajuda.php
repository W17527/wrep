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
    <body class="lighten-4" style="background-image: URL('images/ajuda.jpg'); background-size: 100%;">
        <!-- NAV -->
        <?php include_once './menu.php'; ?>

        <div class="container">
            <div class="row"></div>
            <div class="card-panel row s12 m10 blue darken-4">
                <span><a href="index.php" class="grey-text text-lighten-3">Página Inicial</a> -> <a href="ajuda.php" class="grey-text text-lighten-3">Ajuda</a></span>

                <div class="card blue darken-2 white-text">

                    <div class="row"></div>
                    <div class="row"></div>
                    <h5 style="margin-left: 10px;">Seja bem vindo a nossa página de ajuda!</h5>
                    <br>
                    <div class="divider"></div>
                    <br>

                    <div style="margin-left: 10px; margin-right: 10px;">
                        <div class="card-panel blue darken-4 hoverable z-depth-2">
                            <h5>Procure o que precisa saber bem aqui!</h5>
                        </div>
                        <div class="card blue darken-3 m6 row z-depth-1-half" style="margin-right: 60%; margin-left: 3%;">
                            <div class="row"></div>
                            <h5 style="margin-left: 10%;">Serviços</h5>
                            <div class="row"></div>
                        </div>
                        <br>
                        <!-- HELPERS START -->
                        <ul class="collapsible blue darken-1">
                            <li>
                                <div class="collapsible-header blue darken-3">Pra que utilizar os serviços da SkyNet?</div>
                                <div class="collapsible-body"><span>Nós vamos lhe oferecer o melhor serviço ja prestado por uma impresa onde a ajuda vem de uma inteligência artificial.<br>
                                        Toda a ajuda que você precisar é só pedir para a Lilli!</span>
                                    Conheça a Lilli!
                                    <div class="row"></div>
                                    <br> <a href="lillishop.php" class="btn blue darken-3">Conhecer a Lilli</a>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header blue darken-3">Os serviços são caros?</div>
                                <div class="collapsible-body"><span>Nossos serviços são fornecidos as pessoas dependendo do salário delas.<br>
                                        Por exemplo: se você recebe uma quantidade x com uma renda baixa, será cobrado 9% de todo o seu ganho semestral!<br>
                                        Por exemplo: se você recebe uma quantidade x com uma renda média, será cobrado 11,3% de todo o seu ganho semestral!<br>
                                        Outro exemplo é: se você recebe uma quantidade x com uma renda alta, será cobrado 19% de todo o seu ganho semestral!<br><br>
                                        Nosso modelo de negócios está cada dia melhor!</span>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header blue darken-3">Quais minhas opções?</div>
                                <div class="collapsible-body"><span>As opções são as mais variadoas do mercado. Desde drones recreativos á robôs de segurança pessoal.<br>Entre em nossa loja e confira agora mesmo nossos produtos!</span>
                                    <br><div class="row"></div>
                                    <a href="loja.php" class="btn blue darken-3">Entre na loja</a>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header blue darken-3">Como posso entrar em contato com a area de serviços?</div>
                                <div class="collapsible-body"><span>Envie um email para sky@net.com<br>Lembre se de deixar bem explícito o motivo da ajuda!</span>
                                    <br><br>
                                    <a href="contato.php" class="btn blue darken-3">Mais</a>
                                </div>

                            </li>
                        </ul>
                        <!-- HELPERS END -->
                        <br>
                        <div class="card blue darken-3 m6 row z-depth-1-half" style="margin-right: 60%; margin-left: 3%;">
                            <div class="row"></div>
                            <h5 style="margin-left: 10%;">Uso de dados</h5>
                            <div class="row"></div>
                        </div>
                        <!-- HELPERS START -->
                        <ul class="collapsible blue darken-1">
                            <li>
                                <div class="collapsible-header blue darken-3">O que nossos servidores armazenam?</div>
                                <div class="collapsible-body"><span>De uma forma mais simples:
                                        <br>
                                        Nossos servidores armazenam todos os seus dados. Toda comunicação ja feita e toda sua estrutura de relações comerciais.<br>
                                        Mas lembre-se, tudo será criptografado e bem guardado para que nenhuma informação sua seja lida!<br>
                                        Agora se quer uma explicação mais robusta, clique no botão abaixo.</span><br>
                                    <div class="row"></div>
                                    <a href="termos.php" class="btn blue darken-3">Leia os termos</a>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header blue darken-3">Onde são usados os dados armazenados?</div>
                                <div class="collapsible-body"><span>Os seus dados são usados na melhoria dos nossos serviços, toda informação sobre você é relevante,
                                        com isso conseguimos lhe oferecer a melhor qualidade de vida para você e para a sua família.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header blue darken-3">Com quem compartilhamos os dados armazenados?</div>
                                <div class="collapsible-body"><span>Antes de tudo, lembre-se, apenas compartilhamos informações relevantes!.<br>
                                        Não compartilhamos dados bancários ou informações de identidade (RG, CPF, CNH, Passaporte, Visto e etc...)</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header blue darken-3">Suas informaçôes estão 100% seguras?</div>
                                <div class="collapsible-body"><span>Claro! Suas informações são repeitadas! Nenhum tipo de ataque atual tem a possibilidade de roubar seus dados.<br>
                                        Você sabia que demoraria mais de 100 Mil anos só para poder descobrir uma senha que contenha mais de 15 caractéres e 10 letras?</span></div>
                            </li>
                        </ul>
                        <!-- HELPERS END -->
                        <div class="row"></div>
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
