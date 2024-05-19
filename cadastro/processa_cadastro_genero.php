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
<a href="../index.php">Voltar ao Menu</a>