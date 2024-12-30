<?php
$cod_emprestimo = $_POST["cod_emprestimo"];
$mat_usuario = $_POST["mat_usuario"];
$cod_livro_revista = $_POST["cod_livro_revista"];
$data_emprestimo = $_POST["data_emprestimo"];
$data_devolucao = $_POST["data_devolucao"];
$status_livro = $_POST["status_livro"];
$mat_func = $_POST["mat_func"];


$conexao = mysqli_connect("localhost", "root", "");

mysqli_select_db($conexao, "biblioteca");

if(isset($_POST["cadastrar"])){  

$inserir = "INSERT INTO emprestimo(cod_emprestimo,mat_usuario,cod_livro_revista,data_emprestimo,data_devolucao,status_livro,mat_func)
VALUES ('$cod_emprestimo', '$mat_usuario', '$cod_livro_revista', '$data_emprestimo','$data_devolucao','$status_livro','$mat_func')";

mysqli_query($conexao,$inserir);

echo "Emprestimo Realizado com Sucesso!!! <br><br>";

echo "<a href='EmprestimoLivros.html'>Clique para Voltar e continuar Cadastrando...</a>";

}else if(isset($_POST["excluir"])){

    $excluir = "DELETE FROM emprestimo WHERE cod_emprestimo = '$cod_emprestimo'";
    
    mysqli_query($conexao,$excluir);
    
    echo "<script>alert('Código do Emprestimo Excluído com Sucesso!!!');</script>";

    echo "<a href='EmprestimoLivros.html'>Clique para Voltar e continuar Cadastrando.....</a>";

}else if(isset($_POST["alterar"])){

$alterar = "UPDATE emprestimo SET cod_emprestimo = '$cod_emprestimo', mat_usuario = '$mat_usuario', cod_livro_revista = '$cod_livro_revista', data_emprestimo = '$data_emprestimo', data_devolucao = '$data_devolucao', status_livro = '$status_livro', mat_func = '$mat_func' WHERE emprestimo.cod_emprestimo = $cod_emprestimo;";

mysqli_query($conexao,$alterar);

echo "<script>alert('Código do Emprestimo Alterado com Sucesso!!!');</script>";
echo "<meta http-equiv='refresh'content='2;EmprestimoLivros.html'/>";

}

?>
