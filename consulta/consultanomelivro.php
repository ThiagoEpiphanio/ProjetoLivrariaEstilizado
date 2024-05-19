<!DOCTYPE html>
<html>
<head>
    <title>Busca Livros por Nome</title>
    <style>
        #livrosTable {
            display: none;
        }
    </style>
    <script>
        function buscarLivros() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("buscaInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("livrosTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Index 1 corresponde ao nome do livro
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }

            // Exibe a tabela quando houver texto na caixa de busca
            if (filter.length > 0) {
                table.style.display = "table"; // Exibe a tabela
            } else {
                table.style.display = "none"; // Oculta a tabela
            }
        }
    </script>
</head>
<body>
    <h1>Busca Livros por Nome</h1>
    <br>
    
    <input type="text" id="buscaInput" onkeyup="buscarLivros()" placeholder="Buscar livros...">
    <table border="1" id="livrosTable">
        <tr>
            <th>Código do livro</th>
            <th>Nome do livro</th>
            <th>Ano de lançamento do livro</th>
            
        </tr>
        <?php
        // Conexão com o banco de dados
        $conn = new mysqli("localhost", "root", "", "bd2504204");

        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Consulta SQL para buscar os livros na tabela tblivro
        $sql = "SELECT codLivro, nomeLivro, anoLancamento FROM tblivro";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['codLivro']}</td>";
                echo "<td>{$row['nomeLivro']}</td>";
                echo "<td>{$row['anoLancamento']}</td>";
                
                  
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum livro encontrado.</td></tr>";
        }
        ?>
    </table>
    <br><br>
    <a href="../index.php">Voltar ao Menu</a>
</body>
</html>

