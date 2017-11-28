<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/blabla.css"/>
		<link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		
	</head>
	<body>
		<header class="cabecalho">
			<button class="cad"><a href="cadastrar.php">Cadastrar-se</a></button>
		</header>
		<div class="log">
			<img class="logo" src="./imagem/logo.png"/>
			<h1 class="title">Bem-vindo à Aliança</h1>
			<form action="loginphp.php" method="post" class="login">
				<input type="text" placeholder="Nome de usuário" name="username" class="box"/></br></br>
				<input type="password" placeholder="Senha" name="senha"class="box"/></br></br>
				
				<a href="home.php"><input type="submit" value="Entrar" id="ent"/></a>
			</form>
		</div>
	</body>
</html>