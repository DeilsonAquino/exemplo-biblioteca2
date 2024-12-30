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

if(isset($_POST["alterar"])){

    $alterar = "UPDATE usuarios SET mat_usuario = '$mat_usuario', nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', sexo = '$sexo', data_nascimento = '$data_nascimento', telefone = '$telefone', email = '$email', rua = '$rua', bairro = '$bairro', cidade = '$cidade' WHERE usuarios.mat_usuario = $mat_usuario;";
    mysqli_query($conexao,$alterar);
    
    echo "<script>alert('Código Alterado com Sucesso!!!');</script>";
    echo "<meta http-equiv='refresh'content='2;EmprestimoLivros.html'/>";
    
    }





?>