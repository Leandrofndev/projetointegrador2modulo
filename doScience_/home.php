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
	<title>Athenaeum Potassium - ADMIN - Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.header {background: #9DC25C;}
		button[name=register_btn] {background: #9DC25C;}
		.btn{background: #9DC25C;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Athenaeum Potassium - ADMIN - Home Page</h2>
	</div>
	<div class="content">
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

		<!-- logged in user information -->
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
	</div>

	<div class="content">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME DO LIVRO</th>
                    <th>NOME DO AUTOR</th>
                    <th>NOME DA EDITORA</th>
                </tr>
            </thead>
        
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'multi_login');
        // Check connection
        if (!$conn) {
            die("ERROOOOUUUU: Connection failed: " . mysqli_connect_error());
        }

        $sql2 = "SELECT id, livro, autor, editora FROM tb_inventory";
        $query2 = "SELECT * FROM tb_inventory ORDER BY id" ;
    
        $result2 = mysqli_query($conn, $query2);

        foreach($result2 as $rows) {
            echo "<tbody>";
            echo "<tr>";
                foreach ($rows as $key => $value) {
                    echo  "<td>" . $value .  "</td>";
                }
            echo "</tr>";
            echo "</tbody>";
        }
        ?>

        </table>
    </div>



</body>
</html>