<?php

$codigo = $_POST["codigo"];

$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "biblioteca");

$consulta = "SELECT * FROM funcionarios WHERE mat_func = '$codigo';";

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


echo "<h1>Consultar Funcionarios</h1>";


echo "<table>";
echo "<tr><th>MATRICULA DO FUNCIONARIO</th><th>NOME</th><th>SOBRENOME</th><th>CARGO</th><th>E-MAIL</th><th>SENHA</th><th>RUA</th><th>NUMERO</th><th>CIDADE</th><th>ESTADO</th></tr>";


while ($registro = mysqli_fetch_array($resposta)) {
    $mat_func = $registro['mat_func'];
    $nome = $registro['nome'];
    $sobrenome = $registro['sobrenome'];
    $cargo = $registro['cargo'];
    $email = $registro['email'];
    $senha = $registro['senha'];
    $rua = $registro['rua'];
    $numero = $registro['numero'];
    $cidade = $registro['cidade'];
     $estado = $registro['estado'];

    echo "<tr>";
    echo "<td>" . $mat_func . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $sobrenome . "</td>";
    echo "<td>" . $cargo . "</td>";
    echo "<td>" . $email . "</td>";
    echo "<td>" . $senha . "</td>";
    echo "<td>" . $rua . "</td>";
    echo "<td>" . $numero . "</td>";
    echo "<td>" . $cidade . "</td>";
    echo "<td>" . $estado . "</td>";

    echo "</tr>";
}


echo "</table>";


echo "</body></html>";
?>

