<?php include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "Você precisa logar-se primeiro!!";
	header('location: login.php');
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Athenaeum Potassium - ADMIN - Criar Usuário</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.header {background: #9DC25C;}
		button[name=register_btn] {background: #9DC25C;}
		.btn{background: #9DC25C;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Athenaeum Potassium - ADMIN - Criar Usuário</h2>
	</div>
	<form method="post" action="create_user.php">
	<!-- Mostra uma notificação com uma mensagem de sucesso ou falha ao fazer uma ação. -->
	<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success" >
			<h3>
				<?php 
					echo $_SESSION['success']; 
					unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>

	<div class="profile_info">
		<img src="images/admin_profile.png"  >
			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style= "font-size: 150%;"><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br><br>
						<a href="create_user.php" class="btn" name="register_btn"> Criar Usuário</a>
						<a href="reg_admin.php" class="btn" name="register_btn"> Cadastro de Livros</a>
	                    <a href="mod_admin.php" class="btn" name="register_btn"> Modificar Itens</a>

						<a href="home.php?logout='1'" class="btn" name="register_btn" style ="background: #F94824;box-shadow: 2px 2px 60px #F94824;"> Logout</a>
						<br><br>
					</small>

				<?php endif ?>
			</div>
		</div>

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nome do usuário</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Tipo do Usuário</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Administrador</option>
				<option value="user">Usuário</option>
			</select>
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
			<button type="submit" class="btn" name="register_btn"> Criar Usuário</button>
		</div>
		
	</form>
</body>
</html>