<?php

$cod_livro = $_POST["cod_livro_revista"];

$conexao = mysqli_connect("localhost","root","");
mysqli_select_db($conexao,"biblioteca");





if(isset($_POST["deletar"])){

$deletar = "DELETE FROM livros WHERE cod_livro_revista='$cod_livro'";

mysqli_query($conexao,$deletar);



echo"<script>alert('Excluido com Sucesso!!!');</script>";

echo "<a href = 'deletar_livros.html'>Clique Para Continuar Deletando...</a>";
}


?>