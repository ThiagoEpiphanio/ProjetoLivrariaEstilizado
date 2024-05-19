<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Verifica se os dados do formulário foram enviados
if(isset($_POST['codAutor'], $_POST['nomeAutor'])) {
    $codAutor = $_POST['codAutor'];
    $nomeAutor = $_POST['nomeAutor'];

    // Atualiza os dados do autor no banco de dados
    $sql = "UPDATE tbautor SET nomeAutor='$nomeAutor' WHERE codAutor=$codAutor";

    if ($conn->query($sql) === TRUE) {
        echo "Autor atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar autor: " . $conn->error;
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