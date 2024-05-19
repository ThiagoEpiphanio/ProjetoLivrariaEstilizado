<?php
// Inclui o arquivo de conexão
include '../conexao.php';

// Verifica se os dados do formulário foram enviados
if(isset($_POST['codGenero'], $_POST['genero'])) {
    $codGenero = $_POST['codGenero'];
    $genero = $_POST['genero'];

    // Atualiza os dados do gênero no banco de dados
    $sql = "UPDATE tbgenero SET genero='$genero' WHERE codGenero=$codGenero";

    if ($conn->query($sql) === TRUE) {
        echo "Gênero atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar gênero: " . $conn->error;
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