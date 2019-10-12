<?php 
    include("app/valida.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>projeto - login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="styleshhet" href="css/gride.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="col animated bounceIn">
        <div class="well">
            <h1>Login</h1>
            <br>
            <form method="POST" id="login" name="form_login">
                <div id="resul1"></div>
    
                <label><i class="fa fa-user"></i> Nome</label>
                <input type="text" name="user" placeholder="digite seu nome de login" >

                <label><i class="fa fa-lock"></i> Senha</label>
                <input type="password" name="pass" placeholder="************" >

                <button type="submit">Entrar</button>
                <p id="cadastro-a">Não tenho conta <a href="cadastro.php">cadastre-se</a></p>
            </form>
        </div>
    </div>
    
    <script type="text/javascript" src="js/load.js"></script>
</body>
</html>