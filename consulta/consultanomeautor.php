<!DOCTYPE html>
<html>
<head>
    <title>Busca Autores por Nome</title>
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        #autoresTable {
            display: none;
        }
    </style>
    <script>
        function buscarAutores() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("buscaInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("autoresTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Index 1 corresponde ao nome do autor
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
    <h1 class="page-title">Busca Autores por Nome</h1>
    <br>
    
    <input type="text" id="buscaInput" onkeyup="buscarAutores()" placeholder="Buscar autores...">
    <table border="1" id="autoresTable">
        <tr>
            <th>Código do autor</th>
            <th>Nome do autor</th>
        </tr>
        <?php
        // Conexão com o banco de dados
        $conn = new mysqli("localhost", "root", "", "bd2504204");

        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Consulta SQL para buscar os autores na tabela tbautor
        $sql = "SELECT codAutor, nomeAutor FROM tbautor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['codAutor']}</td>";
                echo "<td>{$row['nomeAutor']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhum autor encontrado.</td></tr>";
        }
        ?>
    </table>
    <br><br>
    <a href="../index.php" class="std-button">Voltar à Home</a>
</body>
</html>