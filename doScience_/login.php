<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<div class= "logo">
		<a href="index1.php">
    	    <img src="images/bana.jpg" alt="Logo">
    	</a>
	</div>

	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>LOGIN</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nome</label>
			<input type="text" placeholder="Digite seu nome aqui..." name="username">
		</div>
		<div class="input-group">
			<label>Senha</label>
			<input type="password" placeholder="Digite sua senha aqui..." name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Não está cadastrado? <a href="index1.php#contact-us">Faça seu cadastro!</a>
		</p>
	</form>
</body>
</html>