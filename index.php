<?php 
	session_start();
	require_once('class/account.class.php');

	$accountClass = new account();

?>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/css/style.css">
		<script language="javascript" src="js/main.js"></script>
		<title>
			Caixa Eletrônico
		</title>
	</head>
	<body>
		<?php
		if(isset($_SESSION['account']))
			include('main.php');
		else if(isset($_POST['user']) && isset($_POST['pass']))
		{
			if($accountClass->checkAccount($_POST['user'],$_POST['pass']))
				include('main.php');
			else
				echo 'Nome de usuário e/ou senha errado';
		}
		else
			include('login.php');
		?>
	</body>
</html>