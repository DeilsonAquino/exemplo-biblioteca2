<?php
$cod_livro_revista = $_POST["cod_livro_revista"];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ano = $_POST["ano"];
$qtd = $_POST["qtd"];
$localizacao = $_POST["localizacao"];
$editora = $_POST["editora"];
$classe = $_POST["classe"];
$tipo = $_POST["tipo"];
$cod_cdd = $_POST["cod_cdd"];
$idioma = $_POST["idioma"];
$traducao = $_POST["traducao"];


$conexao = mysqli_connect("localhost", "root", "");

mysqli_select_db($conexao, "biblioteca");

if(isset($_POST["alterar"])){

$alterar = "UPDATE livros SET cod_livro_revista = '$cod_livro_revista', titulo = '$titulo', autor = '$autor', ano = '$ano', qtd = '$qtd', localizacao = '$localizacao', editora = '$editora', classe = '$classe', tipo = '$tipo', cod_cdd = '$cod_cdd',
idioma = '$idioma', traducao = '$traducao' WHERE livros.cod_livro_revista = $cod_livro_revista;";


mysqli_query($conexao,$alterar);

echo "<script>alert('Código Alterado com Sucesso!!!');</script>";
echo "<meta http-equiv='refresh'content='2;EmprestimoLivros.html'/>";

}

?>
