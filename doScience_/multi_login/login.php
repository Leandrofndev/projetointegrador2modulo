<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Athenaeum Potassium - LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Athenaeum Potassium - LOGIN</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nome</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Senha</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Não está cadastrado? <a href="register.php">Faça seu cadastro!</a>
		</p>
	</form>
</body>
</html>