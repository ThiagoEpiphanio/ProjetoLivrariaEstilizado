<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Verifica se o parâmetro codLivro foi passado via GET
if(isset($_GET['codLivro'])) {
    $codLivro = $_GET['codLivro'];

    // Query para excluir o livro com base no código fornecido
    $sql = "DELETE FROM tblivro WHERE codLivro = $codLivro";

    if ($conn->query($sql) === TRUE) {
        // Redireciona de volta à página de consulta após a exclusão
        header("Location: ../consulta/consulta.php");
        exit();
    } else {
        echo "Erro ao excluir livro: " . $conn->error;
    }
} else {
    // Se o parâmetro codLivro não foi passado, exibe uma mensagem de erro
    echo "Código do livro não fornecido.";
}

// Fecha a conexão
$conn->close();
?>