<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <link href="materialize/css/materialize.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>SkyNet</title>
        <link href="stylesheet/global.css" rel="stylesheet" type="text/css"/>
        <?php
        include_once './classes/validacpf.class.php';
        $valida = new validacpf();
        ?>
    </head>
    <body style="background-image: URL('images/background-1453697.jpg');">
        <!-- NAV -->
        <?php include_once './menu.php'; ?>
        <div class="row">
            <div class="parallax-container">
                <div class="parallax"><img src="images/smart-4168483_1920.jpg"></div>

            </div>
            <div class="section white">
                <div class="row container">
                    <div class="col s12 m10 offset-m1">
                        <blockquote><h5 class="header">Negociar um produto SkyNet</h5></blockquote>

                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="card hoverable">
                                        <div class="card-image">
                                            <img src="images/skyscraper-1149478_1920.jpg">
                                            <span class="card-title">Vamos negociar?</span>
                                        </div>
                                        <div class="card-content">
                                            <h6 class=""><b>Preencha as informações abaixo e vamos ver qual preço cabe no seu bolso!</b></h6>
                                            <p>

                                            </p>
                                            <br>
                                            <fieldset class="center-align grey lighten-4 z-depth-3">
                                                <legend class="left-align black-text">Negociar:</legend>
                                                <h6>
                                                    Eai, gostou? Pronto para negociar?
                                                </h6><br>
                                                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                                    <div class="left-align row" style="margin-left: 3%;">
                                                        <div class="col">
                                                            Diga-nos seu salário semestral:
                                                            <input type="number" name="salario" placeholder="R$ 00,00" value="00,00" required="">
                                                            Qual seu cpf?
                                                            <input type="text" name="cpf" placeholder="000.000.000-00" required="">
                                                            Qual seu email?
                                                            <input type="text" name="email" placeholder="exemplo@email.com" required="">
                                                            <br><br>
                                                            <input type="submit" class="btn blue darken-2" name="env" value="Soliciatar negociação">
                                                        </div>
                                                    </div>
                                                </form>
                                            </fieldset><br>

                                            <?php
                                            
                                            if (isset($_POST['env'])) {
                                                $cpf = $_POST['cpf'];
                                                $sal = $_POST['salario'];
                                                $email = $_POST['email'];

                                                $cpfstatus = $valida->validaCPF($cpf);
                                                if ($cpfstatus == true) {
                                                    echo '<div class="green-text text-lighten-2 card-panel grey lighten-4"><b>Uma confirmação com o seu pedido de negociação será enviado para o email:<br><blockquote>'.$email.'</blockquote></b></div>';
                                                    }else{
                                                    echo '<div class="red-text text-lighten-2"><blockquote>CPF Inválido!</blockquote></div>';
                                                    }

                                                    }

                                            ?>

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
