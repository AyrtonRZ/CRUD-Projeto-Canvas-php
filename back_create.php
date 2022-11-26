<?php 

   // CONECTANDO COM O BANCO DE DADOS
    $dbname = "contato"; // nome do banco de dados
	$dbhost = "localhost"; // local onde está o banco de dados
	$dbuser = "root"; // nome do usuário do bando de dados
    $dbpass = ""; // senha do usuário do bando de dados

	$pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);
	
	// $pdo = new PDO("mysql:host=localhost; dbname=corposmigrantesc_crud", "corposmigrantesc_pedro", "WD&6l[~WS}Y;");

	$nome = $_REQUEST['nome'];
	$email = $_REQUEST['email'];
		
	// INSERINDO DADOS NO BANCO DE DADOS
	// $pdo->query("INSERT INTO `usuarios` (nome, telefone) VALUES ('$nome', '$telefone')"); 

	// $pdo->query("INSERT INTO `tarefas` (titulo, descricao) VALUES ('$titulo', '$descricao')"); 

	 $pdo->query("INSERT INTO `perfil` (nome, email) VALUES ('$nome', '$email')"); 
	 
	 header("Location: index2.php"); 

	echo "Dados Salvos com sucesso";
		
	// mysqli_close();
	
?> 
