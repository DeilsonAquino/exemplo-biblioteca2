<?php

$mat_usuario = $_POST["mat_usuario"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cpf = $_POST["cpf"]; 
$sexo = $_POST["sexo"];
$data_nascimento = $_POST ["data_nascimento"];
$telefone = $_POST ["telefone"];
$email = $_POST ["email"];
$rua = $_POST ["rua"];
$bairro = $_POST ["bairro"];
$cidade = $_POST["cidade"];

$conexao = mysqli_connect("localhost", "root", "");

mysqli_select_db($conexao, "biblioteca");

if(isset($_POST["cadastrar"])){

$inserir = "INSERT INTO usuarios(mat_usuario, nome, sobrenome, cpf, sexo, data_nascimento, telefone, email, rua, bairro, cidade) 
values ($mat_usuario, '$nome', '$sobrenome','$cpf','$sexo','$data_nascimento', '$telefone','$email','$rua','$bairro','$cidade')";

mysqli_query($conexao, $inserir);

echo "Cadastro Realizado Com Sucesso!!!"; 

echo "<a href = 'cadastroUsuario.html'>Clique para Voltar e Continuar Cadastrando..... </a>";

}else if (isset($_POST["excluir"])){

    $excluir  = "DELETE FROM usuarios WHERE mat_usuario = '$mat_usuario' ";

    mysqli_query($conexao, $excluir);

    echo "<script>alert('Código Do Usuario Excluído com Sucesso!!')</script>";

}


?>