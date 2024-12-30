<?php

$codigo = $_POST["codigo"];

$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "biblioteca");

$consulta = "SELECT * FROM emprestimo WHERE cod_emprestimo = '$codigo';";

$resposta = mysqli_query($conexao, $consulta);


echo "<html><head><style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: 'Sofia', sans-serif;
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


echo "<h1>Consultar Empréstimo de Livros</h1>";


echo "<table>";
echo "<tr><th>Código Empréstimo</th><th>Matrícula do Usuário</th><th>Código do Livro/Revista</th><th>Data do Empréstimo</th><th>Data de Devolução</th><th>Status do Livro</th><th>Matrícula do Funcionário</th></tr>";


while ($registro = mysqli_fetch_array($resposta)) {
    $cod_emprestimo = $registro['cod_emprestimo'];
    $mat_usuario = $registro['mat_usuario'];
    $cod_livro_revista = $registro['cod_livro_revista'];
    $data_emprestimo = $registro['data_emprestimo'];
    $data_devolucao = $registro['data_devolucao'];
    $status_livro = $registro['status_livro'];
    $mat_func = $registro['mat_func'];

    echo "<tr>";
    echo "<td>" . $cod_emprestimo . "</td>";
    echo "<td>" . $mat_usuario . "</td>";
    echo "<td>" . $cod_livro_revista . "</td>";
    echo "<td>" . $data_emprestimo . "</td>";
    echo "<td>" . $data_devolucao . "</td>";
    echo "<td>" . $status_livro . "</td>";
    echo "<td>" . $mat_func . "</td>";
    echo "</tr>";
}


echo "</table>";


echo "</body></html>";
?>

