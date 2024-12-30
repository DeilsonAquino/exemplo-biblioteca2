<?php
$cod_cdd = $_POST["cod_cdd"];
$cod_subtema = $_POST["cod_subtema"];
$tema = $_POST["tema"];
$subtema = $_POST["subtema"];


$conexao = mysqli_connect("localhost", "root", "");

mysqli_select_db($conexao, "biblioteca");

if(isset($_POST["alterar"])){

$alterar = "UPDATE cdd SET cod_cdd = '$cod_cdd', cod_subtema = '$cod_subtema', tema = '$tema', subtema = '$subtema' WHERE cdd.cod_cdd = $cod_cdd;";

mysqli_query($conexao,$alterar);

echo "<script>alert('Código Alterado com Sucesso!!!');</script>";
echo "<meta http-equiv='refresh'content='2;EmprestimoLivros.html'/>";

}

?>
