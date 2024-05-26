<link rel="stylesheet" href="../styles/style.css">

<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Receber dados do formulário
$genero = $_POST['genero'];

// Inserir dados na tabela de gêneros
$sql = "INSERT INTO tbgenero (genero) VALUES ('$genero')";

if ($conn->query($sql) === TRUE) {
    echo "Gênero cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar gênero: " . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="cadastro_genero.php" class="std-button">Cadastrar Novo Gênero</a><br><br>
<a href="../index.php" class="std-button">Voltar à Home</a>