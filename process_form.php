<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.html');
    exit();
}

// Conectar ao banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter os valores dos campos do formulário
$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO forms (nome, data_nascimento) VALUES ('$nome', '$data_nascimento')";

if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso.";
} else {
    echo "Erro ao salvar os dados: " . $conn->error;
}

$conn->close();
?>
