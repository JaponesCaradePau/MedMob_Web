<?php 
  $email = $_POST[‘email’];


  $password = md5($_POST[‘password’]);

  $connect = mysqli_connect('localhost:3306','root','');

  $db = mysqli_select_db('cadastro');

    if (isset($email)) {

             

      $verifica = mysqli_query("SELECT * FROM cadastro WHERE email = ‘$email’ AND password = '$password'") or die("erro ao selecionar");

        if (mysqli_num_rows($verifica)<=0){

          echo"<script language=’javascript’ type=’text/javascript’>alert(‘email e/ou password incorretos’);window.location.href=’email.html’;</script>";

          die();

        }else{

          setcookie(“email”,$email);

          header("Location:configuracoes.php");

        }

    }

?>
?>