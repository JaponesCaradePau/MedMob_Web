<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysql_connect("127.0.0.1", "root") or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("server") or die("Sem acesso ao DB");
 

$result = mysql_query("SELECT * FROM `CADASTRO` 
WHERE `NOME` = '$login' AND `SENHA`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:medicamento.html');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.html');
   
  }
?>