<?php

    session_start();

    require_once 'Conexao.php';
    require_once 'Login.php';

    $login = new Login(Conexao::getInstance());

    $login->validaLogin();

 ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilo.css">

        <title>TPI-1 - PHP</title>

    </head>

    <body>

        <div class="container sombra">

            <div class="topo"><img src=""></div>

          <?php

            require_once 'menu.php';

          ?>

        </div>

    </body>

</html>
