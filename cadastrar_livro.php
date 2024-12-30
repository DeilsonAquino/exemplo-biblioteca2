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

mysqli_select_db($conexao,"biblioteca");

if(isset($_POST["cadastrar"])){

$inserir = "INSERT INTO livros(cod_livro_revista, titulo, autor, ano, qtd, localizacao, editora, classe, tipo, cod_cdd, idioma, traducao)
VALUES($cod_livro_revista, '$titulo', '$autor', '$ano', '$qtd', '$localizacao', '$editora', '$classe', '$tipo', $cod_cdd, '$idioma', '$traducao')";

mysqli_query($conexao,$inserir);

echo "Cadastro de Livro Realizado com Sucesso!!! <br><br>";

echo "<a href= 'CadastroLivro.html'>Clique para Voltar e continuar Cadastrando....</a>";

}else if(isset($_POST["excluir"])){
    $excluir = "DELETE FROM livros WHERE cod_livro_revista = '$cod_livro_revista'";

    mysqli_query($conexao, $excluir);

    echo "<script>alert('Código do LIvro/Revista excluído com Sucesso!!!');</script>";
    echo "<a href='CadastroLIvro.html'>Clique para Voltar e continuar Cadastrando....</a>";

}


?>