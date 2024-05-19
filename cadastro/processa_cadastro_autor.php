<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Receber dados do formulário
$nomeAutor = $_POST['nomeAutor'];

// Inserir dados na tabela de autores
$sql = "INSERT INTO tbautor (nomeAutor) VALUES ('$nomeAutor')";

if ($conn->query($sql) === TRUE) {
    echo "Autor cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar autor: " . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="cadastro_autor.php">Cadastrar Novo Autor</a><br><br>
<a href="../index.php">Voltar ao Menu</a>