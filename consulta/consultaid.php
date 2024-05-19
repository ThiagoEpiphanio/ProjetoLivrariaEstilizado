<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "bd2504204");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Inicializar variável de mensagem
$message = "";

// Processar a busca pelo código do livro
if(isset($_POST['submit'])) {
    $codLivro = $_POST['codLivro'];

    // Consulta SQL para buscar o livro pelo código do livro
    $sql = "SELECT nomeLivro, anoLancamento FROM tblivro WHERE codLivro = '$codLivro'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $book = $result->fetch_assoc();
    } else {
        $message = "Nenhum livro encontrado com o código especificado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Livro por Código</title>
</head>
<body>
    <h1>Consulta de Livro por Código</h1>
    <form method="POST" action="">
        <label for="codLivro">Código do Livro:</label>
        <input type="text" name="codLivro" id="codLivro">
        <button type="submit" name="submit">Buscar</button>
    </form>

    <?php
    // Exibir o resultado da busca
    if(isset($book)) {
        echo "<h2>Detalhes do Livro:</h2>";
        echo "<p>Código do Livro: " . $codLivro . "</p>";
        echo "<p>Nome do Livro: " . $book['nomeLivro'] . "</p>";
        echo "<p>Ano de Lançamento: " . $book['anoLancamento'] . "</p>";
        // Adicione aqui mais detalhes do livro conforme necessário
    } elseif(!empty($message)) {
        echo "<p>$message</p>";
    }
    ?>

</body>

<br><br>
<a href="../index.php">Voltar ao Menu</a>

</html>