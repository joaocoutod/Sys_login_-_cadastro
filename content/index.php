<?php
session_start();
include_once("../app/conexao.php");
include_once("../app/funcoes.php");

valida_permissao();
sair();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <link rel="stylesheet" href="css_content/style_content.css">
    <link rel="stylesheet" href="css_content/gride_content.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">.sair{font-size: 20px;color: #fff;}.sair:hover{color: red;}</style>
</head>

<body>
    <div class="col">
        <div class="well">
            <h1>Bem vindo Sr. <?php echo $_SESSION["nome_user"]; ?></h1>
            <a href="index.php?sair" class="sair"> sair</a>
        </div>
    </div> 
    <script type="text/javascript" src="../js/load.js"></script>   
    </body>
</html>