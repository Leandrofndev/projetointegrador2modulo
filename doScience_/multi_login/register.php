<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Athenaeum Potassium - User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Athenaeum Potassium - User Registration</h2>
</div>
<form method="post" action="register.php">
    <!--error message-->
	<?php echo display_error(); ?>

	<div class="input-group">
		<label>Nome</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Senha</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirmar senha</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Cadastrar</button>
	</div>
	<p>
		Já é cadastrado? <a href="login.php">Faça seu login!</a>
	</p>
</form>
</body>
</html>