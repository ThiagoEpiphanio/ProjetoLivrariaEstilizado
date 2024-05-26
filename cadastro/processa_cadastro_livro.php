<link rel="stylesheet" href="../styles/style.css">

<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Receber dados do formulário
$nomeLivro = $_POST['nomeLivro'];
$anoLancamento = $_POST['anoLancamento'];

// Inserir dados na tabela de livros
$sql = "INSERT INTO tblivro (nomeLivro, anoLancamento) VALUES ('$nomeLivro', '$anoLancamento')";

if ($conn->query($sql) === TRUE) {
    echo "Livro cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar livro: " . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="cadastro_livro.php" class="std-button">Cadastrar Novo Livro</a><br><br>
<a href="../index.php" class="std-button">Voltar à Home</a>