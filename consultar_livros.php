<?php

$codigo = $_POST["codigo"];

$conexao = mysqli_connect("localhost", "root", "");
mysqli_select_db($conexao, "biblioteca");

$consulta = "SELECT * FROM livros WHERE  cod_livro_revista= '$codigo';";

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


echo "<h1>Consultar Livros/Revistas</h1>";


echo "<table>";
echo "<tr><th>Código Livros/Revistas </th><th>Título</th><th>Autor</th><th>Ano</th><th>Quantidade</th><th>Localização</th><th>Editora</th><th>Classe</th><th>Tipo</th>
<th>Código CDD</th><th>Idioma</th><th>Tradução</th></tr>";


while ($registro = mysqli_fetch_array($resposta)) {
    $cod_livro_revista = $registro['cod_livro_revista'];
    $titulo = $registro['titulo'];
    $autor = $registro['autor'];
    $ano = $registro['ano'];
    $qtd = $registro['qtd'];
    $localizacao =$registro['localizacao'];
    $editora =$registro['editora'];
    $classe =$registro['classe'];
    $tipo =$registro['tipo'];
    $cod_cdd =$registro['cod_cdd'];
    $idioma =$registro['idioma'];
    $traducao =$registro['traducao'];


    echo "<tr>";
    echo "<td>" . $cod_livro_revista . "</td>";
    echo "<td>" . $titulo . "</td>";
    echo "<td>" . $autor . "</td>";
    echo "<td>" . $ano . "</td>";
    echo "<td>" . $qtd . "</td>";
    echo "<td>" . $localizacao . "</td>";
    echo "<td>" . $editora . "</td>";
    echo "<td>" . $classe . "</td>";
    echo "<td>" . $tipo . "</td>";
    echo "<td>" . $cod_cdd . "</td>";
    echo "<td>" . $idioma . "</td>";
    echo "<td>" . $traducao . "</td>";
    echo "</tr>";
}


echo "</table>";


echo "</body></html>";
?>
