<!DOCTYPE html>
<html>
<head>
    <title>Editar Livro</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1 class="page-title">Editar Livro</h1>

    <?php
    // Inclui o arquivo de conexão
    include '../conexao.php';

    // Verifica se o parâmetro codLivro foi passado na URL
    if(isset($_GET['codLivro'])) {
        $codLivro = $_GET['codLivro'];

        // Consulta os detalhes do livro com base no código fornecido
        $sql = "SELECT * FROM tblivro WHERE codLivro = $codLivro";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Exibe um formulário pré-preenchido com os detalhes do livro
            $livro = $result->fetch_assoc();
            ?>

            <form action="processa_edicao_livro.php" method="post">
                <input type="hidden" name="codLivro" value="<?php echo $livro['codLivro']; ?>">
                Nome do Livro: <input type="text" name="nomeLivro" value="<?php echo $livro['nomeLivro']; ?>"><br>
                Ano de Lançamento: <input type="text" name="anoLancamento" value="<?php echo $livro['anoLancamento']; ?>"><br>
                <input type="submit" value="Salvar">
            </form>

            <?php
        } else {
            echo "Livro não encontrado.";
        }
    } else {
        echo "Código do livro não especificado.";
    }

    // Fecha a conexão
    $conn->close();
    ?>

</body>
<br><br>
<a href="../index.php" class="std-button">Voltar à Home</a>
</html>