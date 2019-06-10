<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MedMob</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="header">
      <div class="h-wraper">
           <div class="logo">
               <img src="image/logo.JPG" alt="Logo">
           </div>
           <div class="signin">
              <form style="color: white;">
                <ul>
                    <li>
                        E-mail<br>
                     <input type="text" name="email" id ="email">
                    </li>
                    <li>
                        Senha<br>
                      <input type="password" name="password" id="senha">
                    </li>
                    <li>
                        <br><input type="submit" value="Log In" >
                    </li>
                </ul>     
               </form>
           </div>
       </div>
   </div>
    <div class="wraper">
        <div class="sideimage">
           <h2>MedMob te ajuda a encontrar o hospital<br> mais póximo de você.</h2>
          <!--  <img src="image/side-image.png" alt="side-image"> -->
        </div>
        <div class="signup">
            <h2 style="font-size: px;12">Começe criando a sua conta</h2>
            <br>
            <form method="post" action="login.php" id="formlogin" name="formlogin">
                <ul>
                    <li>
                        <input type="text" name="First Name" size="15" placeholder="Primeiro nome">
                    </li>
                    <li>
                        <input type="text" name="Surname" size="15" placeholder="Sobrenome">
                    </li>
                    <li>
                        <input type="text" name="Mobile number or email address" size="36" placeholder="e-mail">
                    </li>
                    <li>
                        <input type="password" name="New password" size="36" placeholder="Nova Senha">
                    </li>
                </ul>
            </form>
            <br>
            <table border="0" width="90%">
                <tr>
                    <th>17</th>
                    <th>Jan</th>
                    <th>1983</th>
                </tr>
            </table>
			  <h5 id="data"> data </h5>
            <br>
            <div class="gender">
                  <h1 style="font-size: 18px;"> Gênero:</h1>
                 <input type="radio" name="gender" value="female" checked> Feminino
                 <input type="radio" name="gender" value="male"> Masculino
            </div>
            <br>
			<input type="submit" value="Criar">
        </div>
		
		<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysql_connect("127.0.0.1", "root","qJZrqvaruapMjy57") or die
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
        
    </div>
    <div class="footer">
        <div class="f-wraper">
            <br><h1 style="font-size: 16px;">Integrantes:</h1><br>
           <h1 style="font-size: 14px;">Alessandra Yukie &nbsp Barbara Rosal &nbsp Kelly Ortiz &nbsp Lucas Zanella &nbsp Stefano Dottori </h1>

        </div>
    </div>
</body>
</html>