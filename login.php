<?php 
 session_start();
	$email = strip_tags($_POST['nome']);
	$password = strip_tags($_POST['password']);
	echo $password."<br>";
    $password = sha1(strip_tags($_POST['password']));
	echo $password."<br>";
    // conctando ao BD
    include "conecta_mysql.php";

	$query="SELECT * from cadastro WHERE  email=? AND password=?";

	if($stmt = mysqli_prepare($conexao, $query)) {
		mysqli_stmt_bind_param($stmt, "ss", $email, $password);	
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $id, $nome, $email, $password, $foto);
		mysqli_stmt_fetch($stmt);
	  
		if ($email == $nome && $password == $password) {
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header('location:medicamento.html');
		}	  
		else {
			echo "email ou senha incorretos";
		}
		$stmt -> close();
	} else {
		echo "Falha no statment";
	}
	$conexao -> close();
}
?>