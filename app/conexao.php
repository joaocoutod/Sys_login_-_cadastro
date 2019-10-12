<?php  
//conectar com banco de dados
function conectar(){
	try {
		$conn = new PDO("mysql:host=localhost;dbname=SysLogin;","root","");
	} catch (PDOException $error) {
		echo $error->getMessage();
	}

	return $conn;
}

?>