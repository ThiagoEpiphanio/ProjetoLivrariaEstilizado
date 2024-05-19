<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Verifica se o parâmetro codGenero foi passado via GET
if(isset($_GET['codGenero'])) {
    $codGenero = $_GET['codGenero'];

    // Query para excluir o gênero com base no código fornecido
    $sql = "DELETE FROM tbgenero WHERE codGenero = $codGenero";

    if ($conn->query($sql) === TRUE) {
        // Redireciona de volta à página de consulta após a exclusão
        header("Location: ../consulta/consulta.php");
        exit();
    } else {
        echo "Erro ao excluir gênero: " . $conn->error;
    }
} else {
    // Se o parâmetro codGenero não foi passado, exibe uma mensagem de erro
    echo "Código do gênero não fornecido.";
}

// Fecha a conexão
$conn->close();
?>