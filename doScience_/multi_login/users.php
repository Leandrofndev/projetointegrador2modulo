<?php include('functions.php');?>

<!DOCTYPE html>
<html>
<head>
    <title>Athenaeum Potassium - USERS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
	.header {
		background: #9DC25C;
	}
	button[name=register_btn] {
		background: #9DC25C;
	}
	</style>
</head>
<body>
    <div class="header">
        <h2>Athenaeum Potassium - USERS</h2>
    </div>

    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>TIPO DE USUÁRIO</th>
                    <th>SENHA</th>
                </tr>
            </thead>
        
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'multi_login');
 
        if (!$conn) {
            die("ERROOOOUUUU: Connection failed: " . mysqli_connect_error());
        }

        $sql1 = "SELECT id, username, email, user_type, password FROM users";

        $query1 = "SELECT * FROM users ORDER BY id" ;

        $result = mysqli_query($conn, $query1);

        foreach($result as $rows) {
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