<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "bd2504204");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Inicializar variável de mensagem
$message = "";

// Processar a busca pelo código do gênero
if(isset($_POST['submit'])) {
    $codGenero = $_POST['codGenero'];

    // Consulta SQL para buscar o gênero pelo código do gênero
    $sql = "SELECT genero FROM tbgenero WHERE codGenero = '$codGenero'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $genero = $result->fetch_assoc();
    } else {
        $message = "Nenhum gênero encontrado com o código especificado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Gênero por Código</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <h1 class="page-title">Consulta de Gênero por Código</h1>
    <form method="POST" action="">
        <label for="codGenero">Código do Gênero:</label>
        <input type="text" name="codGenero" id="codGenero">
        <button type="submit" name="submit">Buscar</button>
    </form>

    <?php
    // Exibir o resultado da busca
    if(isset($genero)) {
        echo "<h2>Detalhes do Gênero:</h2>";
        echo "<p>Código do Gênero: " . $codGenero . "</p>";
        echo "<p>Gênero: " . $genero['genero'] . "</p>";
        // Adicione aqui mais detalhes do gênero conforme necessário
    } elseif(!empty($message)) {
        echo "<p>$message</p>";
    }
    ?>

</body>

<br><br>
<a href="../index.php" class="std-button">Voltar à Home</a>
</html>