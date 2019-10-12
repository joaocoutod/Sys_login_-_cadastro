<?php
function valida_permissao(){
    if (isset($_SESSION['log'])) {
        if (isset($_SESSION['log']) == true) {
            //get dados user
            $conn = conectar();
            $get_user = $conn->query("SELECT * FROM users WHERE id = ".$_SESSION['id']);
            while ($linha = $get_user->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION["nome_user"] = $linha["nome"];
                $_SESSION["foto_user"] = $linha["foto"];                
            }
        }else{header('location: ../index.php');}
    }else{header('location: ../index.php');}
}
####################################################

function sair(){
    if(isset($_GET["sair"])){
        session_destroy();
        header('location: ../index.php');
    }
}


?>