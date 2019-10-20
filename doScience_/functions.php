<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

$livro = "";
$autor = "";
$editora = "";


// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}
// call the register2() function if register_btn is clicked
if (isset($_POST['register2_btn'])) {
	register2();
}
// call the modifyL() function if modify_btn is clicked
if (isset($_POST['modify_btn'])) {
	modifyL();
}
// call the modifyA() function if modify_btn is clicked
if (isset($_POST['modify_btn'])) {
	modifyA();
}
// call the modifyE() function if modify_btn is clicked
if (isset($_POST['modify_btn'])) {
	modifyE();
}
// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email, $livro, $autor, $editora, $user_type;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Usuário necessário!!"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email necessário!!"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Senha necessário!!"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "As duas senhas não são iguais!!");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//"md5" encrypts the password before saving in the database
		//admin and users
		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (username, email, user_type, password) 
					   VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "Novo usuário criado com exito!!";
			header('location: create_user.php');
			
		}else{
			$query = "INSERT INTO users (username, email, user_type, password) 
					   VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
		}
	}
}
function register2(){
	global $db, $errors, $username, $email, $livro, $autor, $editora;

	$livro		=	e($_POST['livro']);
	$autor		=	e($_POST['autor']);
	$editora	=	e($_POST['editora']);

	// Registra um Livro com seu Autor e Editora
	if (count($errors) == 0) {
		//admin and users
		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query2 = "INSERT INTO tb_inventory (livro, autor, editora) 
					   VALUES('$livro', '$autor', '$editora')";
			mysqli_query($db, $query2);
			$_SESSION['success']  = "Novo livro cadastrado com sucesso!!";
			header('location: home.php');
		}else{
			$query2 = "INSERT INTO tb_inventory (livro, autor, editora) 
					   VALUES('$livro', '$autor', '$editora')";
			mysqli_query($db, $query2);
		}
	}
}
function modifyL(){
	global $db, $livro;

	$livro		=	e($_POST['livro']);
	$id			=	e($_POST['id']);
	// Modifica o nome de um Livro
	if ($livro != "") {
		$user_type = e($_POST['user_type']);
		$queryL = "UPDATE tb_inventory 
				SET livro= '$livro' 
				WHERE id= '$id'";
		mysqli_query($db, $queryL);
		$_SESSION['success']  = "Nome do LIVRO mudado com sucesso!!";
		header('location: mod_admin.php');
	}
}
function modifyA(){
	global $db, $autor;

	$autor		=	e($_POST['autor']);
	$id			=	e($_POST['id']);
	// Modifica o nome de um Autor
	if ($autor != "") {
		$user_type = e($_POST['user_type']);
		$queryA = "UPDATE tb_inventory 
				SET autor= '$autor' 
				WHERE id= '$id'";
		mysqli_query($db, $queryA);
		$_SESSION['success']  = "Nome do AUTOR mudado com sucesso!!";
		header('location: mod_admin.php');
	}
}
function modifyE(){
	global $db, $editora;

	$editora	=	e($_POST['editora']);
	$id			=	e($_POST['id']);
	// Modifica o nome de uma Editora
	if ($editora != "") {
		$user_type = e($_POST['user_type']);
		$queryE = "UPDATE tb_inventory 
				SET editora= '$editora' 
				WHERE id= '$id'";
		mysqli_query($db, $queryE);
		$_SESSION['success']  = "Nome da EDITORA mudado com sucesso!!";
		header('location: mod_admin.php');
	}
}
// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$query2 = "SELECT * FROM tb_inventory WHERE id=" . $id;
	$result2 = mysqli_query($db, $query2);

	$queryL = "UPDATE tb_inventory SET livro= '$livro' WHERE id= '$id'";
	$resultL = mysqli_query($db, $queryL);
	/*UPDATE `nome_da_tabela` SET `coluna` = `novo_conteúdo_da_coluna` WHERE `fileira_de_identificação` = `número_da_fileira`;
	*/
	$queryA = "UPDATE tb_inventory SET autor= '$autor' WHERE id= '$id'";
	$resultA = mysqli_query($db, $queryA);

	$queryE = "UPDATE tb_inventory SET editora= '$editora' WHERE id= '$id'";
	$resultE = mysqli_query($db, $queryE);

	$user = mysqli_fetch_assoc($result);
	return $user;

	$user = mysqli_fetch_assoc($result2);
	return $user;

	$user = mysqli_fetch_assoc($resultL);
	return $user;
	$user = mysqli_fetch_assoc($resultA);
	return $user;
	$user = mysqli_fetch_assoc($resultE);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

//This function when called, tells you if a user is logged in or not by returning true or false.
function isLoggedIn(){
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Seja bem vindo!";
				header('location: home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Seja bem vindo!";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Nome/senha errado!");
		}
	}
}

//Checks if the user is admin
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}