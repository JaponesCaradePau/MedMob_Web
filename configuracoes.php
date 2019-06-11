<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MedMob</title>
        <link rel="stylesheet" href="css/config.css">  
        <link rel="icon" type="imagem" href="image/favicon.ico" />
</head>
   <div class="header">
      <div class="h-wraper">
          
           <div class="logo">
               <img src="image/logo2.png" alt="Logo">
               
           </div> 
          <a href="index.html" style="text-align: right" color="white">Sair</a>
       </div>   
    </div>
   
    <div class="menu">
        <ul>
          <li><a href="inicial.html">Inicio</a></li>
          <li><a href="hospitaisFavoritos.html">Hospitais Favoritos</a></li>
          <li><a href="medicamento.html">Medicamentos</a></li>
          <li><a href="fichaMedica.html">Ficha Médica</a></li>
          <li><a class="active" href="#configuracaoes">Configurações</a></li>
        </ul>
    </div>
    <div class="formulario">
        <div style="margin-left:50%;">
             <form>
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email">
                <br>
                 <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone">
                 <br>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco">
                 <br>
                <input type="submit" value="Salvar">
              </form>
        </div>

    </div>
    
    <div class="listaMedicamento">
        <div style="margin-right:50%;padding:1px 16px ;height:1000px;">
             <form>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha">    
                 <br><br><br><br>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco">
                 <br>
                 
              </form>
                </div>
        </div>
</html>