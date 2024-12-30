<?php
$email=$_POST["email"];
$senha= $_POST["senha"];

$conexao = mysqli_connect("localhost","root","");
mysqli_select_db($conexao, "biblioteca");

$consulta ="SELECT * FROM funcionarios WHERE email='$email' AND senha='$senha'";

$resposta = mysqli_query($conexao, $consulta);

if(mysqli_num_rows($resposta) > 0){
   echo " <meta http-equiv='refresh' content='2;PaginaPrincipalBiblioteca.html'/>";
   
   echo "Seja Bem Vindo(a) ao Sistema Biblioteca...";

}else{
    echo "<script>alert('Email ou Senha Inválida');</script>";
    echo " <meta http-equiv='refresh' content='2;login.html'/>";
}

?> 