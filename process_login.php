<?php
session_start();

// Verificar as credenciais
$username = $_POST['username'];
$password = $_POST['password'];

// Validar as credenciais (exemplo simples)
if ($username === 'usuario' && $password === 'senha') {
    // Autenticação bem-sucedida, redirecionar para a página inicial
    $_SESSION['logged_in'] = true;
    header('Location: index.php');
    exit();
} else {
    // Credenciais inválidas, exibir mensagem de erro
    header('Location: login.html?error=1');
    exit();
}
?>
