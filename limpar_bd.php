<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd2504204";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Comandos para truncar as tabelas
$sql = "
TRUNCATE TABLE tblivro;
TRUNCATE TABLE tbautor;
TRUNCATE TABLE tbgenero;
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Banco de dados limpo e IDs reiniciados com sucesso.";
} else {
    echo "Erro ao limpar o banco de dados: " . $conn->error;
}

$conn->close();
?>