<!DOCTYPE html>
<html>
<head>
    <title>Editar Autor</title>
</head>
<body>
    <h1>Editar Autor</h1>

    <?php
    // Inclui o arquivo de conexão
    include '../conexao.php';

    // Verifica se o parâmetro codAutor foi passado na URL
    if(isset($_GET['codAutor'])) {
        $codAutor = $_GET['codAutor'];

        // Consulta os detalhes do autor com base no código fornecido
        $sql = "SELECT * FROM tbautor WHERE codAutor = $codAutor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Exibe um formulário pré-preenchido com os detalhes do autor
            $autor = $result->fetch_assoc();
            ?>

            <form action="processa_edicao_autor.php" method="post">
                <input type="hidden" name="codAutor" value="<?php echo $autor['codAutor']; ?>">
                Nome do Autor: <input type="text" name="nomeAutor" value="<?php echo $autor['nomeAutor']; ?>"><br>
                <input type="submit" value="Salvar">
            </form>

            <?php
        } else {
            echo "Autor não encontrado.";
        }
    } else {
        echo "Código do autor não especificado.";
    }

    // Fecha a conexão
    $conn->close();
    ?>

</body>
<br><br>
<a href="../index.php">Voltar ao Menu</a>
</html>