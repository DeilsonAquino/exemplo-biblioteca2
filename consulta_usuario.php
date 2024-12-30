<?php

$codigo = $_POST["codigo"];

$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "biblioteca");

$consulta = "SELECT * FROM usuarios WHERE mat_usuario = '$codigo';";

$resposta = mysqli_query($conexao, $consulta);


echo "<html><head><style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4e2020;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        h1 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
        }
      </style></head><body>";


echo "<h1>Consultar Usuarios</h1>";


echo "<table>";
echo "<tr><th>Matricula usuario</th><th>NOME</th><th>SOBRENOME</th><th>CPF</th><th>SEXO</th><th>DATA DE NASCIMENTO</th><th>TELEFONE</th><th>E-MAIL</th>
<th>SENHA</th><th>RUA</th><th>BAIRRO</th><th>CIDADE</th></tr>";


while ($registro = mysqli_fetch_array($resposta)) {
    $mat_usuario = $registro['mat_usuario'];
    $nome = $registro['nome'];
    $sobrenome = $registro['sobrenome'];
    $cpf = $registro['cpf'];
    $sexo = $registro['sexo'];
    $data_nascimento = $registro['data_nascimento'];
    $telefone = $registro['telefone'];
    $email = $registro['email'];
    $senha = $registro['senha'];
    $rua = $registro['rua'];
    $bairro = $registro['bairro'];
    $cidade = $registro['cidade'];

    echo "<tr>";
    echo "<td>" . $mat_usuario . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $sobrenome . "</td>";
    echo "<td>" . $cpf . "</td>";
    echo "<td>" . $sexo . "</td>";
    echo "<td>" . $data_nascimento . "</td>";
    echo "<td>" . $telefone . "</td>";
    echo "<td>" . $email . "</td>";
    echo "<td>" . $senha . "</td>";
    echo "<td>" . $rua . "</td>";
    echo "<td>" . $bairro . "</td>";
    echo "<td>" . $cidade . "</td>";
    echo "</tr>";
}


echo "</table>";


echo "</body></html>";
?>

