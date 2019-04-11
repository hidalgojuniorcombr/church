<?php
include "banco/conexao.php";
?>
<html>

<head>
    <title>
        ChurchSystem - Sistema de Gerenciamento de Ministérios
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
</head>

<body>

    <?php file_exists("topo.php")?include "topo.php":'';?>
    <?php file_exists("avisos.php")?include "avisos.php":'';?>
    <?php file_exists("conteudo.php")?include "conteudo.php":'';?>
    <?php file_exists("rodape.php")?include "rodape.php":'';?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>
