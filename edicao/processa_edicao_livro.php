<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Verifica se os dados do formulário foram enviados
if(isset($_POST['codLivro'], $_POST['nomeLivro'], $_POST['anoLancamento'])) {
    $codLivro = $_POST['codLivro'];
    $nomeLivro = $_POST['nomeLivro'];
    $anoLancamento = $_POST['anoLancamento'];

    // Atualiza os dados do livro no banco de dados
    $sql = "UPDATE tblivro SET nomeLivro='$nomeLivro', anoLancamento='$anoLancamento' WHERE codLivro=$codLivro";

    if ($conn->query($sql) === TRUE) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar livro: " . $conn->error;
    }
} else {
    echo "Por favor, preencha todos os campos.";
}

// Fecha a conexão
$conn->close();
?>
<br><br>
<a href="../consulta/consulta.php">Voltar ao Menu de Consultas</a><br><br>
<a href="../index.php">Voltar ao Menu</a>