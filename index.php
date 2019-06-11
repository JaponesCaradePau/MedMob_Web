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
              <form method = "post" action = "login.php" style="color: white;">
                <ul>
                    <li>
                        E-mail<br>
                     <input type="text" name="email" id ="email">
                    </li>
                    <li>
                        password<br>
                      <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <br><input type="submit" value="Log In">
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
            <form method="post" action="create.php" id="formlogin" name="formlogin">
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
                        <input type="password" name="New password" size="36" placeholder="Nova password">
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
        
    </div>
    <div class="footer">
        <div class="f-wraper">
            <br><h1 style="font-size: 16px;">Integrantes:</h1><br>
           <h1 style="font-size: 14px;">Alessandra Yukie &nbsp Barbara Rosal &nbsp Kelly Ortiz &nbsp Lucas Zanella &nbsp Stefano Dottori </h1>

        </div>
    </div>
</body>
</html>