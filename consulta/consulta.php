<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Dados</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 4px;
            font-size: 14px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        function confirmarExclusao() {
            return confirm("Tem certeza de que deseja excluir este item?");
        }
    </script>
</head>
<body>
    <h1>Consulta de Dados</h1>

    <?php
    // Inclui o arquivo de conexão
    include '../conexao.php';

    // Consulta os dados da tabela de livros
    $sqlLivros = "SELECT * FROM tblivro";
    $resultLivros = $conn->query($sqlLivros);

    if ($resultLivros->num_rows > 0) {
        echo "<h2>Livros</h2>";
        echo "<table>";
        echo "<tr><th>Código do Livro</th><th>Nome do Livro</th><th>Ano de Lançamento</th><th>Ações</th></tr>";
        while($row = $resultLivros->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["codLivro"]. "</td>";
            echo "<td>" . $row["nomeLivro"]. "</td>";
            echo "<td>" . $row["anoLancamento"]. "</td>";
            echo "<td>";
            echo "<a href='../edicao/editar_livro.php?codLivro=" . $row["codLivro"] . "'>Editar</a>";
            echo " | ";
            echo "<a href='../exclusao/processa_exclusao_livro.php?codLivro=" . $row["codLivro"] . "' onclick='return confirmarExclusao();'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum livro cadastrado.<br>";
    }

    // Consulta os dados da tabela de autores
    $sqlAutores = "SELECT * FROM tbautor";
    $resultAutores = $conn->query($sqlAutores);

    if ($resultAutores->num_rows > 0) {
        echo "<h2>Autores</h2>";
        echo "<table>";
        echo "<tr><th>Código do Autor</th><th>Nome do Autor</th><th>Ações</th></tr>";
        while($row = $resultAutores->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["codAutor"]. "</td>";
            echo "<td>" . $row["nomeAutor"]. "</td>";
            echo "<td>";
            echo "<a href='../edicao/editar_autor.php?codAutor=" . $row["codAutor"] . "'>Editar</a>";
            echo " | ";
            echo "<a href='../exclusao/processa_exclusao_autor.php?codAutor=" . $row["codAutor"] . "' onclick='return confirmarExclusao();'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum autor cadastrado.<br>";
    }

    // Consulta os dados da tabela de gêneros
    $sqlGeneros = "SELECT * FROM tbgenero";
    $resultGeneros = $conn->query($sqlGeneros);

    if ($resultGeneros->num_rows > 0) {
        echo "<h2>Gêneros</h2>";
        echo "<table>";
        echo "<tr><th>Código do Gênero</th><th>Gênero</th><th>Ações</th></tr>";
        while($row = $resultGeneros->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["codGenero"]. "</td>";
            echo "<td>" . $row["genero"]. "</td>";
            echo "<td>";
            echo "<a href='../edicao/editar_genero.php?codGenero=" . $row["codGenero"] . "'>Editar</a>";
            echo " | ";
            echo "<a href='../exclusao/processa_exclusao_genero.php?codGenero=" . $row["codGenero"] . "' onclick='return confirmarExclusao();'>Excluir</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum gênero cadastrado.";
    }

    // Fecha a conexão
    $conn->close();
    ?>

</body>
<br><br>
<a href="../index.php">Voltar ao Menu</a>
</html>