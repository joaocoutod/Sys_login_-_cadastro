<?php
session_start();
include("conexao.php");
$conn = conectar();

if(isset($_GET['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    if(empty($user) && empty($pass)){
        echo "digite seu login.";
    }elseif (empty($user)) {
        echo"digite seu <strong>nome</strong> de usuario.";
    }elseif (empty($pass)) {
        echo"digite sua <strong>senha<strong> de usuario.";
    }else{
    	$verificar_user = $conn->prepare("SELECT * FROM users WHERE nome = ?");
    	$verificar_user->execute(array($user));

    	if ($verificar_user->rowCount() > 0) {
    		
    		$verificar_login = $conn->prepare("SELECT * FROM users WHERE nome = ? AND senha = ?");
    		$verificar_login->execute(array($user,$pass));

    		if ($verificar_login->rowCount() == 1) {	
    			$get_user = $conn->query("SELECT * FROM users WHERE nome = '$user' ");
				while ($linha = $get_user->fetch(PDO::FETCH_ASSOC)) { $id = $linha['id']; }

				$_SESSION['id'] = $id;
    			$_SESSION['log'] = true;
				echo "<script>location.href='content/';</script>";

    		} else {
    			echo "senha incorreta.";
    			echo " <script type='text/javascript'>document.pass.reset();</script>";
    		}
    	}else{
    		echo "Usuario inexistente.";
    		echo "<script type='text/javascript'>document.form_login.reset();</script>";
    	}
    }
}


if (isset($_GET["cadastro"])) {
	$fp = rand(0, 1000000);
	$nome_c = $_POST["user-c"];
	$senha_c = $_POST["senha-c"];
	$foto_c = $fp.$_FILES["foto-c"]["name"];

	if(empty($nome_c) && empty($senha_c)){
        echo "digite seu login.";
    }elseif (empty($nome_c)) {
        echo"digite um <strong>nome</strong> de usuario.";
    }elseif (empty($senha_c)) {
        echo"digite uma <strong>senha<strong> de usuario.";
	}elseif (empty($_FILES["foto-c"]["name"])){
		echo "Insirar uma <strong>foto</strong>";
	}else{
		$conn = conectar();
		$verificar_user_c = $conn->prepare("SELECT * FROM users WHERE nome = ?");
		$verificar_user_c->execute(array($nome_c));

		if ($verificar_user_c->rowCount() == 0) {

			move_uploaded_file($_FILES["foto-c"]["tmp_name"], "../content/img_content/".$foto_c);

			$cadastra = $conn->prepare("INSERT INTO users(nome, senha, foto, data) VALUES(:nome, :senha, :foto ,NOW())");
			$cadastra->bindValue(":nome", $nome_c);
			$cadastra->bindValue(":senha", $senha_c);
			$cadastra->bindValue(":foto", $foto_c);
			$cadastra->execute();

			echo "<script>location.href='index.php';</script>";
			echo "Cadastro realizado";		
		}else{
			echo "Usuario ja existe!";
    		echo "<script type='text/javascript'>document.form_login.reset();</script>";
		}
	}
}
?>