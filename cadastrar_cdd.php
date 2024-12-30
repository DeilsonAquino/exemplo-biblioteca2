<?php

$cod_cdd = $_POST ["cod_cdd"];
$cod_subtema = $_POST ["cod_subtema"];
$tema = $_POST ["tema"];
$subtema = $_POST ["subtema"];

$conexao = mysqli_connect("localhost", "root", "");

mysqli_select_db($conexao, "biblioteca");

if(isset($_POST["cadastrar"])){

    $inserir = "INSERT INTO cdd(cod_cdd, cod_subtema, tema, subtema)
    values ($cod_cdd, '$cod_subtema', '$tema', '$subtema')";

mysqli_query($conexao, $inserir);

echo "Cadastro Realizado Com Sucesso!!!"; 

echo "<a href = 'CadastroCDD.html'>Clique Para Voltar e Continuar Cadastrando... </a>";

}else if (isset($_POST["excluir"])){

$excluir  = "DELETE FROM cdd WHERE cod_cdd = '$cod_cdd' ";

mysqli_query($conexao, $excluir);

echo "<script>alert('Código CDD Excluído com Sucesso!!')</script>";

echo "<a href = 'CadastroCDD.html'>Clique Para Voltar e Continuar Cadastrando... </a>";

}

?>

