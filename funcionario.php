<?php
$mat_func = $_POST["mat_func"];
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$cargo = $_POST["cargo"];
$email = $_POST["email"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

$conexao = mysqli_connect("localhost", "root", "");

mysqli_select_db($conexao,"biblioteca");

if(isset($_POST["cadastrar"])){  

$inserir = "INSERT INTO funcionarios(mat_func,nome,sobrenome,cargo,email,senha,rua,numero,cidade,estado)
VALUES ('$mat_func','$nome','$sobrenome','$cargo','$email','$senha','$rua','$numero','$cidade','$estado')";

mysqli_query($conexao,$inserir);

echo "Cadastro Realizado com Sucesso!!! <br><br>";

echo "<a href='CadastroFuncionarios.html'>Clique para Voltar e continuar Cadastrando.....</a>";



}else if(isset($_POST["excluir"])){

$excluir = "DELETE FROM funcionarios WHERE $mat_func = '$mat_func'";

mysqli_query($conexao,$excluir);

echo "<script>alert('Matricula do Funcionário Excluído com Sucesso!!!');</script>";

echo "<a href='CadastroFuncionarios.html'>Clique para Voltar e continuar Cadastrando.....</a>";
 
}else if(isset($_POST["alterar"])){

$alterar = "UPDATE funcionarios SET mat_func = '$mat_func', nome = '$nome', sobrenome = '$sobrenome', cargo = '$cargo', email = '$email', rua = '$rua', numero = '$numero', cidade = '$cidade', estado = '$estado' WHERE funcionarios.mat_func = '$mat_func';";

mysqli_query($conexao,$alterar);

echo "<script>alert('Matrícula do Funcionario Alterada com Sucesso!!!');</script>";
echo "<meta http-equiv='refresh'content='2;CadastroFuncionarios.html'/>";

}


?>
    
