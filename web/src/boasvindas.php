<?php

$usuario = $_POST["usuario"];

if(empty($usuario)){
	header('Location: ./index.php');
	exit;
}

echo "<!DOCTYPE html>
<html lang=\"pt-br\">
	<head>
		<title>PTI ADS LUCIANO SOBRAL</title>
		<meta charset=\"utf-8\"/>
	</head>
	<body>
		<h1>Seja bem vindo(a) $usuario!!</h1>
	</body>
	</html>";
?>