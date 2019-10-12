<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto - Cadastro</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="styleshhet" href="css/gride.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="theme-color" content="green">
</head>
<body>
    <div class="col animated bounceInDown">
        <div class="well">
            <h1>Cadastro</h1>
            <br>
            <form method="POST" id="cadastro" name="form_login" enctype="multipart/form-data">
                <div id="resul2"></div>
                <label><i class="fa fa-user"> Nome</i></label>
                <input type="text" name="user-c" placeholder="Digite seu nome de login">

                <label><i class="fa fa-user"> Senha</i></label>
                <input type="password" name="senha-c" placeholder="Digite sua senha">

                <label><i class="fa fa-photo"></i> Foto de perfil</label>
                <input type="file" name="foto-c" accept="image/*" id="">

                <button type="submit">Cadastrar</button>
                <p id="cadastro-a">Já tenho uma conta <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/load.js"></script>
</body>
</html>