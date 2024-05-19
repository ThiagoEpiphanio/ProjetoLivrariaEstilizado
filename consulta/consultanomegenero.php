<!DOCTYPE html>
<html>
<head>
    <title>Busca Gêneros por Nome</title>
    <style>
        #generosTable {
            display: none;
        }
    </style>
    <script>
        function buscarGeneros() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("buscaInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("generosTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Index 1 corresponde ao nome do gênero
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
    <h1>Busca Gêneros por Nome</h1>
    <br>
    
    <input type="text" id="buscaInput" onkeyup="buscarGeneros()" placeholder="Buscar gêneros...">
    <table border="1" id="generosTable">
        <tr>
            <th>Código do gênero</th>
            <th>Nome do gênero</th>
        </tr>
        <?php
        // Conexão com o banco de dados
        $conn = new mysqli("localhost", "root", "", "bd2504204");

        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Consulta SQL para buscar os gêneros na tabela tbgenero
        $sql = "SELECT codGenero, genero FROM tbgenero";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['codGenero']}</td>";
                echo "<td>{$row['genero']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhum gênero encontrado.</td></tr>";
        }
        ?>
    </table>
    <br><br>
    <a href="../index.php">Voltar ao Menu</a>
</body>
</html>