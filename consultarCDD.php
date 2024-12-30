<?php

$codigo = $_POST["codigo"];

$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "biblioteca");

$consulta = "SELECT * FROM cdd WHERE cod_cdd = '$codigo';";

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


echo "<h1>Consultar Código Decimal de Livros</h1>";


echo "<table>";
echo "<tr><th>Código CDD</th><th>Código SubTema</th><th>Tema</th><th>SubTema</th></tr>";


while ($registro = mysqli_fetch_array($resposta)) {
    $cod_cdd = $registro['cod_cdd'];
    $cod_subtema = $registro['cod_subtema'];
    $tema = $registro['tema'];
    $subtema = $registro['subtema'];

    echo "<tr>";
    echo "<td>" . $cod_cdd . "</td>";
    echo "<td>" . $cod_subtema . "</td>";
    echo "<td>" . $tema . "</td>";
    echo "<td>" . $subtema . "</td>";
    echo "</tr>";
}


echo "</table>";


echo "</body></html>";
?>

