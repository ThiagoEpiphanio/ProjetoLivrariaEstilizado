<link rel="stylesheet" href="../styles/style.css">

<?php
// Incluir o arquivo de conexão
include '../conexao.php';

// Verificar se o parâmetro codGenero foi passado via GET
if(isset($_GET['codGenero'])) {
    $codGenero = $_GET['codGenero'];

    // Query para selecionar o gênero com base no código fornecido
    $sql = "SELECT * FROM tbgenero WHERE codGenero = $codGenero";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir o formulário de edição
        while($row = $result->fetch_assoc()) {
?>
            <h2 class="page-title">Editar Gênero</h2>
            <form action="processa_edicao_genero.php" method="POST">
                <input type="hidden" name="codGenero" value="<?php echo $row['codGenero']; ?>">
                Nome do Gênero: <input type="text" name="genero" value="<?php echo $row['genero']; ?>">
                <input type="submit" value="Salvar">
            </form>
<?php
        }
    } else {
        echo "Gênero não encontrado.";
    }
} else {
    echo "Código do gênero não fornecido.";
}

// Fechar a conexão
$conn->close();
?>

<br>
<a href="../index.php" class="std-button">Voltar à Home</a>