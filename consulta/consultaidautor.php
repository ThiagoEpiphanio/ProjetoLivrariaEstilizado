<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "bd2504204");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Inicializar variável de mensagem
$message = "";

// Processar a busca pelo código do autor
if(isset($_POST['submit'])) {
    $codAutor = $_POST['codAutor'];

    // Consulta SQL para buscar o autor pelo código do autor
    $sql = "SELECT nomeAutor FROM tbautor WHERE codAutor = '$codAutor'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $autor = $result->fetch_assoc();
    } else {
        $message = "Nenhum autor encontrado com o código especificado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Autor por Código</title>
</head>
<body>
    <h1>Consulta de Autor por Código</h1>
    <form method="POST" action="">
        <label for="codAutor">Código do Autor:</label>
        <input type="text" name="codAutor" id="codAutor">
        <button type="submit" name="submit">Buscar</button>
    </form>

    <?php
    // Exibir o resultado da busca
    if(isset($autor)) {
        echo "<h2>Detalhes do Autor:</h2>";
        echo "<p>Código do Autor: " . $codAutor . "</p>";
        echo "<p>Nome do Autor: " . $autor['nomeAutor'] . "</p>";
        // Adicione aqui mais detalhes do autor conforme necessário
    } elseif(!empty($message)) {
        echo "<p>$message</p>";
    }
    ?>

</body>

<br><br>
<a href="../index.php">Voltar ao Menu</a>

</html>