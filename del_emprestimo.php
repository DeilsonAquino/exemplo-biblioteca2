<?php

$cod_emprestimo = $_POST["cod_emprestimo"];

$conexao = mysqli_connect("localhost","root","");
mysqli_select_db($conexao,"biblioteca");





if(isset($_POST["deletar"])){

$deletar = "DELETE FROM emprestimo WHERE cod_emprestimo ='$cod_emprestimo'";

mysqli_query($conexao,$deletar);



echo"<script>alert('Excluido com Sucesso!!!');</script>";

echo "<a href = 'deletar_emprestimos.html'>Clique Para Continuar Deletando...</a>";
}


?>