<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Verifica se o parâmetro codAutor foi passado via GET
if(isset($_GET['codAutor'])) {
    $codAutor = $_GET['codAutor'];

    // Query para excluir o autor com base no código fornecido
    $sql = "DELETE FROM tbautor WHERE codAutor = $codAutor";

    if ($conn->query($sql) === TRUE) {
        // Redireciona de volta à página de consulta após a exclusão
        header("Location: ../consulta/consulta.php");
        exit();
    } else {
        echo "Erro ao excluir autor: " . $conn->error;
    }
} else {
    // Se o parâmetro codAutor não foi passado, exibe uma mensagem de erro
    echo "Código do autor não fornecido.";
}

// Fecha a conexão
$conn->close();
?>