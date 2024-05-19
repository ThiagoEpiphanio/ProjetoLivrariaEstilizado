<?php
// Conexão com o banco de dados (substitua "localhost", "root", "", "livraria" de acordo com sua configuração)
$conn = new mysqli("localhost", "root", "", "bd2504204");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>